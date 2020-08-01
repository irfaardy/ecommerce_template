<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateApp;
use App\Models\BuktiTransfer;
use App\Models\Transaction;
use App\Models\TransactionDetails;
use Auth;
use Image;
use Validator;
use Str;

class TransactionController extends Controller
{
	function upload_bukti(Request $request){
		$validator = Validator::make($request->all(),[
                           'id_transaksi' =>'required|exists:tb_transaksi,id',
                           'file' =>'required|max:3000|mimes:jpg,png,jpeg,pdf,bmp',
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
             $file = $request->file('file');
       	 	 $ext =  $file->getClientOriginalExtension();
             $rand = Str::random(8);
             $imgname = date('Ymd').'_BUKTI-TF_'.Auth::user()->id.'-'.$request->id_transaksi.'.'.$ext;
             $imgname_url = date('Ymd').'_BUKTI-TF_'.Auth::user()->id.'-'.$request->id_transaksi.'.'.$ext;

             $dest_path = storage_path('app/private/buktitf');
              if(!is_dir($dest_path)){
              	 mkdir($dest_path,770);
              }

             Image::make($file->getRealPath())
                          ->resize(1800,null,function($constraint)
                            {
                              $constraint->aspectRatio();
                              $constraint->upsize();
                             })
                          ->save($dest_path."/".$imgname,75);
             BuktiTransfer::create(['transaksi_id' => $request->id_transaksi,'user_id' => Auth::user()->id,'img_url_bukti' => $imgname_url,'img_real_bukti' => $imgname]);
             return redirect()->route('status.konfirmasi')->with(['message_success' => 'Berhasil mengirimkan konfirmasi.']);

	}
	function cancel(Request $request){
		$validator = Validator::make($request->all(),[
                           'id_transaksi' =>'required|exists:tb_transaksi,id',
                           'alasan' =>'required',
                       ]);
           if ($validator->fails()){
                $error= $validator->errors()->first();
                 return redirect()->back()->with(['message_fail' => $error])
                                          ->withInput($request->all());
            }
            Transaction::where(['id_user' => Auth::user()->id,'id'=>$request->id_transaksi])->update(['is_canceled'=>true,'alasan_batal' => $request->alasan]);
            return redirect()->route('status.gagal')->with(['message_success' => 'Berhasil membatalkan pesanan.']);
	}
    function konfirmasi(){
    	$trans = Transaction::where(['id_user' => Auth::user()->id])->where('timeout','>',time())->where(['is_verify' => false])->where('is_canceled',false)->paginate(12);

    	return view('status.konfirmasi')->with(['title' => 'Menunggu Konfirmasi','trans' => $trans]);
    }
     function gagal(){
    	$trans = Transaction::where(['id_user' => Auth::user()->id])->where('timeout','<',time())->where(['is_verify' => false])->orWhere('is_canceled',true)->paginate(12);

    	return view('status.konfirmasi')->with(['title' => 'Transaksi Gagal','trans' => $trans]);
    }
    function diterima(){
    	$trans = Transaction::where(['id_user' => Auth::user()->id])->where(['is_verify' => true])->where('is_canceled',false)->paginate(12);

    	return view('status.konfirmasi')->with(['title' => 'Produk Diterima','trans' => $trans]);
    }

    function list($id,$uuid){
    	$data = Transaction::where(['link' => $uuid,'id' => $id,'id_user' => Auth::user()->id])->first();

    	if(empty($data)){
    		 return redirect()->back()->with(['message_fail' => 'Transaksi tidak ditemukan.']);
    	}

    	return view('status.list')->with(['title' => 'Daftar Produk Diterima','trans' => $data]);
    }
}
