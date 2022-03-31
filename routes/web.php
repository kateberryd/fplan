<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\BussinessPlanController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\CategoryController;




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


Route::prefix('/build-bp')->group(function () {
    
    Route::get('/signin', [AuthenticationController::class, 'index'])->name('auth.login');
    
    Route::post('/signin', [AuthenticationController::class, 'store'])->name('auth.login.post');
    
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('auth.logout');
    
});



Route::prefix('/admin')-> group (function(){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/business-plans', [BussinessPlanController::class, 'index'])->name('businessplan.all');
    Route::get('/business-plan/create', [BussinessPlanController::class, 'create'])->name('businessplan.create');
    Route::get('/orders', [OrderController::class, 'index'])->name('order.all');
    
    Route::prefix('/categories')->group(function () {
      Route::get('/', [CategoryController::class, 'index'])->name('categories.all');
  
      Route::get('/create', [CategoryController::class, 'create'])->name('categories.create.get');
      Route::post('/create', [CategoryController::class, 'store'])->name('categories.create.post');
      Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
      Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

    });
    
    
    Route::prefix('/users')->group(function(){
      Route::get('/', [UserController::class, 'index'])->name('users.index');
      Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

    });
  });
