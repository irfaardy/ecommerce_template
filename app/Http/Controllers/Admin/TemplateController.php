<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TemplateApp;
use App\Models\Templates;
use App\Models\TemplateImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use DB;
use Auth;
use Validator;


class TemplateController extends Controller
{
   public function index(){
   		$tmp = TemplateApp::all();
   		return view('Template_Crud.index')->with(['template'=>$tmp]);
   }

   public function create(){
   		return view('Template_Crud.create');
   }
   public function edit($id){
      $tmp = TemplateApp::where('id',$id)->first();
      return view('Template_Crud.edit')->with(['tmp' => $tmp]);
   }
   public function store(Request $request){
   		$validator = Validator::make($request->all(),[
                           'nama' =>'required',
                           'sku' =>'required|unique:tb_template_app,sku',
                           'platform' =>'required|exists:tb_template_platforms,id',
                           'theme' =>'required|exists:tb_template_theme_cat,id',
                           'price' =>'required|numeric',
                           'deskripsi' =>'required|string',
                           'file' => 'required|file|max:50000', // max 50MB
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
      
      try {
        // dd($request->images);
        $tmp= TemplateApp::create([  
                'sku' => $request->sku,
                'nama' => $request->nama,
                'category_id' => $request->platform,
                'theme_id' => $request->theme,
                'deskripsi' => $request->deskripsi,
                'link_demo'=> $request->link_demo,
                'price' => $request->price,
                'discount' => $request->discount,
                'updated_by' => Auth::user()->id]);
        // file upload
        $file = $request->file('file');
        $ext =  $file->getClientOriginalExtension();
        $name = str_replace(' ', '_', strtolower($request->nama));
        $gen_name = 'TEMPLATE_'.$name.'_'.date("Ymd").'.'.$ext;
        $genLink = Str::random(80);
        $size = $file->getSize();
        $file->move(storage_path('app/private/templates/uploaded'), $gen_name);
        Templates::create(['template_id'=>$tmp->id,'link_download' => $genLink,'real_path' => $gen_name,'size' =>  $size]);
        //Image Upload
        $files= $request->file('images');
          foreach($files as $fg)
          {
            // dd($fg->getRealPath());
             $rand = Str::random(8);
             $imgname = date('Ymd').'_'.$rand.'_'.$request->sku.'.jpg';
             $imgname_url = time().'_'.$rand.'_'.$request->sku.'.jpg';
             $dest_path = storage_path('app/public/images/product');

             Image::make($fg->getRealPath())
                          ->resize(1200,null,function($constraint)
                            {
                              $constraint->aspectRatio();
                              $constraint->upsize();
                             })
                          ->save($dest_path."/".$imgname,75);
                TemplateImage::create(['template_id'=>$tmp->id,'realpath'=>$imgname,'url'=>$imgname_url,'mime'=>$fg->getMimeType(),'size'=>$fg->getSize()]);
            } 


       

            return redirect()->route('template')->with(['message_success' => "Sukses Menambahkan Template"]);
    } catch (\Exception $e) {
        
          dd($e);
           return redirect()->back()->with(['message_fail' => "Gagal Menyimpan data"]);
      }
   }
}
