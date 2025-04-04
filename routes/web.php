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
    return view('index');
});

Route::get('/h', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

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


Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/',[\App\Http\Controllers\User\Dashboard::class, 'index'])->name('home');
    Route::get('dashboard',[\App\Http\Controllers\User\Dashboard::class, 'index'])->name('dashboard');
    Route::post('target',[\App\Http\Controllers\User\TargetController::class, 'store'])->name('target.store');
    Route::put('target/{target}',[\App\Http\Controllers\User\TargetController::class, 'update'])->name('target.update');
    Route::delete('target/{target}',[\App\Http\Controllers\User\TargetController::class, 'destroy'])->name('target.destroy');
    Route::resource('project','\App\Http\Controllers\User\ProjectController')->except(['index']);
    Route::resource('skill','\App\Http\Controllers\User\SkillController')->except(['index', 'show']);
    Route::post('brag',[\App\Http\Controllers\User\BragController::class, 'store'])->name('brag.store');
    Route::put('brag/{brag}',[\App\Http\Controllers\User\BragController::class, 'update'])->name('brag.update');
    Route::delete('brag/{brag}',[\App\Http\Controllers\User\BragController::class, 'destroy'])->name('brag.destroy');

    // Profile
    Route::get('profile', [\App\Http\Controllers\User\Dashboard::class, 'profile'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
