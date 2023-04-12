<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[PublicController::class , 'index'])->name('homepage');

Route::get('/product/create' , [ProductController::class , 'create'])->name('product.create');
Route::post('/product/store' , [ProductController::class , 'store'])->name('product.store');

Route::get('/user/products/{user}' , [ProductController::class , 'getProductsById'])->name('user.products');
Route::get('/product/show/{product}' , [ProductController::class , 'show'])->name('product.show');
