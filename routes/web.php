<?php

use App\Http\Controllers\Application\BerandaController;
use App\Http\Controllers\Application\LayananController;
use App\Http\Controllers\Application\ProfilController;
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
        // Layanan
        Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
        Route::get('/layanan/{url}', [LayananController::class, 'create'])->name('layanan.create');
        Route::post('/layanan/validation/{url}', [LayananController::class, 'store_validation'])->name('layanan.store-validation');
        Route::post('/layanan/{url}', [LayananController::class, 'store'])->name('layanan.store');
        // Profil Setting
        Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::post('/profil/update/validation', [ProfilController::class, 'updateProfilValidation'])->name('profil.update.validation');
        Route::post('/profil/update', [ProfilController::class, 'updateProfil'])->name('profil.update');
        // Username Setting
        Route::post('/profil/update-username/validation', [ProfilController::class, 'updateUsernameValidation'])->name('profil.update-username.validation');
        Route::post('/profil/update-username', [ProfilController::class, 'updateUsername'])->name('profil.update-username');
        // Email Setting
        Route::post('/profil/update-email/validation', [ProfilController::class, 'updateEmailValidation'])->name('profil.update-email.validation');
        Route::post('/profil/update-email', [ProfilController::class, 'updateEmail'])->name('profil.update-email');
        // Password Setting
        Route::post('/profil/update-password/validation', [ProfilController::class, 'updatePasswordValidation'])->name('profil.update-password.validation');
        Route::post('/profil/update-password', [ProfilController::class, 'updatePassword'])->name('profil.update-password');
    });
});
