<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlamatSkpd\AlamatSkpdPostRequest;
use App\Models\AlamatSkpdModel;
use Illuminate\Http\Request;

class AlamatSkpdController extends Controller
{
    private $alamatSkpdModel;
    public function __construct()
    {
        $this->alamatSkpdModel = new AlamatSkpdModel();
    }
    public function index()
    {
        $title = "Master Alamat Skpd";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.alamat-skpd.list"), "val"=>"Alamat Skpd"]
        ];
        $data = $this->alamatSkpdModel->paginate(10);
        return view('cpanel_admin.pages.alamat-skpd.index',compact("title","breadcrumb","data"));
    }

    public function form(Request $request, $id=0)
    {
        $title = (!$id?"Tambah":"Edit")." Master Alamat Skpd";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.alamat-skpd.list"), "val"=>"Alamat Skpd"],
            ["url"=>"#", "val"=>(!$id?"Tambah":"Edit")." Alamat Skpd"],
        ];
        $data = [];
        if($id)
            $data = $this->alamatSkpdModel->find($id);
        return view('cpanel_admin.pages.alamat-skpd.form',compact("title","breadcrumb","data","id"));
    }
    
    public function post(AlamatSkpdPostRequest $request, $id = 0)
    {
        $save = $id ? $this->alamatSkpdModel->find($id) : $this->alamatSkpdModel;
        $save->nama_skpd = $request->nama_skpd;
        $save->alamat = $request->alamat;
        $save->kode_pos = $request->kode_pos;
        if($save->save())
            return redirect()->route("cpanel_admin.master.alamat-skpd.list")->with("success",$id ? __("messages.update_success") : __("messages.insert_success"));
        else
            return redirect()->back()->with("error",$id ? __("messages.update_fail") : __("messages.insert_fail"));   
    }

    public function delete($id)
    {
        try {
            $save = $this->alamatSkpdModel->find($id);
            if($save->delete())
                return redirect()->back()->with("success",__("messages.delete_success"));
            else
                return redirect()->back()->with("error",__("messages.delete_fail"));
        } catch (\Throwable $th) {
            return redirect()->back()->with("error",__("messages.data_relate"));
        }   
    }
}
