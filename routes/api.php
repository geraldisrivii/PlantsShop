<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::patch('basket/inc/{basket}', 'Api\BasketController@amountIncrement')->name('basket.amountIncrement');
Route::patch('basket/dec/{basket}', 'Api\BasketController@amountDecrement')->name('basket.amountDecrement');
Route::delete('basket/{basket}', 'Api\BasketController@destroy')->name('basket.destroy');