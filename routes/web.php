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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/cart', 'CartController@show')->name('cart');
Route::post('/cart/add/{id}', 'CartController@add')->name('cart-add');
Route::post('/cart/remove/{id}', 'CartController@remove')->name('cart-remove');
Route::post('/cart/clear/{id}', 'CartController@clear')->name('cart-clear');

Route::get('/shipping', 'ShippingController@form')->name('shipping');
Route::post('/shipping', 'ShippingController@send')->name('shipping-send');
