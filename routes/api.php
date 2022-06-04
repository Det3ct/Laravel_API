<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthApi;
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
Route::post('register' , [AuthApi::class , 'register']);
Route::post('login' , [AuthApi::class , 'login']);
Route::get('users' , [UserController::class , 'index']);


Route::middleware('auth:sanctum')->group(function(){
        Route::post('logout', [AuthApi::class , 'logout']);
        Route::get('user', function (Request $request){
            return $request->user();
        });
        Route::put('update', [AuthApi::class , 'update']);
});

Route::controller(\App\Http\Controllers\Api\SpecialityController::class) ->group(function () {
            Route::get('/specialities', 'index');
            Route::post('/speciality', 'store');
            Route::get('/speciality/{id}', 'show');
            Route::put('/speciality/{id}', 'update');
            Route::delete('/speciality/{id}', 'destroy');
});

Route::controller(\App\Http\Controllers\Api\TestController::class) ->group(function () {
    Route::get('/tests', 'index');
    Route::post('/test', 'store');
    Route::get('/test/{id}', 'show');
    Route::put('/test/{id}', 'update');
    Route::delete('/test/{id}', 'destroy');
});
