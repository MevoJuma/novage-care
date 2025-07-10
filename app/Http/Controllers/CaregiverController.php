<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Elder;
use App\Models\User;
use App\Models\CaregiverPerformance;

class CaregiverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.caregiver.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //Asignment of caregivers to elders
    public function assignCaregiverToElder()
    {
        // Fetch all caregivers and elders from the database
        $caregivers = User::role('caregiver')->get();
        $elders = User::role('elder')->get();

        // Return the view with caregivers and elders
        return view('admin.caregiver.assign', compact('caregivers', 'elders'));
        // Redirect back with a success message
        // return redirect()->route('admin.assignment.index')->with('success', 'Caregiver assigned to elder successfully.');
    }

    // Performance of caregiver
    public function performance(Request $request)
    {
        // Optional filtering by caregiver ID
    $query = CaregiverPerformance::with('caregiver');

    if ($request->filled('caregiver_id')) {
        $query->where('caregiver_id', $request->caregiver_id);
    }

    // Optional date filtering (last_reviewed assumed as timestamp)
    if ($request->filled('from')) {
        $query->whereDate('last_reviewed', '>=', $request->from);
    }

    if ($request->filled('to')) {
        $query->whereDate('last_reviewed', '<=', $request->to);
    }

    $performances = $query->paginate(10);

    // Get all caregivers for the filter dropdown
    $caregivers = User::where('role', 'caregiver')->get();

    return view('admin.caregiver.performance', compact('performances', 'caregivers'));
    }
}
