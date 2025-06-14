<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ElderController extends Controller
{
    //
    public function dashboard()
    {
        $user = Auth::user();

        $nextAppointment = $user->appointments()->first();

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
}
