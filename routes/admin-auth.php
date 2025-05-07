<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\CreateGuruController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
     ->middleware(['verified'])
     ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/data-guru', [CreateGuruController::class, 'view'])->name('view_guru');
    Route::get('/tambah-guru', [CreateGuruController::class, 'add'])->name('create');
    Route::post('/guru/tambah', [CreateGuruController::class, 'store'])->name('guru.store');
    Route::post('/guru/store', [CreateGuruController::class, 'store'])->name('admin.guru.store');

    // Tambahkan route untuk edit/delete
    // Route::get('/guru/{id}/edit', [CreateGuruController::class, 'edit'])->name('guru.edit');
    // Route::put('/guru/{id}', [CreateGuruController::class, 'update'])->name('guru.update');
    Route::delete('/guru/{id}', [CreateGuruController::class, 'destroy'])->name('guru.destroy');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
