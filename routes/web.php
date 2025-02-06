<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserNutritionController;
use App\Http\Controllers\MentalHealthController;
use App\Http\Controllers\HumhubController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\MentalHealthMonitoringController;

// Rota principal - Home
Route::get('/', [HomeController::class, 'index']);

// Rota para Login
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

// Rota para Cadastro de usuário
Route::get('/cadastro', [AuthController::class, 'showRegistrationForm']);
Route::post('/cadastro', [AuthController::class, 'register']);

// Rota para Cadastro de Dados Nutricionais do Usuário
Route::get('/cadastro/nutricional', [UserNutritionController::class, 'showForm']);
Route::post('/cadastro/nutricional', [UserNutritionController::class, 'store']);

// Rota para Cadastro de Dados de Saúde Mental do Usuário
Route::get('/cadastro/saude-mental', [MentalHealthController::class, 'showForm']);
Route::post('/cadastro/saude-mental', [MentalHealthController::class, 'store']);

// Rota para integrar com o Humhub (rede social)
Route::get('/humhub', [HumhubController::class, 'index']);

// Rota para o Usuário decidir entre acompanhamento ou interagir/criar postagens
Route::get('/decisao', [DecisionController::class, 'index']);

// Rota para Acompanhamento de Saúde Mental
Route::get('/acompanhamento/saude-mental', [MentalHealthMonitoringController::class, 'index']);

