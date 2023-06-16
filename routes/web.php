<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AccountController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
 
Route::get('/prod/{slug}', [Homecontroller::class, 'singleProducts'])->name('singleProducts');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');

Route::get('/articles', [HomeController::class, 'articles'])->name('articles');

Route::get('/products', [HomeController::class, 'products'])->name('products');

Route::get('/home', [DashboardController::class, 'home'])->name('admin');

Route::get('/login', [DashboardController::class, 'login'])->name('login');

Route::get('/register', [DashboardController::class, 'register'])->name('register');

Route::resource('/product', ProductController::class);
    
Route::get('/admin-product', [ProductController::class, 'index'])->name('adminProduct');

Route::get('/admin-order', [OrderController::class, 'index'])->name('adminOrder');

Route::get('/admin-account', [AccountController::class, 'index'])->name('adminAccount');