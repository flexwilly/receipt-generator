<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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


//Route::get('/',[EmployeeController::class,'index']);

Route::get('/',[EmployeeController::class,'index'])->name('dashboard');

Route::get('/sendpdf', [EmployeeController::class, 'sendPDF'])->name('sendpdf');

Route::get('/download-pdf',[EmployeeController::class,'downloadPDF'])->name('downloadpdf');

Route::get('/ticket',[EmployeeController::class,'showTicket'])->name('viewticket');

Route::get('/ticket/generate',[EmployeeController::class,'generateTicket'])->name('generateticket');

//Ticket Routes
Route::get('/first-ticket',[TicketController::class,'showTicket'])->name('first_ticket');
Route::get('/send-ticket',[TicketController::class,'sendTicket'])->name('send_ticket');
