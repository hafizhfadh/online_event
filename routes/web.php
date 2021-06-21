<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('event/show/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('ticket/pay/{id}', [TicketController::class, 'pay'])->name('ticket.pay');
Route::post('ticket/pay', [TicketController::class, 'create'])->name('pay.create');
Route::get('ticket/print/{id}', [TicketController::class, 'print'])->name('ticket.print');
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('event/create', [EventController::class, 'save'])->name('event.save');
});