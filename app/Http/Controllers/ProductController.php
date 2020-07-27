<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateApp;

class ProductController extends Controller
{
    
    public function show($id){
    	$template = TemplateApp::where('id',$id)->first();
    	return view('product.detail')->with(['tmp' => $template]);
    }
}
