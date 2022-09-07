<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Employee Route
    Route::controller(App\Http\Controllers\Admin\EmployeeController::class)->group(function () {
        Route::get('/employee', 'index');
        Route::get('/employee/create', 'create');
        Route::post('/employee', 'store');
        Route::get('/employee/{employee}/edit', 'edit');
        Route::put('/employee/{employee}', 'update');
    });

    // Doctor Route
    Route::controller(App\Http\Controllers\Admin\DoctorController::class)->group(function() {
        Route::get('/doctor', 'index');
        Route::get('/doctor/create', 'create');
        Route::post('/doctor', 'store');
        Route::get('/doctor/{doctor}/edit', 'edit');
        Route::put('/doctor{doctor}', 'update');
    });

});