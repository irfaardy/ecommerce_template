<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateApp;

class LandingController extends Controller
{
    public function index(){
    	$template_new = TemplateApp::latest()->limit(4)->get();
    	return view('layouts.master')->with(['tmp' => $template_new]);
    }
}
