<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataWarehouseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// get frontend warehouses_product
Route::get('/data-warehouse', [DataWarehouseController::class, 'index']);
