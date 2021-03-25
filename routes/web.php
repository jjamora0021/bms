<?php

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
    return view('auth.login');
});
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();

// Projects
Route::get('projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');

// BOQ
Route::get('boq', [App\Http\Controllers\BOQController::class, 'index'])->name('boq');
