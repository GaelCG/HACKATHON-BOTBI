@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Registrar Nuevo Cliente</a>

    @if(session('clientes') && count(session('clientes')) > 0)
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('clientes') as $cliente)
                    <tr>
                        <td>{{ $cliente['nombre'] }}</td>
                        <td>{{ $cliente['email'] }}</td>
                        <td>{{ $cliente['direccion'] }}</td>
                        <td>{{ $cliente['latitud'] }}</td>
                        <td>{{ $cliente['longitud'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay clientes registrados.</p>
    @endif
</div>
@endsection
