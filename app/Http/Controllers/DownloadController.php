<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateApp;
use App\Models\Transaction;
use App\Models\Templates;
use App\Models\Redeem;
use Auth;

class DownloadController extends Controller
{
    function template($transid,$id){
    	$download = Templates::where('link_download',$id)->first();
    	$cektrans= Redeem::where(['transaction_id'=>$transid,'is_disabled' => false])->where('user_id',Auth::user()->id)->first();
    	$verify_check= Transaction::where(['id'=>$transid])->first();
    	if(!$verify_check->is_verify){
    		return redirect()->back()->with(['message_fail' => "Transaksi Belum diverifikasi"]);
    	}
    	if(empty($cektrans)){
    		return redirect()->back()->with(['message_fail' => "Redeem tidak ditemukan"]);
    	}
    	if(empty($download)){
    		return redirect()->back()->with(['message_fail' => "Template tidak ditemukan"]);
    	}
    	$filename =storage_path('app/private/templates/uploaded/'.$download->real_path);
    	if(!file_exists($filename)){
    		return redirect()->back()->with(['message_fail' => "File Tidak Ditemukan"]);
    	}
    	return response()->download($filename);
    }
}
