<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNutritionController extends Controller
{
    public function showForm()
    {
        return view('user.nutrition');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar dados nutricionais do usuário
    }
}

