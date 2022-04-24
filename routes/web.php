<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as CategoryController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// *************************** ADMIN PANEL  ROUTES *********************
Route::get('/admin', [AdminHomeController::class,'index'])->name('admin');

Route::get('/admin/category', [CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create', [CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store', [CategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [CategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [CategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/destroy/{id}', [CategoryController::class,'destroy'])->name('admin_category_destroy');
Route::get('/admin/category/show/{id}', [CategoryController::class,'show'])->name('admin_category_show');
