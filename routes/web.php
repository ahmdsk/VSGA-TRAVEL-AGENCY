<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManagementBookingController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page.index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister']);
});

Route::post('/booking', [BookingController::class, 'user_booking'])->name('user.booking');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/booking/history', [BookingController::class, 'history'])->name('booking.history');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
        Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
        Route::post('/locations/update/{locationId}', [LocationController::class, 'update'])->name('locations.update');
        Route::post('/locations/delete/{locationId}', [LocationController::class, 'destroy'])->name('locations.destroy');

        Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
        Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');
        Route::post('/destinations/update/{destination}', [DestinationController::class, 'update'])->name('destinations.update');
        Route::post('/destinations/delete/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');

        Route::get('/visitor', [VisitorController::class, 'index'])->name('visitor.index');
        Route::post('/visitor', [VisitorController::class, 'store'])->name('visitor.store');
        Route::post('/visitor/update/{visitor}', [VisitorController::class, 'update'])->name('visitor.update');
        Route::post('/visitor/delete/{visitor}', [VisitorController::class, 'destroy'])->name('visitor.destroy');

        Route::get('/user-admin', [UserAdminController::class, 'index'])->name('user-admin.index');
        Route::post('/user-admin', [UserAdminController::class, 'store'])->name('user-admin.store');
        Route::post('/user-admin/update/{user}', [UserAdminController::class, 'update'])->name('user-admin.update');
        Route::post('/user-admin/delete/{user}', [UserAdminController::class, 'destroy'])->name('user-admin.destroy');

        Route::get('/booking', [ManagementBookingController::class, 'index'])->name('booking.index');
        Route::post('/booking/confirm', [ManagementBookingController::class, 'confirm'])->name('booking.confirm');
    });
});
