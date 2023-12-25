<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function create()
    {
        $locations = \App\Models\Location::all(); // Adjust the namespace as needed
        return view('trips.create', ['locations' => $locations]);
    }

    public function store(Request $request)
    {
        // Validate and store trip details
        $trip = Trip::create([
            'date' => $request->input('date'),
            'start_location_id' => $request->input('start_location'),
            'end_location_id' => $request->input('end_location'), // Make sure this is not null
            // other trip details
        ]);
        
        
            // other trip details
            
         

        return redirect('/create-trip')->with('success', 'Trip created successfully');
    }
  
}
