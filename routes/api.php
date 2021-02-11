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

// users
Route::prefix('user')->group(function(){

	Route::post('register','PassportController@register');
	Route::post('login','PassportController@login');
});


// products
Route::middleware('auth:api')->group( function () {
    // user details 
	Route::get('user_details','api\PassportController@details');
	
	Route::prefix('v1')->group(function(){

		Route::apiResource('products','api\ProductsController');

	});
});
