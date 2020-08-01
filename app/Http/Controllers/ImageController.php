<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateImage;
use App\Models\BuktiTransfer;
use File;

class ImageController extends Controller
{
   public function ShowIMG($url)
   {
   		$pic= TemplateImage::where('url', '=', $url)->firstOrFail();
		
	 if($pic != null)
		{
		
	   	
			
		   		if(file_exists(storage_path('app/public/images/product/'.$pic->realpath)))
		   		{ 
			   		$img = file_get_contents(storage_path('app/public/images/product/'.$pic->realpath));
					return response($img)->header('Content-type','image/jpeg');
				} else {
					return abort('404');
				}
	   	 		
	   	 	  
	 }
	  else {
				return abort('404');
				}

	}
 public function bukti($url)
   {
   		$pic= BuktiTransfer::where('img_url_bukti', '=', $url)->firstOrFail();
		
	 if($pic != null)
		{
		
	   	
			
		   		if(file_exists(storage_path('app/private/buktitf/'.$pic->img_real_bukti)))
		   		{ 
			   		$img = file_get_contents(storage_path('app/private/buktitf/'.$pic->img_real_bukti));
					return response($img)->header('Content-type','image/jpeg');
				} else {
					return abort('404');
				}
	   	 		
	   	 	  
	 }
	  else {
				return abort('404');
				}

	}
	public function delete(Request $request){
		 if($request->ajax())
        {
        $path = storage_path('app/public/images/product/');
        $get = TemplateImage::where(['template_id' => $request->templid,'url' => $request->img])->first();
        if($get != null){
            
            if(file_exists($path.$get->img_real_path))
            {
                File::delete($path.$get->realpath);
              
            }
            if(TemplateImage::where(['template_id' => $request->templid,'url' => $request->img])->delete())
                return response()->json([ 'success' => true,
                                           'message' => "Gambar Berhasil dihapus",
                                         ]);
            } else { return response()->json([ 'success' => false,
                                                'message' => "Gambar Gagal dihapus",
                                     ]);
            }
        
        } else{ return abort(404); }
	}
}
