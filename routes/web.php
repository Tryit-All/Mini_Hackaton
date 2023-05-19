<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\register_controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// untuk menuju ke halaman pengelaman kerja

Route::get('/otomotif', [BudayaController::class, 'index'])->middleware('auth');
Route::post('/otomotif.store', [BudayaController::class, 'store']);
Route::post('/otomotif.update', [BudayaController::class, 'update']);
Route::get('/otomotif.destroy/{id}', [BudayaController::class, 'destroy']);

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/cekLogin', [loginController::class, 'cek_login'])->middleware('guest');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/register', [register_controller::class, 'index']);
Route::post('/register.store', [register_controller::class, 'store']);