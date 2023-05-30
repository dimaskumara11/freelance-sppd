<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SppdModel;

class DashboardController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $title = "Dashboard";
        $breadcrumb = [];
        $countSppd = SppdModel::count();
        $countSppdMenunggu = SppdModel::where("status_persetujuan","Menunggu")->count();
        $countSppdDiSetujui = SppdModel::where("status_persetujuan","Setujui")->count();
        $countSppdDiTolak = SppdModel::where("status_persetujuan","Tolak")->count();
        return view('cpanel_admin.pages.dashboard',compact("title","breadcrumb","countSppd","countSppdMenunggu","countSppdDiSetujui","countSppdDiTolak"));
    }
}
