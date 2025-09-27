<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function index()
    {
        // Logic to generate and return reports
        return view('admin.reports.index');
    }
}
