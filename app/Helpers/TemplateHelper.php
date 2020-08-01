<?php 
namespace App\Helpers;
use App\Models\CategoryTheme;
use App\Models\Platform;
use App\Models\Cart;
use App\Models\Bank;
use Auth;

class TemplateHelper {
	public static function kategori($id = null){
		if($id != null){
			$cat = CategoryTheme::where('id',$id)->first();

			return $cat;
		}
		$cat = CategoryTheme::where('hidden_from_category',false)->get();

		return $cat;
	}
	public static function bytesUnit($bytes, $precision = 2) { 
    	$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	    $bytes = max($bytes, 0); 
	    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	    $pow = min($pow, count($units) - 1); 

	    // Uncomment one of the following alternatives
	    $bytes /= pow(1024, $pow);
	    // $bytes /= (1 << (10 * $pow)); 

	    return round($bytes, $precision) . ' ' . $units[$pow]; 
	} 
	public static function platform(){
		$plt = Platform::all();

		return $plt;
	}
	public static function bank(){
		$bnk = Bank::orderBy('nama_bank','ASC')->get();

		return $bnk;
	}
	public static function cart(){
		$count = Cart::where(["user_id" => Auth::user()->id])->count();

		return $count;
	}
}
