<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\BasketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('front.')->group(function(){
    Route::get('/', [App\Http\Controllers\Front\MainController::class, 'index'])->name('home');
    Route::get('/category/{category}', [App\Http\Controllers\Front\MainController::class, 'index'])->name('homeByCategories');
    Route::get('product/{product}', [App\Http\Controllers\Front\shopController::class, 'index'])->name('shop');
    Route::middleware('auth')->group(function (){
        Route::resource('baskets', BasketController::class);
    });
});

Route::name('admin.')->prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
