<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\TemplateApp;
use App\Models\Transaction;
use App\Models\TransactionDetails;
use App\Models\Redeem;
use Auth;
use Validator;
use Str;
use Ramsey\Uuid\Uuid;


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
    public function test(){
    	$uid = Uuid::uuid4();;
    	echo $uid->toString();
    }
    public function progress(Request $request){
		$validator = Validator::make($request->all(),[
                           'bank' =>'required|exists:bank,id',
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        if(count($cart) ==0){
        	return redirect()->route('shoppingcart')->with(['message_fail' => 'Tidak dapat melakukan checkout, karena keranjang belanja anda kosong.'])
                                          ->withInput($request->all());
        }
		$calc =0;
		foreach($cart as $s){
			if(!empty($s->template->discount)){
				$discount = $s->template->discount / 100;
				$tanpa_diskon = $s->template->price;
				$total = $tanpa_diskon-($s->template->price*$discount);
			} else{
				
				$total = $s->template->price;
			}
			$calc += $total;
		}
			
            $timeout = time()+(((3600)*24));//1 hari
         	$generate_inv = "INV/".date("Y")."/".date("m")."/".strtoupper(Str::random(4));
         	$params = [	'invoice' => $generate_inv,
			         	'id_user' => Auth::user()->id,
			         	'link' => Uuid::uuid4(),
			         	'total_harga' => $calc,
			         	'metode_pembayaran' => "TRANSFER",
			         	'bank_id' => $request->bank,
			         	'is_verify' => false,
			         	'timeout' =>  $timeout,
			         	'is_canceled' => false,
			         	'updated_by' => Auth::user()->id];
         $trans = Transaction::create($params);

        $move = Cart::where('user_id',Auth::user()->id)->get();
		foreach($move as $mv){
			TransactionDetails::create(['transaksi_id' => $trans->id,'template_id' => $mv->template_id,'harga' => $mv->template->price - ($mv->template->price*($mv->template->discount/100)),'discount' => $mv->template->discount]);
			Cart::where('id',$mv->id)->delete();
		}
		return redirect()->route('checkout.success',['id' => $trans->link])->with(['message_success' => "Mohon segera lakukan konfirmasi pembayaran"]);

    }

    public function success($id){
    	$data = Transaction::where(['link' => $id,'id_user' => Auth::user()->id])->first();
    	 
    	return view('checkout.success')->with(['data' => $data]);
    }
}
