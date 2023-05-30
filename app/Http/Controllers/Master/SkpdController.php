<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skpd\SkpdPostRequest;
use App\Models\SkpdModel;
use Illuminate\Http\Request;

class SkpdController extends Controller
{
    private $skpdModel;
    public function __construct()
    {
        $this->skpdModel = new SkpdModel();
    }
    public function index(Request $request)
    {
        $title = "Master SKPD";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.skpd.list"), "val"=>"SKPD"]
        ];
        $data = $this->skpdModel;
        if($request->keyword){
            $data = $data->where(function($query) use($request){
                foreach ($this->skpdModel->getFillable() as $item => $value) {
                    if($item==0){
                        $query = $query->where($value, 'LIKE', "%".$request->keyword."%");
                    }else{
                        $query = $query->orWhere($value, 'LIKE', "%".$request->keyword."%");
                    }
                }
            });
        }
        $data = $data->paginate(10);
        return view('cpanel_admin.pages.skpd.index',compact("title","breadcrumb","data"));
    }

    public function form(Request $request, $id=0)
    {
        $title = (!$id?"Tambah":"Edit")." Master SKPD";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.skpd.list"), "val"=>"SKPD"],
            ["url"=>"#", "val"=>(!$id?"Tambah":"Edit")." SKPD"],
        ];
        $data = [];
        if($id)
            $data = $this->skpdModel->find($id);
        return view('cpanel_admin.pages.skpd.form',compact("title","breadcrumb","data","id"));
    }
    
    public function post(SkpdPostRequest $request, $id = 0)
    {
        $save = $id ? $this->skpdModel->find($id) : $this->skpdModel;
        $save->kode = $request->kode;
        $save->nama = $request->nama;
        if($save->save())
            return redirect()->route("cpanel_admin.master.skpd.list")->with("success",$id ? __("messages.update_success") : __("messages.insert_success"));
        else
            return redirect()->back()->with("error",$id ? __("messages.update_fail") : __("messages.insert_fail"));   
    }

    public function delete($id)
    {
        try {
            $save = $this->skpdModel->find($id);
            if($save->delete())
                return redirect()->back()->with("success",__("messages.delete_success"));
            else
                return redirect()->back()->with("error",__("messages.delete_fail"));
        } catch (\Throwable $th) {
            return redirect()->back()->with("error",__("messages.data_relate"));
        }   
    }
}
