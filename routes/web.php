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
    return view('/home');
});

Route::get('/keluar', function(){
	\Auth::logout();

	return redirect('/login');
});

Route::get('/kasir','KasirController@index');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/barang','BarangController@index');
	Route::get('/barang/add','BarangController@add');
	Route::post('/barang/add','BarangController@store');
	Route::get('/barang/{id}','BarangController@edit');	
	Route::post('/barang/update','BarangController@update');
	Route::get('/barang/hapus/{id}','BarangController@delete');

	Route::get('/staff','StaffController@index');
	Route::get('/staff/add','StaffController@add');
	Route::post('/staff/add','StaffController@store');
	Route::get('/staff/{id}','StaffController@edit');	
	Route::post('/staff/update','StaffController@update');
	Route::get('/staff/hapus/{id}','StaffController@delete');

	Route::get('/report','ReportController@index');
	Route::get('/report/add','ReportController@add');
	Route::post('/report/add','ReportController@store');
	Route::get('/report/cetak','ReportController@cetak');




});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
