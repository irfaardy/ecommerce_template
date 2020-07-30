<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\TemplateApp;
use Auth;


class CheckoutController extends Controller
{
    public function index(){
    	$cart = Cart::where('user_id',Auth::user()->id)->get();
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
    	return view('checkout.index')->with(['cart' => $cart,'total' => $calc]);
    }
}
