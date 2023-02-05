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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('academic', [AcademicController::class, 'index'])->name('academics');

    Route::view('academic/create','livewire.show-form');
//    Route::get('academic/create', [AcademicController::class, 'create'])->name('academicCreate');
    Route::post('academic/store', [AcademicController::class, 'store'])->name('academicStore');

    Route::post('academic/edit/{id}', [AcademicController::class, 'edit'])->name('academicEdit');
    Route::patch('academic/update/{id}', [AcademicController::class, 'update'])->name('academicUpdate');

    Route::delete('academic/delete/{id}', [AcademicController::class, 'destroy']);

});
