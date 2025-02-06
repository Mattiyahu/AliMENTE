<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumhubController extends Controller
{
    public function index()
    {
        // Aqui você pode integrar a API do Humhub ou direcionar para a rede social
        return view('social.humhub');
    }
}

