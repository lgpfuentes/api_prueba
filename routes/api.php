<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Api\V1\LibroController as BookV1;
use App\Http\Controllers\Api\V2\LibroController as BookV2;

/*
|--------------------------------------------------------------------------
| API Routes Blogs ejemplo blogs.
|--------------------------------------------------------------------------
*/
Route::resource('blogs', BlogController::class);

/*
|--------------------------------------------------------------------------
| API Routes Auth:api venía por defecto.
|--------------------------------------------------------------------------
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| API Routes V1
|--------------------------------------------------------------------------
*/
Route::apiResource('v1/libros',BookV1::class)
    ->only(['index','show','destroy'])
    ->middleware('auth:sanctum');
/*
|--------------------------------------------------------------------------
| API Routes V2
|--------------------------------------------------------------------------
*/
Route::apiResource('v2/libros', BookV2::class)
->only(['index','show'])
->middleware('auth:sanctum');


/*
|--------------------------------------------------------------------------
| API Routes Login
|--------------------------------------------------------------------------
*/
Route::post('login',[App\Http\Controllers\Api\LoginController::class, 'login']);