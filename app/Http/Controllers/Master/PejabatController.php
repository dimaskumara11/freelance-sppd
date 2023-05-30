<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pejabat\PejabatPostRequest;
use App\Models\PejabatModel;
use Illuminate\Http\Request;

class PejabatController extends Controller
{
    private $pejabatModel;
    public function __construct()
    {
        $this->pejabatModel = new PejabatModel();
    }
    public function index(Request $request)
    {
        $title = "Master Pejabat";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.pejabat.list"), "val"=>"Pejabat"]
        ];
        $data = $this->pejabatModel;
        if($request->keyword){
            $data = $data->where(function($query) use($request){
                foreach ($this->pejabatModel->getFillable() as $item => $value) {
                    if($item==0){
                        $query = $query->where($value, 'LIKE', "%".$request->keyword."%");
                    }else{
                        $query = $query->orWhere($value, 'LIKE', "%".$request->keyword."%");
                    }
                }
            });
        }
        $data = $data->paginate(10);
        return view('cpanel_admin.pages.pejabat.index',compact("title","breadcrumb","data"));
    }

    public function form(Request $request, $id=0)
    {
        $title = (!$id?"Tambah":"Edit")." Master Pejabat";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.pejabat.list"), "val"=>"Pejabat"],
            ["url"=>"#", "val"=>(!$id?"Tambah":"Edit")." Pejabat"],
        ];
        $data = [];
        if($id)
            $data = $this->pejabatModel->find($id);
        $tingkat = $this->pejabatModel->getTingkat();
        return view('cpanel_admin.pages.pejabat.form',compact("title","breadcrumb","data","id","tingkat"));
    }
    
    public function post(PejabatPostRequest $request, $id = 0)
    {
        $save = $id ? $this->pejabatModel->find($id) : $this->pejabatModel;
        $save->tahun = $request->tahun;
        $save->nip = $request->nip;
        $save->nama = $request->nama;
        $save->pangkat = $request->pangkat;
        $save->jabatan = $request->jabatan;
        $save->jabatan_sebenarnya = $request->jabatan_sebenarnya;
        $save->status_aktif = $request->status_aktif;
        $save->tingkat = $request->tingkat;
        if($save->save())
            return redirect()->route("cpanel_admin.master.pejabat.list")->with("success",$id ? __("messages.update_success") : __("messages.insert_success"));
        else
            return redirect()->back()->with("error",$id ? __("messages.update_fail") : __("messages.insert_fail"));   
    }

    public function delete($id)
    {
        try {
            $save = $this->pejabatModel->find($id);
            if($save->delete())
                return redirect()->back()->with("success",__("messages.delete_success"));
            else
                return redirect()->back()->with("error",__("messages.delete_fail"));
        } catch (\Throwable $th) {
            return redirect()->back()->with("error",__("messages.data_relate"));
        }   
    }
}
