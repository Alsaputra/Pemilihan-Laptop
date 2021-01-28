<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('dashboard');
    //master- nama file
});

require('admin.php');

// Route::resource('dashboard','DashboardController');
Route::resource('pricing','PriceController',['only'=>['index','show']]);
Route::resource('about','AboutController');
Route::resource('contact','ContactController');
Route::resource('portofolio','PortofolioController');
Route::resource('form','PriceController');
// Route::resource('kesimpulan','PriceController');
Route::get('kesimpulan', 'PriceController@kes');
Route::resource('pricing','PriceController');


// Route::group(['middleware' => ['auth'=>'CustomMiddleware:customer']], function () {
//     Route::get("logout/frontend", "AuthController@logoutFrontend")->name("logout.frontend");
//     Route::get('getprice/{id}', 'PriceController@getprice');
//     Route::resource('pricing','PriceController',['only'=>['create','store']]);
// });

Route::resource('checkout', 'CheckoutController');



// Route::resource('order/form','OrderController',['only'=>['show']]);

