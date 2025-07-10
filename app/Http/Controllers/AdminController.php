<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $user = Auth::user();
        $userCount = User::count();
        $elders = User::role('elder')->get();
        $totalElders = User::role('elder')->count();
        $totalCaregivers = User::role('caregiver')->count();
        $appointmentsToday = User::role('elder')->whereDate('created_at', today())->count();
        // $pendingRequests = User::role('elder')->where('status', 'pending')->count();
        $recentElders = User::role('elder')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'user',
            'userCount',
            'elders',
            'totalElders',
            'totalCaregivers',
            'appointmentsToday',
            // 'pendingRequests',
            'recentElders'
        ));
    }
}
