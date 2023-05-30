<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pns\PnsPostRequest;
use App\Models\PnsModel;
use Illuminate\Http\Request;

class PnsController extends Controller
{
    private $pnsModel;
    public function __construct()
    {
        $this->pnsModel = new PnsModel();
    }
    public function index(Request $request)
    {
        $title = "Master Pns";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.pns.list"), "val"=>"Pns"]
        ];
        $data = $this->pnsModel;
        if($request->keyword){
            $data = $data->where(function($query) use($request){
                foreach ($this->pnsModel->getFillable() as $item => $value) {
                    if($item==0){
                        $query = $query->where($value, 'LIKE', "%".$request->keyword."%");
                    }else{
                        $query = $query->orWhere($value, 'LIKE', "%".$request->keyword."%");
                    }
                }
            });
        }
        $data = $data->paginate(10);
        return view('cpanel_admin.pages.pns.index',compact("title","breadcrumb","data"));
    }

    public function form(Request $request, $id=0)
    {
        $title = (!$id?"Tambah":"Edit")." Master Pns";
        $breadcrumb = [
            ["url"=>route("cpanel_admin.master.pns.list"), "val"=>"Pns"],
            ["url"=>"#", "val"=>(!$id?"Tambah":"Edit")." Pns"],
        ];
        $data = [];
        if($id)
            $data = $this->pnsModel->find($id);

        $gol = $this->pnsModel->getGol();
        $eselon = $this->pnsModel->getEselon();
        $tingkat = $this->pnsModel->getTingkat();
        return view('cpanel_admin.pages.pns.form',compact("title","breadcrumb","data","id","gol","eselon","tingkat"));
    }
    
    public function post(PnsPostRequest $request, $id = 0)
    {
        $save = $id ? $this->pnsModel->find($id) : $this->pnsModel;
        $save->nip = $request->nip;
        $save->nama = $request->nama;
        $save->gol = $request->gol;
        $save->pangkat = $request->pangkat;
        $save->jabatan = $request->jabatan;
        $save->eselon = $request->eselon;
        $save->tingkat = $request->tingkat;
        if($save->save())
            return redirect()->route("cpanel_admin.master.pns.list")->with("success",$id ? __("messages.update_success") : __("messages.insert_success"));
        else
            return redirect()->back()->with("error",$id ? __("messages.update_fail") : __("messages.insert_fail"));   
    }

    public function delete($id)
    {
        try {
            $save = $this->pnsModel->find($id);
            if($save->delete())
                return redirect()->back()->with("success",__("messages.delete_success"));
            else
                return redirect()->back()->with("error",__("messages.delete_fail"));
        } catch (\Throwable $th) {
            return redirect()->back()->with("error",__("messages.data_relate"));
        }   
    }
}
