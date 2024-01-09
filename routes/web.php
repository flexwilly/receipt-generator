<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TicketController;

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


Route::get('/',function(){
 return view('dashboard');
})->name('dashboard');
//Ticket Routes

//new route
Route::get('send-email-pdf', [PDFController::class, 'index'])->name('email_ticket');
Route::get('stream-pdf',[PDFController::class,'streamPDF'])->name('stream_pdf');
