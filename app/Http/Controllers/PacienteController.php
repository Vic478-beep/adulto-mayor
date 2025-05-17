<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function showRegister()
    {
        return view('auth.register'); // vista del formulario
    }
    //FUNCION REGISTRAR PACIENTE NUEVO
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required|unique:pacientes',
            'email' => 'required|email|unique:pacientes',
            'password' => 'required|min:8|confirmed',
        ]);

        Paciente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'ci' => $request->ci,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso');
    }
    //VISTA FORMULARIO LOGIN
    public function showLogin()
    {
        return view('auth.login');
    }
    //FUNCION PARA INICIAR SESION CON EL PACIENTE NUEVO
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

     //nueva linea   if (Auth::guard('paciente')->attempt($credentials)) {
    return redirect()->route('home');
    }



        return back()->withErrors(['email' => 'Credenciales inválidas']);
    }

    public function logout()
    {
        Auth::guard('paciente')->logout();
        return redirect()->route('login');
    }
}
