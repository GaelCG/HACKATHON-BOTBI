<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    public function processLogin(Request $request)
{
    
    $messages = [
        'email.required' => 'El campo de correo electrónico es obligatorio.',
        'email.regex' => 'Por favor, ingrese un correo electrónico válido.',
        'password.required' => 'El campo de contraseña es obligatorio.',
        'password.regex' => 'La contraseña debe tener al menos una mayúscula y un número, y un mínimo de 6 caracteres.',
    ];

    // Validación con regex
    $request->validate([
        'email' => ['required', 'regex:/^[\w\.-]+@[\w\.-]+\.\w+$/'],
        'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*\d).{6,}$/'],
    ], $messages);

    // Si pasa la validación, redirige al home
    return redirect()->route('home');
}

}
