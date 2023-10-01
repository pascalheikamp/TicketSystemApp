<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/studentid/{{studentid}}', [StudentController::class, 'GetStudent']);

require __DIR__.'/auth.php';
