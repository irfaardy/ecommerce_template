<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryTheme;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
   public function index(){
   		$tmp = CategoryTheme::all();
   		return view('template_theme_cat.index')->with(['template'=>$tmp]);
   }

   public function create(){
   		return view('template_theme_cat.create');
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
        CategoryTheme::create(['nama'=>$request->nama,'deskripsi'=>$request->deskripsi,'hidden_from_category'=>$request->hidden]);
            return redirect()->route('template.theme')->with(['message_success' => "Sukses Menambahkan Platform"]);
   }
    public function edit($id){
   		$tmp = CategoryTheme::where('id',$id)->first();
   		return view('template_theme_cat.edit')->with(['template'=>$tmp]);
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
        CategoryTheme::where('id',$request->id)->update(['nama'=>$request->nama,'deskripsi'=>$request->deskripsi,'hidden_from_category'=>$request->hidden]);
            return redirect()->route('template.theme')->with(['message_success' => "Sukses Mengubah Platform"]);
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
        CategoryTheme::where('id',$request->id)->delete();
            return redirect()->route('template.theme')->with(['message_success' => "Sukses Menghapus Platform"]);
   }
}
