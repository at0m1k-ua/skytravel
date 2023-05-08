<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SaveOrderController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'show']);
Route::get('/travels', [TravelController::class, 'showAll']);
Route::get('/travel', [TravelController::class, 'show']);
Route::get('/order', [OrderController::class, 'show']);
Route::post('/save_order', [SaveOrderController::class, 'handle']);
