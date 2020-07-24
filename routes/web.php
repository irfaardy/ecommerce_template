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
Route::group(['middleware' => ['auth']], function () {
	Route::prefix('backoffice')->group(function() { 
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
		
			Route::get('/account/setting/change_password', 'UserSettingsController@change_pwd')->name('user_change_pwd');
			Route::post('/account/setting/update_password', 'UserSettingsController@update_pwd')->name('user_update_pwd');
			Route::get('/account/profile', 'UserSettingsController@profile')->name('user_profile');

			Route::prefix('template')->group(function() { 
				Route::prefix('theme')->group(function() { 
					Route::get('/', 'Admin\CategoryController@index')->name('template.theme');
					Route::get('/create', 'Admin\CategoryController@create')->name('template.theme.create');
					Route::post('/store', 'Admin\CategoryController@store')->name('template.theme.store');
					Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('template.theme.edit');
					Route::post('/update', 'Admin\CategoryController@update')->name('template.theme.update');
					Route::post('/{id}/delete', 'Admin\CategoryController@delete')->name('template.theme.delete');
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
				Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('template.edit');
					Route::post('/update', 'Admin\CategoryController@update')->name('template.update');
					Route::post('/{id}/delete', 'Admin\CategoryController@delete')->name('template.delete');
			});
	});
});
Route::get('/home', 'HomeController@index')->name('home');
