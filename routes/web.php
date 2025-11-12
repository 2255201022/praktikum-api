<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;

// ===============================
// HALAMAN AWAL (redirect ke login)
// ===============================
Route::get('/', function () {
    return redirect()->route('login');
});

// ===============================
// GUEST (belum login)
// ===============================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// ===============================
// AUTHENTIKASI (sudah login)
// ===============================
Route::middleware('auth')->group(function () {
    // Halaman utama setelah login
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    // Fakultas
    Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
    Route::get('/fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');
    Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
    Route::get('/fakultas/edit/{id}', [FakultasController::class, 'edit'])->name('fakultas.edit');
    Route::get('/fakultas/{id}/delete', [FakultasController::class, 'delete'])->name('fakultas.delete');

    // Prodi
    Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
    Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
    Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');

    // Profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
