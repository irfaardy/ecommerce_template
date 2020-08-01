<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemplateApp;
use App\Models\BuktiTransfer;
use App\Models\Transaction;
use App\Models\Redeem;
use App\Models\TransactionDetails;
use Validator;
use Str;
use DB;
use Auth;

class TransaksiController extends Controller
{
    function konfirmasi(){
    	$trans = Transaction::where('timeout','>',time())->where(['is_verify' => false])->where('is_canceled',false)->paginate(12);
    	return view('dashboard_transaction/konfirmasi')->with(['trans' => $trans]);
    }

    function show($id){
    	$trans = Transaction::where('id',$id)->first();
    	if(empty($trans)){
    		return redirect()->back()->with(['message_fail' => "Transaksi tidak ditemukan"]);
    	}
    	return view('dashboard_transaction/verifikasi_pembayaran')->with(['trans' => $trans]);
    }

     function verify(Request $request){
     	$validator = Validator::make($request->all(),[
                           'transaksi_id' =>'required|exists:tb_transaksi,id',
                          
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
        $serial=strtoupper(Str::random(4)."-".Str::random(4)."-".Str::random(4)."-".Str::random(4));
    	$trans = Transaction::where('id',$request->transaksi_id)->update(['is_verify' => true]);
    	$trans = Transaction::where('id',$request->transaksi_id)->first();
    	foreach($trans->details as $dtl){
			TemplateApp::where(['id' => $dtl->template_id])->update(['terjual' => DB::raw('terjual+1')]);
    	}
        Redeem::create(['transaction_id' => $request->transaksi_id,'user_id' => Auth::user()->id,'serial' =>$serial]);
    	
    	return redirect()->back()->with(['message_success' => "Berhasil memverifikasi pembayaran"]);
    }
}
