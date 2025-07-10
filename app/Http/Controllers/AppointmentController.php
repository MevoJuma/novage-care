<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AppointmentController extends Controller
{
    //
    public function store(Request $request)
{
    $validated = $request->validate([
        'user_id' => 'nullable',
        'service' => 'required|string|max:255',
        'specialist' => 'required|string|max:255',
        'date' => 'required|string|max:255',
        'time' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'message' => 'nullable|string',
    ]);

     $validated['user_id'] = Auth::check() ? Auth::id() : null;
     //$validated['user_id'] = auth()->check() ? auth()->id() : null;

    Appointment::create($validated);

    return redirect()->back()->with('success', 'Appointment booked successfully!');
}

    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.upcoming', compact('appointments'));
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.show', compact('appointment'));
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully!');
    }

    public function history()
    {
        $appointments = Appointment::where('date', '<', now())->orderByDesc('date')->paginate(10);
        return view('admin.appointments.history', compact('appointments'));
    }

    public function create()
    {
        $elders = User::role('elder')->get();
        $caregivers = User::role('caregiver')->get();
        return view('admin.appointments.create', compact('elders', 'caregivers'));
    }

    

}

