<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\UserAuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'App\Http\Controllers\API\v1\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\API\v1\UserAuthController@login');

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function(){
    Route::apiResource('/post', App\Http\Controllers\API\v1\PostController::class);
});