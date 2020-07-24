<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TemplateApp;
use Illuminate\Http\Request;
use Image;
use Auth;
use Validator

class TemplateController extends Controller
{
   public function index(){
   		$tmp = TemplateApp::all();
   		return view('Template_Crud.index')->with(['template'=>$tmp]);
   }

   public function create(){
   		return view('Template_Crud.create');
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
        TemplateApp::create([	'sku' => $request->sku,
								'nama' => $request->nama,
								'category_id' => $request->category,
								'theme_id' => $request->theme,
								'deskripsi' => $request->deskripsi,
								'link_demo'=> $request->link_demo,
								'price' => $request->price,
								'discount' => $request->discount,
								'updated_by' => Auth::user()->id]);
            return redirect()->route('template.platform')->with(['message_success' => "Sukses Menambahkan Kategori"]);
   }
}
