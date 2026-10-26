<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CareerController as AdminCareerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicPageController::class, 'home'])->name('home');
Route::view('/about-us', 'about')->name('about');
Route::get('/services', [PublicPageController::class, 'services'])->name('services');
Route::get('/gallery', [PublicPageController::class, 'gallery'])->name('gallery');
Route::get('/careers', [PublicPageController::class, 'careers'])->name('careers');
Route::view('/contact-us', 'contact')->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'create'])->name('login');
        Route::post('/login', [AuthController::class, 'store'])->name('login.store');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
        Route::resource('services', AdminServiceController::class)->except('show');
        Route::resource('gallery', AdminGalleryController::class)->except('show');
        Route::resource('careers', AdminCareerController::class)->except('show');
    });
});
