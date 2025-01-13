<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfiguracionController;

// ruta para configuracion
Route::get('configuracion', [ConfiguracionController::class, 'index'])->name('configuracion'); // Ruta para la configuración
// Ruta para el listado de clientes
Route::get('clientes', [ClientesController::class, 'index'])->name('clientes');

// Ruta para mostrar el formulario de registro
Route::get('clientes/create', [ClientesController::class, 'create'])->name('clientes.create');

// Ruta para almacenar un cliente
Route::post('clientes', [ClientesController::class, 'store'])->name('clientes.store');


// Ruta de login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('process-login');
// Ruta para mostrar el formulario de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login-form');

// Ruta para procesar el formulario de login
Route::post('/login', [AuthController::class, 'processLogin'])->name('process-login');

// Ruta para mostrar el formulario de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register-form');

// Ruta para procesar el formulario de registro
Route::post('/register', [AuthController::class, 'processRegister'])->name('process-register');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [AuthController::class, 'processRegister'])->name('process-register');

// Ruta de Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
