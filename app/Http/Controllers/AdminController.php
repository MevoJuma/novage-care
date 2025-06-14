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
        return view('admin.dashboard', compact('user','userCount','elders'));
    }
}
