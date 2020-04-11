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
    // Route::prefix('todo')->group(function () {
    //     Route::get('/', 'TodoController@index');
    //     Route::get('/{todo}', 'TodoController@show');
    //     Route::patch('/{todo}', 'TodoController@update');
    //     Route::post('/', 'TodoController@store');
    //     Route::delete('/{todo}', 'TodoController@destroy');
    // });

    Route::apiResource('/todo', 'TodoController');
});