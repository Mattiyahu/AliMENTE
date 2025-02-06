<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentalHealthMonitoringController extends Controller
{
    public function index()
    {
        return view('user.mental-health-monitoring');
    }
}

