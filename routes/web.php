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

Route::middleware(['auth'])->group(function(){
Route::get('/product/create' , [ProductController::class , 'create'])->name('product.create');
Route::post('/product/store' , [ProductController::class , 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/{product}/update', [ProductController::class,'update'])->name('product.update');
Route::delete('/product/destroy/{product}', [ProductController::class,'destroy'])->name('product.destroy');

});

Route::get('/user/products/{user}' , [ProductController::class , 'getProductsById'])->name('user.products');
Route::get('/product/show/{product}' , [ProductController::class , 'show'])->name('product.show');

Route::get('/products/category/{category}', [ProductController::class, 'productsByCategory'])->name('product.category');

Route::get('/lavora_con_noi',[PublicController::class , 'contacts'])->name('contacts');
Route::post('/lavora_con_noi/submit', [PublicController::class, 'submit'])->name('submit');