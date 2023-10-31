<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'generatePDF']);

Route::get('/download-pdf',[EmployeeController::class,'downloadPDF']);

//Route::get('/ticket',[EmployeeController::class,'generateTicket']);
Route::get('/ticket',[EmployeeController::class,'generateTicket']);
