<?php

use Illuminate\Support\Facades\Route;

Route::get("login", "AuthController@getLogin");
Route::get("register", "AuthController@getRegister")->name('register');
Route::post("register", "AuthController@register")->name('register.post');
Route::post("login", "AuthController@postLogin")->name("login");

Route::group(['middleware' => ['auth'=>'CustomMiddleware:admin']], function () {

Route::get("logout", "AuthController@logout")->name("logout");
Route::get('/package/export_excel', 'PackageController@export_excel');
// Route::get('/admin/export_excel', 'AdminController@export_excel');
Route::resource('admin','AdminController');
Route::resource('package','PackageController');

Route::get('/order/export_excel', 'OrderController@export_excel');
Route::post('/order/update-sts/{id}','OrderController@update_sts')->name('order.update-sts');
Route::resource('order','OrderController');


Route::get('/user/export_excel', 'UserController@export_excel');
Route::resource('user','UserController');
Route::resource('kritik','PesanController');

});
?>
