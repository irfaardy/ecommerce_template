<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "LandingController@index")->name('LandingPage');

Auth::routes();
Route::prefix('product')->group(function() { 
		Route::get('/cat/{cat}', 'CategoryController@index')->name('product.cat');
		Route::get('/details/{id}', 'ProductController@show')->name('product.details');
		
	});
Route::get('/product/image/{url}','ImageController@ShowIMG')->name('image');
Route::group(['middleware' => ['auth']], function () {
	Route::prefix('shoppingcart')->group(function(){
		Route::get('/push/{id}.tpl','CartController@cart_push')->name('shoppingcart.add');
		Route::get('/drop/{id}.tpl','CartController@cart_delete')->name('shoppingcart.delete');
		Route::get('/','CartController@index')->name('shoppingcart');
	});
	Route::prefix('konfirmasi')->group(function(){
		Route::post('/store','TransactionController@upload_bukti')->name('konfirmasi.save');
		Route::post('/cancel','TransactionController@cancel')->name('konfirmasi.batal');
	});
	Route::prefix('status')->group(function(){
		// Route::get('dibeli', 'ProductController@show')->name('produk.dibeli');
		Route::get('konfirmasi', 'TransactionController@konfirmasi')->name('status.konfirmasi');
		Route::get('diterima', 'TransactionController@diterima')->name('status.diterima');
		Route::get('gagal', 'TransactionController@gagal')->name('status.gagal');
	});
	Route::prefix('invoice')->group(function(){
		// Route::get('dibeli', 'ProductController@show')->name('produk.dibeli');
		Route::get('show/{id}.inv', 'TransactionController@invoice')->name('invoice.dibeli');
	});

	Route::prefix('template')->group(function(){
		Route::prefix('received')->group(function(){
			// Route::get('dibeli', 'ProductController@show')->name('produk.dibeli');
			Route::get('list/{id}/{uuid}.fltmp', 'TransactionController@list')->name('template.received');
		});
		Route::prefix('download')->group(function(){
			// Route::get('dibeli', 'ProductController@show')->name('produk.dibeli');
			Route::get('fileid/{transid}/{id}.fltmp', 'DownloadController@template')->name('download.template');
		});
	});

	
	Route::prefix('checkout')->group(function(){
		Route::get('/','CheckoutController@index')->name('checkout.review');
		Route::get('/success/transaction/{id}','CheckoutController@success')->name('checkout.success');
		Route::post('/progress/transaction','CheckoutController@progress')->name('checkout.progress');
		Route::get('/testuuid/',"CheckoutController@test");
	});
	Route::prefix('backoffice')->group(function() { 
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
		
			Route::get('/account/setting/change_password', 'UserSettingsController@change_pwd')->name('user_change_pwd');
			Route::post('/account/setting/update_password', 'UserSettingsController@update_pwd')->name('user_update_pwd');
			Route::get('/account/profile', 'UserSettingsController@profile')->name('user_profile');

			Route::prefix('template')->group(function() { 
				Route::prefix('theme')->group(function() { 
					Route::get('/image/delete', 'ImageController@delete')->name('template.image.delete');
				});
				Route::prefix('theme')->group(function() { 
					Route::get('/', 'Admin\CategoryController@index')->name('template.theme');
					Route::get('/create', 'Admin\CategoryController@create')->name('template.theme.create');
					Route::post('/store', 'Admin\CategoryController@store')->name('template.theme.store');
					Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('template.theme.edit');
					Route::post('/update', 'Admin\CategoryController@update')->name('template.theme.update');
					Route::post('/{id}/delete', 'Admin\CategoryController@delete')->name('template.theme.delete');
				});
				Route::prefix('transaction')->group(function() {
					Route::get('/konfirmasi','Admin\TransaksiController@konfirmasi')->name('admin.konfirmasi.pembayaran');
					Route::get('/konfirmasi/{id}','Admin\TransaksiController@show')->name('admin.konfirmasi.show');
					Route::get('/diterima','Admin\TransaksiController@konfirmasi')->name('admin.produk.diterima');
					Route::post('buktitransfer/verify','Admin\TransaksiController@verify')->name('admin.konfirmasi.aksi');
					Route::get('/buktitransfer/image/{url}','ImageController@bukti')->name('admin.gambar.buktitf');
				}); 
				Route::prefix('platform')->group(function() { 
					Route::get('/', 'Admin\PlatformController@index')->name('template.platform');
					Route::get('/create', 'Admin\PlatformController@create')->name('template.platform.create');
					Route::post('/store', 'Admin\PlatformController@store')->name('template.platform.store');
					Route::get('/{id}/edit', 'Admin\PlatformController@edit')->name('template.platform.edit');
					Route::post('/update', 'Admin\PlatformController@update')->name('template.platform.update');
					Route::post('/{id}/delete', 'Admin\PlatformController@delete')->name('template.platform.delete');
				});
				Route::get('/', 'Admin\TemplateController@index')->name('template');
				Route::get('/create', 'Admin\TemplateController@create')->name('template.create');
				Route::post('/store', 'Admin\TemplateController@store')->name('template.store');
				Route::get('/{id}/edit', 'Admin\TemplateController@edit')->name('template.edit');
					Route::post('/update', 'Admin\TemplateController@update')->name('template.update');
					Route::post('/{id}/delete', 'Admin\CategoryController@delete')->name('template.delete');
			});
	});
});
Route::get('/home', 'HomeController@index')->name('home');
