<?php

use App\Http\Controllers\API\DreamerController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\GroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dreamers',[DreamerController::class,'index']);
Route::post('dreamers',[DreamerController::class,'store']);
Route::get('admins',[AdminController::class,'index']);
Route::post('admins',[AdminController::class,'store']);
Route::get('groups',[GroupController::class,'index']);
Route::post('groups',[GroupController::class,'store']);
