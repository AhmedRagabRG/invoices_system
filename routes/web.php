<?php

use App\Http\Controllers\Admin\AcademicController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', [AdminController::class, 'index'])->middleware('auth')->name('dashboard');

    Route::get('academic', [AcademicController::class, 'index'])->middleware('auth')->name('dashboard');

    Route::get('academic/create', [AcademicController::class, 'create'])->middleware('auth')->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
