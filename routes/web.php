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
Route::get('/first-ticket',[TicketController::class,'showTicket'])->name('first_ticket');
Route::get('/send-ticket',[TicketController::class,'sendTicket'])->name('send_ticket');


//new route
Route::get('send-email-pdf', [PDFController::class, 'index'])->name('email_ticket');

//ticket blade template
// Route::get('/ticket',function(){
//     return view('ticket');
// });

// Route::get('/stream-ticket',[TicketController::class,'streamTicket']);
