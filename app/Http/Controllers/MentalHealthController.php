<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentalHealthController extends Controller
{
    public function showForm()
    {
        return view('user.mental-health');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar dados de saúde mental
    }
}

