<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wellness; // Ensure you have the Wellness model imported

class WellnessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // This method should return a view with a list of wellness records
        // For example, you might want to fetch all wellness records and pass them to a view
        $wellnessRecords = Wellness::all();
        // return view('wellness.index', compact('wellnessRecords'));

        // Placeholder for now
        return view('admin.wellness.chekins');
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

    /**
     * Display the wellness check-ins.
     */
    public function checkins()
    {
        // Fetch all wellness check-ins and pass them to the view
        $checkins = Wellness::all(); // Adjust this to fetch the relevant check-in data
        return view('admin.wellness.checkins', compact('checkins'));
    }

    /**
     * Display wellness alerts.
     */
    public function alerts()
    {
        // Fetch all wellness alerts and pass them to the view
        $alerts = Wellness::where('alert', true)->get(); // Adjust this to fetch the relevant alert data
        return view('admin.wellness.alerts', compact('alerts'));
    }
}
