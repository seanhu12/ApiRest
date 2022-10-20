<?php

use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\Mesa\MesaController;
use App\Http\Controllers\Boleta\BoletaController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::resource('projects',ProjectController::class);
Route::resource('products',productController::class);
Route::resource('mesas',MesaController::class);
Route::resource('boletas',BoletaController::class);

