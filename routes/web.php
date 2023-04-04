<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [CustomerController::class, 'index']);
Route::get('/products', [ProductsController::class, 'indexProduct']);

Route::get('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);

Route::get('delete/{id}', [CustomerController::class, 'delete']);
Route::get('edit/{id}', [CustomerController::class, 'edit']);
Route::post('/updateCustomer', [CustomerController::class, 'updateCustomer']);
Route::post('/saveCustomer', [CustomerController::class, 'saveCustomer']);
Route::get('/addCustomer', [CustomerController::class, 'add']);

Route::get('deleteProduct/{id}', [ProductsController::class, 'deleteProduct']);
Route::get('editProduct/{id}', [ProductsController::class, 'editProduct']);
Route::post('/updateProduct', [ProductsController::class, 'updateProduct']);
Route::post('/saveProduct', [ProductsController::class, 'saveProduct']);
Route::get('/addProduct', [ProductsController::class, 'addProduct']);

