<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    // Mostrar el listado de clientes
    public function index()
    {
        $clientes = session('clientes', []); // Almacenamos clientes en la sesión temporal
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'estado' => 'required|string',
            'pais' => 'required|string',
            'codigo_postal' => 'required|regex:/^\d{5}(-\d{4})?$/',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe tener un formato válido (example@domain.com).',
            'direccion.required' => 'La dirección es obligatoria.',
            'ciudad.required' => 'La ciudad es obligatoria.',
            'estado.required' => 'El estado es obligatorio.',
            'pais.required' => 'El país es obligatorio.',
            'codigo_postal.required' => 'El código postal es obligatorio.',
            'codigo_postal.regex' => 'El código postal debe tener 5 dígitos o un formato válido (12345 o 12345-6789).',
        ]);

        
        $direccionCompleta = "{$request->direccion}, {$request->ciudad}, {$request->estado}, {$request->pais}, {$request->codigo_postal}";

        // API para convertir la dirección a coordenadas (usando OpenCage Geocoder como ejemplo)
        $apiKey = 'e750335c20904b06b3f3900ff3f9c031'; 
        $response = Http::get("https://api.opencagedata.com/geocode/v1/json", [
            'q' => $direccionCompleta,
            'key' => $apiKey,
        ]);

        $coordenadas = $response->json()['results'][0]['geometry'] ?? null;

        if ($coordenadas) {
            $cliente = [
                'nombre' => $request->nombre,
                'email' => $request->email,
                'direccion' => $direccionCompleta,
                'latitud' => $coordenadas['lat'],
                'longitud' => $coordenadas['lng'],
            ];

            $clientes = session('clientes', []);
            $clientes[] = $cliente;
            session(['clientes' => $clientes]);

            return redirect()->route('clientes')->with('success', 'Cliente registrado exitosamente.');
        }

        return back()->withErrors(['error' => 'No se pudieron obtener las coordenadas de la dirección.']);
    }
}
