<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Master\AlamatSkpdController;
use App\Http\Controllers\Master\KendaraanController;
use App\Http\Controllers\Master\PejabatController;
use App\Http\Controllers\Master\PnsController;
use App\Http\Controllers\Master\SkpdController;
use App\Http\Controllers\Sppd\SppdController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('cpanel_admin.login');
});

Route::group(['as'=>'cpanel_admin.'], function(){
    Route::post('/login', [LoginController::class, "post"])->name("login.post");
    Route::middleware("check-session")->group(function(){
        Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard");
        Route::group(['prefix'=>'sppd','as'=>'sppd.'], function(){
            Route::get('/', [SppdController::class, "index"])->name("list");
            Route::get('/form', [SppdController::class, "form"])->name("add");
            Route::post('/form/post', [SppdController::class, "post"])->name("post");
            Route::post('/form/post/{id}', [SppdController::class, "post"]);
            Route::get('/form/{id}', [SppdController::class, "form"])->name("edit");

            Route::get('/print-halaman-depan/{id}', [SppdController::class, "printHalamanDepan"])->name("print.halaman_depan");
            Route::get('/print-halaman-belakang/{id}', [SppdController::class, "printHalamanBelakang"])->name("print.halaman_belakang");
            Route::get('/print-spt/{id}', [SppdController::class, "printSpt"])->name("print.spt");

            Route::get('/pengikut/{id}', [SppdController::class, "pengikut"])->name("pengikut");
            Route::get('/pengikut/delete/{id}', [SppdController::class, "pengikutDelete"])->name("pengikut.delete");
            Route::post('/pengikut/post/{id}', [SppdController::class, "pengikutPost"])->name("pengikut.post");
            
            Route::middleware("only-kepala-dinas")->group(function(){
                Route::get('/update-status/{id}/{status?}', [SppdController::class, "updateStatus"])->name("update-status");
            });
        });
        Route::group(['prefix'=>'rekap-sppd','as'=>'rekap-sppd.'], function(){
            Route::get('/{param}', [SppdController::class, "rekapSppd"])->name("filter");
            Route::get('/print/rekap-tahun', [SppdController::class, "rekapTahunPrint"])->name("print-rekap-tahun");
            Route::get('/print/rekap-bidang', [SppdController::class, "rekapBidangPrint"])->name("print-rekap-bidang");
        });
        Route::middleware("only-admin")->group(function(){
            Route::group(['prefix'=>'master','as'=>'master.'], function(){
                Route::group(['prefix'=>'skpd','as'=>'skpd.'], function(){
                    Route::get('/', [SkpdController::class, "index"])->name("list");
                    Route::get('/tambah', [SkpdController::class, "form"])->name("add");
                    Route::get('/edit/{id}', [SkpdController::class, "form"])->name("edit");
                    Route::get('/hapus/{id}', [SkpdController::class, "delete"])->name("delete");
                    Route::post('/post/{id?}', [SkpdController::class, "post"])->name("post");
                });
                Route::group(['prefix'=>'pns','as'=>'pns.'], function(){
                    Route::get('/', [PnsController::class, "index"])->name("list");
                    Route::get('/tambah', [PnsController::class, "form"])->name("add");
                    Route::get('/edit/{id}', [PnsController::class, "form"])->name("edit");
                    Route::get('/hapus/{id}', [PnsController::class, "delete"])->name("delete");
                    Route::post('/post/{id?}', [PnsController::class, "post"])->name("post");
                });
                Route::group(['prefix'=>'kendaraan','as'=>'kendaraan.'], function(){
                    Route::get('/', [KendaraanController::class, "index"])->name("list");
                    Route::get('/tambah', [KendaraanController::class, "form"])->name("add");
                    Route::get('/edit/{id}', [KendaraanController::class, "form"])->name("edit");
                    Route::get('/hapus/{id}', [KendaraanController::class, "delete"])->name("delete");
                    Route::post('/post/{id?}', [KendaraanController::class, "post"])->name("post");
                });
                Route::group(['prefix'=>'alamat-skpd','as'=>'alamat-skpd.'], function(){
                    Route::get('/', [AlamatSkpdController::class, "index"])->name("list");
                    Route::get('/tambah', [AlamatSkpdController::class, "form"])->name("add");
                    Route::get('/edit/{id}', [AlamatSkpdController::class, "form"])->name("edit");
                    Route::get('/hapus/{id}', [AlamatSkpdController::class, "delete"])->name("delete");
                    Route::post('/post/{id?}', [AlamatSkpdController::class, "post"])->name("post");
                });
                Route::group(['prefix'=>'pejabat','as'=>'pejabat.'], function(){
                    Route::get('/', [PejabatController::class, "index"])->name("list");
                    Route::get('/tambah', [PejabatController::class, "form"])->name("add");
                    Route::get('/edit/{id}', [PejabatController::class, "form"])->name("edit");
                    Route::get('/hapus/{id}', [PejabatController::class, "delete"])->name("delete");
                    Route::post('/post/{id?}', [PejabatController::class, "post"])->name("post");
                });
            });
        });
        Route::get('/logout', [LoginController::class, "logout"])->name("logout");
    });
});