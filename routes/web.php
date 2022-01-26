<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorgController;

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

Route::get('/', function () {
    return view('layout.admin');
});


// Route Categorg
Route::get('create/catgorae', [CategorgController::class, 'create']);
Route::get('show/catgorae', [CategorgController::class, 'index'])->name('index');
Route::post('store/catgorae', [CategorgController::class, 'store']);
Route::get('edit/catgorae/{id}', [CategorgController::class, 'edit']);
Route::post('update/catgorae/{id}', [CategorgController::class, 'update']);
Route::get('deleted/catgorae/{id}', [CategorgController::class, 'destroy']);

// Route Product
Route::get('create/Product', [ProductController::class, 'create']);
Route::get('show/Product', [ProductController::class, 'index'])->name('index');
Route::post('store/Product', [ProductController::class, 'store']);
Route::get('edit/Product/{id}', [ProductController::class, 'edit']);
Route::post('update/Product/{id}', [ProductController::class, 'update']);
Route::get('deleted/Product/{id}', [ProductController::class, 'destroy']);


// Route order
Route::get('create/order', [OrderController::class, 'create']);
Route::get('show/order', [OrderController::class, 'index'])->name('index');
Route::post('store/order', [OrderController::class, 'store']);
Route::get('deleted/order/{id}', [OrderController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
