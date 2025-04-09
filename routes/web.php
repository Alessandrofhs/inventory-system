<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AuthController::class, 'register_proses'])->name('register-proses');
//Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Auth::routes();

// Route Admin
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::get('/admin/training5r', [App\Http\Controllers\Training5RController::class, 'index'])->name('admin.traning5r');
Route::get('/admin/trainingojt', [App\Http\Controllers\TrainingOJTController::class, 'index'])->name('admin.trainingojt');
