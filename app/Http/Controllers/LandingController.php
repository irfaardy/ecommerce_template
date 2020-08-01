<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateApp;

class LandingController extends Controller
{
    public function index(){
    	$template_new = TemplateApp::latest()->limit(4)->get();
    	$hot = TemplateApp::where('terjual','>',0)->orderBy('terjual','DESC')->limit(4)->get();
    	return view('layouts.master')->with(['tmp' => $template_new,'hot' => $hot]);
    }
}
