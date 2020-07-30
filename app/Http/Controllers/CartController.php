<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\TemplateApp;
use Auth;

class CartController extends Controller
{
	public function index(){
		$cart = Cart::where('user_id',Auth::user()->id)->paginate(12);
		$sum = Cart::where('user_id',Auth::user()->id)->get();
		$calc =0;
		foreach($sum as $s){
			if(!empty($s->template->discount)){
				$discount = $s->template->discount / 100;
				$tanpa_diskon = $s->template->price;
				$total = $tanpa_diskon-($s->template->price*$discount);
			} else{
				
				$total = $s->template->price;
			}
			$calc += $total;
		}
		

		return view('cart.index')->with(['cart' => $cart,'total' => $calc]);
	}
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
    		return response()->json(['err'=>true,'message' => "Internal Server Error, Kesalahan saat menyimpan data."]);
    	}
    }
    public function cart_delete($id){
    	$cekCart = Cart::where(['id' => $id,'user_id' => Auth::user()->id])->count();
    	try{
	    	if($cekCart == 0){
	    			return response()->json(['err'=>true,'message' => "Barang di keranjang sudah di hapus."]);
	    		} 
	    			Cart::where(['id' => $id,"user_id" => Auth::user()->id])->delete();
	    			$count = Cart::where(["user_id" => Auth::user()->id])->count();
	    			return response()->json(['err'=>false,'message' => "Barang di keranjang berhasil di hapus.",'count' => $count]);

    		} catch(\Exception $e){
    			return response()->json(['err'=>false,'message' => "Internal Server Error, Kesalahan saat menyimpan data."]);
    	}
    }
}
