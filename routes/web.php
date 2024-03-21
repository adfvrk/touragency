<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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




     Route::group(['middleware' => 'auth'], function () {
     Route::get('/', [HomeController::class, 'home']);
	 Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');

	//  Route::get('order', function () {return view('order/order');})->name('order');
     Route::get('/order', [OrderController::class, 'index'])->name('order.index');
     Route::get('order/create', [OrderController::class, 'create'])->name('order.create');
     Route::post('order', [OrderController::class, 'store'])->name('order.store');
     Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
     Route::get('/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
     Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');
     Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');


	 Route::get('profile', function () {	return view('profile');	})->name('profile');

     Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
     Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
     Route::post('category', [CategoryController::class, 'store'])->name('category.store');
     Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
     Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
     Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
     Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

	Route::get('user-management', function () {return view('laravel-examples/user-management');	})->name('user-management');

	 Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
     Route::get('tour/create', [TourController::class, 'create'])->name('tour.create');
     Route::post('tour', [TourController::class, 'store'])->name('tour.store');
     Route::get('/tour/{id}', [TourController::class, 'show'])->name('tour.show');
     Route::get('/tour/{id}/edit', [TourController::class, 'edit'])->name('tour.edit');
     Route::put('/tour/{id}', [TourController::class, 'update'])->name('tour.update');
     Route::delete('/tour/{id}', [TourController::class, 'destroy'])->name('tour.destroy');


    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create',[PostController::class, 'create'])->name('post.create');
    Route::post('/post',[PostController::class,'store'])->name('post.store');
    Route::get('/post/{id}',[PostController::class,'show'])->name('post.show');
    Route::get('/post/{id}/edit',[PostController::class,'edit'])->name('post.edit');
    Route::put('/post/{id}',[PostController::class,'update'])->name('post.update');
    Route::delete('/post/{id}',[PostController::class,'destroy'])->name('post.destroy');

    Route::get('static-sign-in', function () {return view('static-sign-in');})->name('sign-in');
    Route::get('static-sign-up', function () {return view('static-sign-up');})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {return view('dashboard');	})->name('sign-up');});





    Route::group(['middleware' => 'guest'], function () {
        Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
        Route::post('/', [WelcomeController::class, 'store'])->name('welcome.store');  
        Route::get('/categories', [WelcomeController::class, 'category'])->name('welcome.category');
        Route::get('/posts', [WelcomeController::class, 'allpost'])->name('welcome.allpost');
        Route::get('/posts/{id}', [WelcomeController::class, 'post'])->name('welcome.post');

    
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

// Route::get('/login', function () {
//     return view('session/login-session');
// })->name('login');