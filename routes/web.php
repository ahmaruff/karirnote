<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user',[\App\Http\Controllers\User\Dashboard::class, 'index'])->name('user.home');
    Route::get('/user/dashboard',[\App\Http\Controllers\User\Dashboard::class, 'index'])->name('user.dashboard');
    Route::post('/user/target',[\App\Http\Controllers\User\TargetController::class, 'store'])->name('user.target.store');
});

require __DIR__.'/auth.php';
