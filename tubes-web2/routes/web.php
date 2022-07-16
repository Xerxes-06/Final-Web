<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Member\RegisterController;
use App\Http\Controllers\Member\LoginController as MemberLoginController;
use App\Http\Controllers\Member\HomeController;
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

// Member
Route::get('/register', [RegisterController::class, 'index'])->name('member.register');
Route::post('/register', [RegisterController::class, 'store'])->name('member.register.store');
Route::get('/login', [MemberLoginController::class, 'index'])->name('member.login');
Route::post('/login', [MemberLoginController::class, 'auth'])->name('member.login.auth');
Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('member.home');
    Route::get('/show/{id}', [HomeController::class, 'show'])->name('member.biodata.show');
    Route::get('/logout', [MemberLoginController::class, 'logout'])->name('member.login.logout');
});

// Admin
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/about', [DashboardController::class, 'about'])->name('admin.about');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.login.logout');
    Route::group(['prefix' => 'biodata'], function () {
        Route::get('/create', [DashboardController::class, 'create'])->name('admin.biodata.create');
        Route::post('/store', [DashboardController::class, 'store'])->name('admin.biodata.store');
        Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('admin.biodata.edit');
        Route::put('/update/{id}', [DashboardController::class, 'update'])->name('admin.biodata.update');
        Route::delete('/destroy/{id}', [DashboardController::class, 'destroy'])->name('admin.biodata.destroy');
        Route::get('/show/{id}', [DashboardController::class, 'show'])->name('admin.biodata.show');
    });
});
