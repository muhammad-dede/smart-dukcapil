<?php

use App\Http\Controllers\Application\Ajax\LayananController as AjaxLayananController;
use App\Http\Controllers\Application\Ajax\ProfilController as AjaxProfilController;
use App\Http\Controllers\Application\BerandaController;
use App\Http\Controllers\Application\LayananController;
use App\Http\Controllers\Application\ProfilController;
use App\Http\Controllers\Website\PagesController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [PagesController::class, 'index'])->name('home')->middleware('guest');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
        Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
        // Layanan
        Route::group(['prefix' => 'layanan', 'as' => 'layanan.'], function () {
            Route::get('/', [LayananController::class, 'index'])->name('index');
            Route::get('/show/{url}', [LayananController::class, 'show'])->name('show');
            Route::get('/create/{url}', [LayananController::class, 'create'])->name('create');
            Route::post('/store-validation/{url}', [AjaxLayananController::class, 'storeValidation'])->name('store.validation');
            Route::post('/store/{url}', [LayananController::class, 'store'])->name('store');
        });
        // Profil
        Route::group(['prefix' => 'profil', 'as' => 'profil.'], function () {
            Route::get('/', [ProfilController::class, 'index'])->name('index');
            // Biodata
            Route::post('/update/validation', [AjaxProfilController::class, 'updateProfilValidation'])->name('profil.update.validation');
            Route::post('/update', [ProfilController::class, 'updateProfil'])->name('profil.update');
            // Username
            Route::post('/update-username/validation', [AjaxProfilController::class, 'updateUsernameValidation'])->name('profil.update-username.validation');
            Route::post('/update-username', [ProfilController::class, 'updateUsername'])->name('profil.update-username');
            // Email
            Route::post('/update-email/validation', [AjaxProfilController::class, 'updateEmailValidation'])->name('profil.update-email.validation');
            Route::post('/update-email', [ProfilController::class, 'updateEmail'])->name('profil.update-email');
            // Password
            Route::post('/update-password/validation', [AjaxProfilController::class, 'updatePasswordValidation'])->name('profil.update-password.validation');
            Route::post('/update-password', [ProfilController::class, 'updatePassword'])->name('profil.update-password');
        });
    });
});
