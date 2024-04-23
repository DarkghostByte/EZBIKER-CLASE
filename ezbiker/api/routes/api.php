<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PedidosController;

Route::get('/users', [UsersController::class,'index']);
Route::post('/users', [UsersController::class,'store']);

Route::post('/users/actions/verify', [UsersController::class,'verifyEmail']);

Route::resource('products', ProductsController::class);
Route::post('/products/add/upload', [ProductsController::class,'upload']);

Route::resource('pedidos', PedidosController::class);


