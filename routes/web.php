<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product/add', [\App\Http\Controllers\ProductController::class,'index'])->name('product.add');
Route::post('/product/manage', [\App\Http\Controllers\ProductController::class,'store'])->name('product.store');
Route::get('/product/store', [\App\Http\Controllers\ProductController::class,'manage'])->name('product.manage');
