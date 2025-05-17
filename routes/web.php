<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/register', [PacienteController::class, 'showRegister'])->name('register');
Route::post('/register', [PacienteController::class, 'register']);

//LOGIN

Route::get('/login', [PacienteController::class, 'showLogin'])->name('login');
Route::post('/login', [PacienteController::class, 'login']);
Route::post('/logout', [PacienteController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return 'Bienvenido, paciente autenticado.';
})->middleware('auth:paciente')->name('dashboard');
//PARA REDIRIGIR A LA PANTALLA DE HOME:
Route::get('/home', function () {
    return view('home', ['paciente' => Auth::guard('paciente')->user()]);
})->name('home')->middleware('auth:paciente');
    