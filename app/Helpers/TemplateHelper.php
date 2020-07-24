<?php 
namespace App\Helpers;
use App\Models\CategoryTheme;
use App\Models\Platform;

class TemplateHelper {
	public static function kategori(){
		$cat = CategoryTheme::all();

		return $cat;
	}
	public static function platform(){
		$plt = Platform::all();

		return $plt;
	}
}
