<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [RestaurantController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/restaurant', [RestaurantController::class, 'index']);
Route::post('/restaurant/update/{id}', [RestaurantController::class, 'update']);
