<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');

//Category
Route::prefix('category')->group(function () {
    Route::get('/listCategory', [App\Http\Controllers\BackendController::class, 'listCategory'])->name('listCategory');
    Route::get('/createCategory', [App\Http\Controllers\BackendController::class, 'createCategory'])->name('createCategory');
    Route::post('/addCategory', [App\Http\Controllers\BackendController::class, 'addCategory'])->name('addCategory');
    Route::get('/editCategory/{id}', [App\Http\Controllers\BackendController::class, 'editCategory'])->name('editCategory');
    Route::post('/updateCategory', [App\Http\Controllers\BackendController::class, 'updateCategory'])->name('updateCategory');
    Route::get('/deleteCategory/{id}', [App\Http\Controllers\BackendController::class, 'deleteCategory'])->name('deleteCategory');
});

//Product
Route::prefix('product')->group(function () {
    Route::get('/listProduct', [App\Http\Controllers\BackendController::class, 'listProduct'])->name('listProduct');
    Route::get('/createProduct', [App\Http\Controllers\BackendController::class, 'createProduct'])->name('createProduct');
    Route::post('/addProduct', [App\Http\Controllers\BackendController::class, 'addProduct'])->name('addProduct');
    Route::get('/editProduct/{id}', [App\Http\Controllers\BackendController::class, 'editProduct'])->name('editProduct');
    Route::post('/updateProduct/{id}', [App\Http\Controllers\BackendController::class, 'updateProduct'])->name('updateProduct');
    Route::get('/deleteProduct/{id}', [App\Http\Controllers\BackendController::class, 'deleteProduct'])->name('deleteProduct');
});
