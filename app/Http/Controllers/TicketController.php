<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function searchDate()
  {
    // Display form for searching date and purchasing ticket
    return view('tickets.search');
  }

  public function purchaseTicket(Request $request)
  {
      // Process ticket purchase and seat allocation
      $tripId = $request->input('trip_id');
      $seatNumber = $request->input('seat_number');
  
      // Check if the seat is available and allocate it
      // ...
  
      return redirect('/search-date')->with('success', 'Ticket purchased successfully');
  }
  

}
