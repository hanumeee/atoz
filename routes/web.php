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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/topup/store','atozController@store');

Route::get('topups/create', 'atozController@tambah')->name('tambah');

Route::post('/product/store','atozController@store1');

Route::get('products/create', 'atozController@tambah1')->name('tambah1');

Route::get('products/transaction', 'atozController@view')->name('view');

Route::get('products/order', 'atozController@order')->name('order');

// Route::post('/products/proses', 'atozController@proses');

Route::get('products/history', 'atozController@histori')->name('history');


// Route::post('/store', 'TopUpController@store')->name('topup.store');

// Route::post('products/create', 'ProductController@create')->name('product');

// Route::post('/store', 'ProductController@store')->name('product.store');

// Route::get('products/index', 'ProductController@index')->name('product.index');




