<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function store(Request $request)
{
    $validated = $request->validate([
        'service' => 'required|string|max:255',
        'specialist' => 'required|string|max:255',
        'date' => 'required|string|max:255',
        'time' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'message' => 'nullable|string',
    ]);

    Appointment::create($validated);

    return redirect()->back()->with('success', 'Appointment booked successfully!');
}

}

