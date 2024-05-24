<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [HomeController::class,'main'])->name('main');
Route::get('/jadwalgue/beranda', [PagesController::class,'index'])->name('index');
Route::get('/jadwalgue/complete-profil', [AuthController::class,'complete_profil'])->name('complete-profil');
Route::post('/jadwalgue/create-profil', [AuthController::class,'store_user'])->name('store-profil');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
Route::post('/jadwalgue/store-complete-profil/{id}', [AuthController::class, 'store_complete_profil'])->name('store-complete-profil');
