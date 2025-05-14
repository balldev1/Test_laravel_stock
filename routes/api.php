<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataWarehouseController;
use App\Http\Controllers\ProductAllocationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// get frontend warehouses_product
Route::get('/data-warehouse', [DataWarehouseController::class, 'index']);
Route::get('/allocate/{method}', [ProductAllocationController::class, 'allocateProducts']);
