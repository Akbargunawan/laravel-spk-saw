<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\PerhitunganController;





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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//kriteria
Route::get('/kriterias', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('kriterias/create', [KriteriaController::class, 'create'])->name('kriteria.create');
Route::post('kriterias/create', [KriteriaController::class, 'store'])->name('kriteria.store');
Route::get('kriterias/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('kriterias/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
Route::get('kriterias/{id}/delete',[KriteriaController::class, 'destroy'])->name('kriteria.destroy');


Route::get('/alternatives', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('alternatives/create', [AlternatifController::class, 'create'])->name('alternatif.create');
Route::post('alternatives/create', [AlternatifController::class, 'store'])->name('alternatif.store');
Route::get('alternatives/{id}/edit', [AlternatifController::class, 'edit'])->name('alternatif.edit');
Route::put('alternatives/{id}', [AlternatifController::class, 'update'])->name('alternatif.update');
Route::get('alternatives/{id}/delete',[AlternatifController::class, 'destroy'])->name('alternatif.destroy');

Route::get('/perhitungan', [PerhitunganController::class, 'index'])->name('perhitungan');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/socialite/{driver}',[SocialLoginController::class,'toProvider'])->where('driver','github|google');
Route::get('/auth/{driver}/login',[SocialLoginController::class,'handleCallback'])->where('driver','github|google');

require __DIR__.'/auth.php';
