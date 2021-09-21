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

Route::prefix('v1')->group(function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Auth', 'middleware' => 'guest'], function () {
        Route::post('register', 'RegisteredUserController@store');
        Route::post('login', 'AuthenticatedSessionController@store'); //I am allowing both admin & basic user
    });

    Route::group(['middleware'=>'auth:sanctum','namespace' => 'App\Http\Controllers'], function () {
        Route::get('users/me', 'UserController@show');
    });
});
