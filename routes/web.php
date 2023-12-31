<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;

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


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/login/{id}', [PageController::class, 'login'])->name('login');
Route::post('/login-auth', [AuthController::class, 'login'])->name('login-auth');
Route::get('/create-profil', [AuthController::class, 'index'])->name('index-create-profil');
Route::post('/store-profil', [AuthController::class, 'store'])->name('store-profil');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [PageController::class,'home'])->name('home');
Route::get('/buat-task', [PageController::class,'task'])->name('task');
Route::post('/buat-task', [TaskController::class,'create'])->name('task-create');
Route::patch('/complete-task/{id}', [TaskController::class, 'completeTask'])->name('complete-task');
Route::get('/destroy/{id}', [TaskController::class, 'destroy'])->name('destroy');
