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

Route::get('/', 'GoodController@main')->name('main');
// some comments
// basket controller
Route::get('basket', 'BasketController@index')->name('basket.index');
Route::post('basket', 'BasketController@store')->name('basket.store');
Route::get('orders/callback', 'OrderController@callback')->name('orders.callback');

Route::resource('orders', 'OrderController');

Route::get('goods', 'GoodController@index')->name('goods.index');
Route::get('sales', 'SalesController@index')->name('sales.index');
Route::get('goods/{good}', 'GoodController@show')->name('goods.show');


Route::group([
    'middleware' => 'admin',
], function () {
    Route::get('goods/create', 'GoodController@create')->name('goods.create');
    Route::get('goods/edit/{good}', 'GoodController@edit')->name('goods.edit');
    Route::delete('goods/{good}', 'GoodController@destroy')->name('goods.destroy');
    Route::post('goods', 'GoodController@store')->name('goods.store');
    Route::patch('goods/{good}', 'GoodController@update')->name('goods.update');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'users',
], function () {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/card', 'UserController@card')->name('users.index.card');
    Route::get('/settings', 'UserController@settings')->name('users.index.settings');
    Route::get('/orders', 'UserController@orders')->name('users.index.orders');
    Route::delete('/{user}', 'UserController@destroy')->name('users.destroy');
    Route::delete('/{user}', 'UserController@logout')->name('users.logout');
});

Route::group([
    'middleware' => 'guest',
    'prefix' => 'users',
], function () {
    Route::get('/register', 'UserController@create')->name('users.create');
    Route::get('/login', 'UserController@loginView')->name('users.loginView');
    Route::post('/login', 'UserController@login')->name('users.login');
});

Route::post('users', 'UserController@store')->name('users.store');
Route::post('bids', 'BidController@store')->name('bids.store');