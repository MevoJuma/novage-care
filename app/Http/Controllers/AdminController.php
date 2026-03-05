<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $totalElders = User::role('elder')->count();
        $totalCaregivers = User::role('caregiver')->count();
        $recentElders = User::role('elder')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalElders',
            'totalCaregivers',
            'recentElders'
        ));
    }
}
