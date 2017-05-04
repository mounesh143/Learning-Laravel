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

Route::get('/add_vender', 'AdminController@addVender');
Route::post('/add_vender', 'AdminController@postVender')->name('add.vendor');
Route::get('/edit-vendor/{id}', 'AdminController@editVendor');

Route::get('/vender', 'AdminController@showVender');
Route::get('/vendor-list', 'AdminController@getVendorTable')->name('show-vendor-table');
 

Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
     
  });
Route::get('/index','APIController@index');

Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/get-state-list','APIController@getStateList');
Route::get('api/get-city-list','APIController@getCityList');



