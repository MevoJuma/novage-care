<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;


class ElderController extends Controller
{
    //
    public function dashboard()
    {
        $user = Auth::user();

        // $nextAppointment = $user->appointments()->first();

        //DB queries later
        $mood = '😊';
        $nextAppointment = '2023-10-15 14:00:00 - Physiotherapy';
        $medicationsDue = 'Aspirin 100mg - 1 tablet daily';
        $newMessages = 3;

        return view('elder.dashboard', compact(
            'user',
            'mood',
            'nextAppointment',
            'medicationsDue',
            'newMessages'
        ));
    }

    public function index(Request $request)
    {
        // Fetch all elders from the database

        $elders = user::all();
        // $elders = user::where('role', 'elder')->get();

        //  $appointments = Appointment::where('elder_id', $elders->id())
        //      ->orderBy('date', 'asc')
        //      ->take(5)
        //      ->get();

        $query = User::role('elder');
        if($request->filled('search')){
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('status')) {
        $query->where('status', $request->status);
        }

        if ($request->filled('joined_after')) {
            $query->whereDate('created_at', '>=', $request->joined_after);
        }

        if ($request->filled('joined_before')) {
            $query->whereDate('created_at', '<=', $request->joined_before);
        }

        // Return the view with the list of elders
        return view('admin.elder.index',compact(
            'elders'
        ));
    }

    // Show the form for creating a new elder
    public function create()
    {
        // Return the view to create a new elder
        return view('admin.elder.create');
    }

    // Elder reports
    public function reports()
    {
        // Fetch all elders from the database
        $elders = User::role('elder')->get();

        // Return the view with the list of elders
        return view('admin.elder.reports');
    }

    //Show function for a specific elder
    // public function show($id)
    // {
    //     // Find the elder by ID
    //     $elder = User::findOrFail($id);

    //     // Fetch the elder's appointments
    //     $appointments = $elder->appointments()->orderBy('date', 'asc')->take(5)->get();

    //     // Return the view with the elder's data and appointments
    //     return view('admin.elder.report', compact('elder', 'appointments'));
    // }

    public function edit($id)
    {
        // Find the elder by ID
        $elder = User::findOrFail($id);

        // Return the edit view with the elder's data
        return view('admin.elder.edit', compact('elder'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            // Add other validation rules as needed
        ]);

        // Find the elder by ID
        $elder = User::findOrFail($id);

        // Update the elder's data
        $elder->name = $request->input('name');
        $elder->email = $request->input('email');
        // Update other fields as needed

        // Save the changes
        $elder->save();

        // Redirect back to the index with a success message
        return redirect()->route('admin.elders.index')->with('success', 'Elder updated successfully.');
    }
    public function destroy($id)
    {
        // Find the elder by ID
        $elder = User::findOrFail($id);

        // Delete the elder
        $elder->delete();

        // Redirect back to the index with a success message
        return redirect()->route('admin.elders.index')->with('success', 'Elder deleted successfully.');
    }
}
