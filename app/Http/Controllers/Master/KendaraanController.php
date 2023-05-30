<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Kendaraan\KendaraanPostRequest;
use App\Models\KendaraanModel;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    private $kendaraanModel;
    public function __construct()
    {
        $this->kendaraanModel = new KendaraanModel();
    }
    public function index(Request $request)
    {
        $title = "Master Kendaraan";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.kendaraan.list"), "val"=>"Kendaraan"]
        ];
        $data = $this->kendaraanModel;
        if($request->keyword){
            $data = $data->where(function($query) use($request){
                foreach ($this->kendaraanModel->getFillable() as $item => $value) {
                    if($item==0){
                        $query = $query->where($value, 'LIKE', "%".$request->keyword."%");
                    }else{
                        $query = $query->orWhere($value, 'LIKE', "%".$request->keyword."%");
                    }
                }
            });
        }
        $data = $data->paginate(10);
        return view('cpanel_admin.pages.kendaraan.index',compact("title","breadcrumb","data"));
    }

    public function form(Request $request, $id=0)
    {
        $title = (!$id?"Tambah":"Edit")." Master Kendaraan";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.kendaraan.list"), "val"=>"Kendaraan"],
            ["url"=>"#", "val"=>(!$id?"Tambah":"Edit")." Kendaraan"],
        ];
        $data = [];
        if($id)
            $data = $this->kendaraanModel->find($id);
        return view('cpanel_admin.pages.kendaraan.form',compact("title","breadcrumb","data","id"));
    }
    
    public function post(KendaraanPostRequest $request, $id = 0)
    {
        $save = $id ? $this->kendaraanModel->find($id) : $this->kendaraanModel;
        $save->no_pol = $request->no_pol;
        $save->status_aktif = $request->status_aktif;
        if($save->save())
            return redirect()->route("cpanel_admin.master.kendaraan.list")->with("success",$id ? __("messages.update_success") : __("messages.insert_success"));
        else
            return redirect()->back()->with("error",$id ? __("messages.update_fail") : __("messages.insert_fail"));   
    }

    public function delete($id)
    {
        try {
            $save = $this->kendaraanModel->find($id);
            if($save->delete())
                return redirect()->back()->with("success",__("messages.delete_success"));
            else
                return redirect()->back()->with("error",__("messages.delete_fail"));
        } catch (\Throwable $th) {
            return redirect()->back()->with("error",__("messages.data_relate"));
        }   
    }
}
