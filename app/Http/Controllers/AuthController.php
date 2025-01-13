<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar el formulario de login
    public function processLogin(Request $request)
    {
        $messages = [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.regex' => 'Por favor, ingrese un correo electrónico válido.',
            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.regex' => 'La contraseña debe tener al menos una mayúscula, un número y un mínimo de 6 caracteres.',
        ];

        $request->validate([
            'email' => ['required', 'regex:/^[\w\.-]+@[\w\.-]+\.\w+$/'],
            'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*\d).{6,}$/'],
        ], $messages);

        return redirect()->route('home');
    }

    // Mostrar el formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Procesar el formulario de registro
    public function processRegister(Request $request)
{
    $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'name.min' => 'El nombre debe tener al menos 3 caracteres.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'Ingrese un correo electrónico válido.',
        'password.required' => 'La contraseña es obligatoria.',
        'password.regex' => 'La contraseña debe tener al menos una mayúscula, un número y un mínimo de 6 caracteres.',
        'password_confirmation.same' => 'La confirmación de la contraseña debe coincidir con la contraseña.',
    ];

    $request->validate([
        'name' => ['required', 'min:3', 'string'],
        'email' => ['required', 'email'],
        'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*\d).{6,}$/'],
        'password_confirmation' => ['required', 'same:password'],
    ], $messages);

    // Si la validación es exitosa, redirigir al home
    return redirect()->route('home')->with('success', 'Registro exitoso. Bienvenido!');
}

}
