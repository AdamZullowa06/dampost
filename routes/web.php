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

Route::group(['prefix' => 'admin', 'middleware' => 'role.admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('currency', 'CurrencyController');
    Route::resource('ppn', 'ppnController');
    Route::resource('percent', 'PercentController');
    Route::resource('bahan', 'BahanController');
    Route::resource('unit', 'UnitController');
    Route::resource('info', 'InfoController');
    Route::resource('transaksi', 'CartController');
    Route::resource('checkout', 'CheckoutController');
    Route::resource('invoice', 'InvoiceController');
    Route::resource('user', 'UserController');
});

Route::group(['prefix' => 'kasir', 'middleware' => 'role.kasir'], function() {
    Route::get('/', 'KasirController@index')->name('kasir.index');
    Route::resource('cart', 'CartController');
});
