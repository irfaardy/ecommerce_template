<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateApp;

class CategoryController extends Controller
{
    public function index($cat){
    	$template = TemplateApp::where('theme_id',$cat)->paginate(12);
    	return view('product.category')->with(['tmp' => $template]);
    }
}
