<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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

//admin
Route::prefix('admin')->middleware('auth' ,'isAdmin')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
//    Route::get('/tickets', DashboardController::class, 'ShowTicketDetails');
//    Route::get('/tickets/{id}', DashboardController::class, 'GetCurrentTicket');
//    Route::put('/ticket-status/{id}', DashboardController::class, 'ShowTickets');
});
Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/store', [TicketController::class, 'store'])->name('store');
Route::delete('/delete/{id}', [TicketController::class, 'delete'])->name('delete');
//Route::put('/edit/ticket/{id}');
//Route::get(/tickets', [StudentController::class, 'showTicketOverview']);
//Route::get('/tickets/{id}');
//Route::get('tickets/edit/{id}');
//Route::post('tickets/update/{id}');
//Route::post('/tickets/store');
//Route::delete('/tickets/{id}');


Auth::routes();
//Route::get('/register', [RegisterController::class, 'setDefaultSelectedValues'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
