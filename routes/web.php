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

Route::get('/', 'HomeController@MainPage');

Route::get('/orders', 'HomeController@OrdersList')->name('orders-list');
Route::get('/orders/{id}', 'OrderProductController@OneOrder')->name('one-order');
Route::get('/orders/{id}/update', 'OrderProductController@UpdateOrder')->name('update-order');
Route::post('/orders/{id}/update', 'OrderProductController@UpdateOrderSubmit')->name('update-order-submit');

Route::get('/weather', 'YandexWeatherController@parseWeather')->name('get-weather');