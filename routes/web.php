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
    return view('welcome');
});




Auth::routes();


Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'pdf'])->name('PDF')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/FrmAuto', [App\Http\Controllers\HomeController::class, 'FrmAuto'])->name('FrmAuto')->middleware('auth');
Route::get('/index', [App\Http\Controllers\PrestamoController::class, 'index'])->name('index')->middleware('auth');
Route::post('/tablas', [App\Http\Controllers\HomeController::class, 'tablas'])->name('tablas')->middleware('auth');
Route::get('/FrmNomina', [App\Http\Controllers\HomeController::class, 'FrmNomina'])->name('FrmNomina')->middleware('auth');
Route::get('/FrmHipotecario', [App\Http\Controllers\HomeController::class, 'FrmHipotecario'])->name('FrmHipotecario')->middleware('auth');