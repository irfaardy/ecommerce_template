<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Platform;
use Validator;

class PlatformController extends Controller
{
     public function index(){
   		$tmp = Platform::all();
   		return view('template_platform.index')->with(['template'=>$tmp]);
   }

   public function create(){
   		return view('template_platform.create');
   }

   public function store(Request $request){
   		$validator = Validator::make($request->all(),[
                           'nama' =>'required',
                           'hidden' =>'required|in:1,0',
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
        Platform::create(['nama'=>$request->nama,'deskripsi'=>$request->deskripsi,'hidden_from_category'=>$request->hidden]);
            return redirect()->route('template.platform')->with(['message_success' => "Sukses Menambahkan Kategori"]);
   }
    public function edit($id){
   		$tmp = Platform::where('id',$id)->first();
   		return view('template_platform.edit')->with(['template'=>$tmp]);
   }

    public function update(Request $request){
   		$validator = Validator::make($request->all(),[
                           'nama' =>'required',
                           'id' =>'required|exists:tb_template_platform',
                           'hidden' =>'required|in:1,0',
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
        Platform::where('id',$request->id)->update(['nama'=>$request->nama,'deskripsi'=>$request->deskripsi,'hidden_from_category'=>$request->hidden]);
            return redirect()->route('template.platform')->with(['message_success' => "Sukses Mengubah Kategori"]);
   }
   public function delete($id,Request $request){
   		$validator = Validator::make($request->all(),[
                           'id' =>'required|exists:tb_template_platform',
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
        Platform::where('id',$request->id)->delete();
            return redirect()->route('template.platform')->with(['message_success' => "Sukses Menghapus Kategori"]);
   }
}
