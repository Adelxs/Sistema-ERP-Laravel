<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('users', UsersController::class);
Route::resource('purchase', PurchaseController::class);
Route::resource('sales', SaleController::class);
Route::resource('inventory', InventoryController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('customers', CustomerController::class);