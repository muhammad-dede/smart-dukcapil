<?php

use App\Http\Controllers\Application\BerandaController;
use App\Http\Controllers\Application\LayananController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Website\PagesController;
use Illuminate\Support\Facades\Route;

Auth::routes(['login' => false, 'register' => false]);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [PagesController::class, 'index'])->name('home');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login/validation', [LoginController::class, 'validation'])->name('login.validation');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register/validation', [RegisterController::class, 'validation'])->name('register.validation');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
        Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
        Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
        Route::get('/layanan/{url}', [LayananController::class, 'create'])->name('layanan.create');
        Route::post('/layanan/validation/{url}', [LayananController::class, 'store_validation'])->name('layanan.store-validation');
        Route::post('/layanan/{url}', [LayananController::class, 'store'])->name('layanan.store');
    });
});
