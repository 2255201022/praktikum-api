<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

//Fakultas
Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
Route::resource('fakultas', FakultasController::class);
Route::get('/fakultas/edit/{id}', [FakultasController::class, 'edit'])->name('fakultas.edit');
Route::get('fakultas/{id}/delete', [FakultasController::class, 'delete'])->name('fakultas.delete');

//Prodi
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');




Route::get('/profile', function () {
    return view('profile');
});
Route::get('/data', function () {
    return view('data');
});