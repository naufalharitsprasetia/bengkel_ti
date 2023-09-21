<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CRUDServisController;
use App\Http\Controllers\CRUDProductController;
use App\Http\Controllers\CRUDCategoryController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ServisController;

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

// Home 
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// GROUPING MiddleWare Auth
// Route::middleware('auth')->group(function () {   
// Shop
Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{category:slug}', [ProductController::class, 'show']);
// Keranjang
Route::get('/keranjang', [KeranjangController::class, 'index']);
// Keranjang
Route::get('/servis', [ServisController::class, 'index']);
// Admin
Route::get('/admin-control', [AdminController::class, 'index'])->middleware('admin');
Route::resource('/crud-category', CRUDCategoryController::class)->parameters(['crud-category' => 'category:slug']);
Route::resource('/crud-product', CRUDProductController::class)->parameters(['crud-product' => 'product:slug']);
Route::resource('/crud-servis', CRUDServisController::class)->parameters(['crud-servis' => 'servis']);
// });