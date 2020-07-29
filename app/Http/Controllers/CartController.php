<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\TemplateApp;
use Auth;

class CartController extends Controller
{
    public function cart_push($id){
    	try{
    		$cek = TemplateApp::where('id',$id)->first();
    		$cekCart = Cart::where(['template_id' => $id,'user_id' => Auth::user()->id])->count();
    		if($cekCart > 0){
    			return response()->json(['err'=>true,'message' => "Template sudah di tambahkan ke keranjang."]);
    		}
    		if(empty($cek)){
				return response()->json(['err'=>true,'message' => "Template tidak ditemukan."]);
    		}
    		Cart::create(['template_id' => $id,"user_id" => Auth::user()->id]);
    		$count = Cart::where(["user_id" => Auth::user()->id])->count();
    		return response()->json(['err'=>false,'message' => $cek->nama." telah ditambahkan ke keranjang","count" =>$count]);
    	} catch(\Exception $e){
    		return response()->json(['err'=>true,'message' => "Internal Server Error, Kesalahan saat menyimpan data.".$e]);
    	}
    }
}
