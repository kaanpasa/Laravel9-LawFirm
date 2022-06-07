<?php

use App\Http\Controllers\AdminPanel\AdminServicesController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
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
// *************************** HOME PAGE ROUTES *********************
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/aboutus', [HomeController::class,'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::get('/service/{id}', [HomeController::class,'service'])->name('service');
Route::get('/categoryservices/{id}/{slug}', [HomeController::class,'categoryservices'])->name('categoryservices');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login');
Route::view('/registeruser','home.register');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// *************************** ADMIN PANEL  ROUTES *********************
Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('', [AdminHomeController::class, 'index'])->name('index');
//**************************** ADMIN General ROUTES ********************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

//**************************** ADMIN CATEGORY ROUTES ********************
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function() {
        Route::get('','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
//**************************** ADMIN SERVICE ROUTES ********************
    Route::prefix('/service')->name('service.')->controller(AdminServicesController::class)->group(function() {
        Route::get('','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

//**************************** ADMIN MESSAGE ROUTES ********************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function() {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

//**************************** ADMIN COMMENT ROUTES ********************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function() {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

//**************************** ADMIN FAQ ROUTES ********************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function() {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
});


