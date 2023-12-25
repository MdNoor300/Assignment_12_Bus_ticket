<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;

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


Route::get('/create-trip', [TripController::class,'create']); // Form for creating a trip
Route::post('/create-trip',[TripController::class,'store']); // Store the trip details

Route::get('/search-date', [TicketController::class,'searchDate']); // Form for searching date and purchasing ticket
Route::post('/purchase-ticket',[TicketController::class,'purchaseTicket']); // Process ticket purchase
