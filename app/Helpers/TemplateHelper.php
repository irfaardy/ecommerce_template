<?php 
namespace App\Helpers;
use App\Models\CategoryTheme;
use App\Models\Platform;
use App\Models\Cart;
use Auth;

class TemplateHelper {
	public static function kategori($id = null){
		if($id != null){
			$cat = CategoryTheme::where('id',$id)->first();

			return $cat;
		}
		$cat = CategoryTheme::all();

		return $cat;
	}
	public static function platform(){
		$plt = Platform::all();

		return $plt;
	}
	public static function cart(){
		$count = Cart::where(["user_id" => Auth::user()->id])->count();

		return $count;
	}
}
