<?php

namespace App\Http\Controllers;
use App\Models\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'hairstylist' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]);
    
        Appointment::create($validated);
        return redirect()->back()->with('success', 'Appointment created successfully!');
        
    }
    
}
