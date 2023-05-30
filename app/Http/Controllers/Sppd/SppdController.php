<?php

namespace App\Http\Controllers\Sppd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sppd\SppdPengikutPostRequest;
use App\Http\Requests\Sppd\SppdPostRequest;
use App\Models\AlamatSkpdModel;
use App\Models\KendaraanModel;
use App\Models\PejabatModel;
use App\Models\PnsModel;
use App\Models\SkpdModel;
use App\Models\SppdModel;
use App\Models\SppdPengikutModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SppdController extends Controller
{
    private $sppdModel;
    private $sppdPengikutModel;
    private $pnsModel;
    private $kendaraanModel;
    private $skpdModel;
    private $alamatSkpdModel;
    private $pejabatModel;
    private $pengelola;
    public function __construct()
    {
        $this->sppdModel = new SppdModel();
        $this->sppdPengikutModel = new SppdPengikutModel();
        $this->pnsModel = new PnsModel();
        $this->kendaraanModel = new KendaraanModel();
        $this->skpdModel = new SkpdModel();
        $this->alamatSkpdModel = new AlamatSkpdModel();
        $this->pejabatModel = new PejabatModel();
        $this->pengelola = $this->sppdModel->getPengelola();
    }
    public function index(Request $request)
    {
        $title = "SPPD";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.sppd.list"), "val"=>"SPPD"]
        ];
        $countData = 0;
        $data = [];
        if($request->tahun){
            $data = $this->sppdModel->where("tahun",$request->tahun)->where("perdin",$request->perdin);
            if($request->keyword){
                $data = $data->where(function($query) use($request){
                    foreach ($this->sppdModel->getFillable() as $item => $value) {
                        if($item==0){
                            $query = $query->where($value, 'LIKE', "%".$request->keyword."%");
                        }else{
                            $query = $query->orWhere($value, 'LIKE', "%".$request->keyword."%");
                        }
                    }
                    $query->orWhereHas("getPns",function($query2) use($request){
                        $query2->where("nama", 'LIKE', "%".$request->keyword."%");
                        $query2->orWhere("nip", 'LIKE', "%".$request->keyword."%");
                        $query2->orWhere("jabatan", 'LIKE', "%".$request->keyword."%");
                    });
                });
            }
            $data = $data->paginate(10);
            $countData = $this->sppdModel->where("tahun",$request->tahun)->where("perdin",$request->perdin)->count();
        }
        return view('cpanel_admin.pages.sppd.index',compact("title","breadcrumb","data","countData"));
    }
    public function form(Request $request,$id=0)
    {
        $title = "SPPD";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.sppd.list"), "val"=>"SPPD"],
            ["url"=>"#", "val"=>"Tambah SPPD"],
        ];
        $pns = $this->pnsModel->get();
        $kendaraan = $this->kendaraanModel->get();
        $skpd = $this->skpdModel->get();
        $pengelola = $this->pengelola;
        $data = [];
        if($id)
            $data = $this->sppdModel->find($id);
        return view('cpanel_admin.pages.sppd.form',compact("title","breadcrumb","pns","kendaraan","skpd","pengelola","data","id"));
    }
    public function post(SppdPostRequest $request, $id = 0)
    {
        if(!$id){
            $checkDinas = $this->sppdModel->where("tanggal_berangkat",$request->tanggal_berangkat)->where("pns_id",$request->pns)->first();
            if($checkDinas){
                return redirect()->back()->withInput()->with("error","PEGAWAI SUDAH ADA JADWAL TANGGAL BERANGKAT ".Carbon::parse($request->tanggal_berangkat)->format("d - m - Y"));
            }
        }

        $save = $id ? $this->sppdModel->find($id) : $this->sppdModel;
        $save->pns_id = $request->pns;
        $save->skpd_id = $request->skpd;
        $save->kendaraan_id = $request->kendaraan;
        $save->dibuat_oleh = session("user_id");
        if(!$id){
            $save->no_agenda = no_agenda();
            $save->no_surat = no_surat(env("APP_LETTER_CODE"),no_agenda(),Carbon::now()->format("m"),Carbon::now()->format("Y"));
        }
        $save->tahun = $request->tahun;
        $save->tanggal_berangkat = $request->tanggal_berangkat;
        $save->tanggal_kembali = $request->tanggal_kembali;
        $save->tanggal_sppd = $request->tanggal_sppd;
        $save->dari_anggaran = $request->dari_anggaran;
        $save->tujuan = $request->tujuan;
        $save->pengelola = $request->pengelola;
        $save->perdin = $request->perdin;
        if(!$id)
            $save->status_persetujuan = "Menunggu";
        if($save->save())
            return redirect()->route("cpanel_admin.sppd.list",["tahun"=>$request->tahun,"perdin"=>$request->perdin])->with("success",$id ? __("messages.update_success") : __("messages.insert_success"));
        else
            return redirect()->back()->withInput()->with("error",$id ? __("messages.update_fail") : __("messages.insert_fail"));   
    }
    public function updateStatus(Request $request,$id,$status)
    {
        $save = $this->sppdModel->find($id);
        $save->status_persetujuan = $status;
        if($save->save())
            return redirect()->back()->with("success",__("messages.update_success"));
        else
            return redirect()->back()->with("error",__("messages.update_fail"));   
    }
    public function pengikut(Request $request, $id)
    {
        $sppd = $this->sppdModel->find($id);
        $title = "SPPD";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.sppd.list",["tahun" => $sppd->tahun,"perdin" => $sppd->perdin]), "val"=>"SPPD"],
            ["url"=>"#", "val"=>"Pengikut"],
        ];
        $countData = 0;
        $data = [];
        $data = $this->sppdPengikutModel->where("sppd_id",$id)->paginate(10);
        $countData = count($data);
        $pns = $this->pnsModel->where("id","!=",$sppd->pns_id)->get();
        return view('cpanel_admin.pages.sppd.pengikut',compact("title","breadcrumb","data","countData","pns","sppd"));
    }
    public function pengikutPost(SppdPengikutPostRequest $request, $id)
    {
        $sppd = $this->sppdModel->find($id);
        $checkDinas = $this->sppdPengikutModel->whereHas("getSppd",function($query)use($sppd){
            $query->where("tanggal_berangkat",$sppd->tanggal_berangkat);
        })->where("pns_id",$request->pns)->first();
        $checkDinas2 = $this->sppdModel->where("tanggal_berangkat",$sppd->tanggal_berangkat)->where("pns_id",$request->pns)->first();
        if($checkDinas || $checkDinas2){
            return redirect()->back()->withInput()->with("error","PEGAWAI SUDAH ADA JADWAL TANGGAL BERANGKAT ".Carbon::parse($sppd->tanggal_berangkat)->format("d - m - Y"));
        }

        $save = $this->sppdPengikutModel;
        $save->pns_id = $request->pns;
        $save->sppd_id = $id;
        if($save->save())
            return redirect()->back()->with("success",__("messages.insert_success"));
        else
            return redirect()->back()->with("error",__("messages.insert_fail"));   
    }
    public function pengikutDelete($id = 0)
    {
        $save = $this->sppdPengikutModel->find($id);
        if($save->delete())
            return redirect()->back()->with("success",__("messages.delete_success"));
        else
            return redirect()->back()->with("error",__("messages.delete_fail"));   
    }
    public function printHalamanDepan(Request $request, $id)
    {
        $title = "Print Halaman Depan";
        $sppd = $this->sppdModel->find($id);
        $alamatSkpd = $this->alamatSkpdModel->first();
        $pejabat = $this->pejabatModel->where("tahun",$sppd->tahun)->first();
        $start = new Carbon($sppd->tanggal_berangkat);
        $end = new Carbon($sppd->tanggal_kembali);
        $diffDay = $start->diff($end)->days + 1;
        $sppdPengikut = $this->sppdPengikutModel->where("sppd_id",$sppd->id)->get();
        $status = $sppd->status_persetujuan;
        return view('cpanel_admin.pages.surat.sppd_halaman_depan',compact("title","sppd","alamatSkpd","pejabat","diffDay","sppdPengikut","status"));
    }
    public function printHalamanBelakang(Request $request, $id)
    {
        $title = "Print Halaman Belakang";
        $sppd = $this->sppdModel->find($id);
        $pejabat = $this->pejabatModel->where("tahun",$sppd->tahun)->first();
        $status = $sppd->status_persetujuan;
        return view('cpanel_admin.pages.surat.sppd_halaman_belakang',compact("title","sppd","pejabat","status"));
    }
    public function printSpt(Request $request, $id)
    {
        $title = "Print SPT";
        $sppd = $this->sppdModel->find($id);
        $alamatSkpd = $this->alamatSkpdModel->first();
        $pejabat = $this->pejabatModel->where("tahun",$sppd->tahun)->first();
        $start = new Carbon($sppd->tanggal_berangkat);
        $end = new Carbon($sppd->tanggal_kembali);
        $diffDay = $start->diff($end)->days + 1;
        $sppdPengikut = $this->sppdPengikutModel->where("sppd_id",$sppd->id)->get();
        $status = $sppd->status_persetujuan;
        return view('cpanel_admin.pages.surat.spt',compact("title","sppd","alamatSkpd","pejabat","diffDay","sppdPengikut","status"));
    }
    public function rekapSppd($param)
    {
        $skpd = [];
        if($param == "rekap-tahun"){
            $title = "REKAP SPPD PER TAHUN";
        }else if($param == "rekap-bidang"){
            $title = "REKAP SPPD PER BIDANG";
            $skpd = $this->sppdModel->getPengelola();
        }
        return view('cpanel_admin.pages.sppd.rekap-sppd',compact("skpd","param","title")); 
    }
    public function rekapTahunPrint(Request $request)
    {
        $sppd = $this->sppdModel->where("tahun",$request->tahun);
        if($request->perdin)
            $sppd = $sppd->where("perdin", $request->perdin);
        $sppd = $sppd->get();
        return view('cpanel_admin.pages.surat.rekap_sppd_tahun',compact("sppd"));
    }
    public function rekapBidangPrint(Request $request)
    {
        $sppd = $this->sppdModel->where("tahun",$request->tahun)->where("pengelola",$request->bidang);
        if($request->perdin)
            $sppd = $sppd->where("perdin", $request->perdin);
        $sppd = $sppd->get();
        return view('cpanel_admin.pages.surat.rekap_sppd_bidang',compact("sppd"));
    }
}
