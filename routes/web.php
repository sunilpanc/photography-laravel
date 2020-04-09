<?php
//model is used to access the table
//migration is used to create a table


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

Route::get('/photography','Photography@index');
Route::post('/Booking','Photography@store');
Route::post('/Success','Photography@order');
Route::get('/Remove','Photography@Remove');

Route::get('/admin','adminController@index');
Route::post('/checkValue','adminController@check');


Route::get('/upload','uploadController@index');
Route::post('/uploadImage','uploadController@uploading');

Route::get('/prewedding','imageController@prewedding');
Route::get('/wedding','imageController@wedding');
Route::get('/kids','imageController@kids');
Route::get('/modeling','imageController@modeling');

Route::get('/index',function(){
	return view('index');
});

Route::get('/logout','adminController@logout');


Route::get('/createuser','showall@createuser');
Route::post('/insertuser','showall@insertuser');

Route::get('/contactus','showall@contact')->middleware('authenticated');
Route::post('/insertcontact','showall@insertcontact');

Route::get('/login','showall@login');
Route::post('/insertlogin','showall@insertlogin');

Route::get('/about','showall@about');

