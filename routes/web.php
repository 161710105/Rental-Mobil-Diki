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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/beresbooking', function () {
    return view('frontend.beresbooking');
});
Route::get('/home', function () {
    return view('frontend.index');
});
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
Route::resource('merk','MerkController');
Route::resource('mobil','MobilController');
Route::resource('supir','SupirController');
Route::resource('pengembalian','PengembalianController');
Route::resource('booking','BookingController');
Route::resource('dashboard','FrontendController');

});
Route::group(['prefix'=>'member'],function(){
Route::resource('dashboard','FrontendController');
Route::get('/listmobil','FrontendController@listmobil')->name('listmobil');
Route::get('/hasilbooking','FrontendController@hasilbooking')->name('hasilbooking');
Route::get('/beresbooking','FrontendController@beresbooking')->name('beresbooking');
Route::get('/edithasilbooking','FrontendController@edithasilbooking')->name('edithasilbooking');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



