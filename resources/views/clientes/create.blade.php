@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required>
            @error('nombre')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion') }}" required>
            @error('direccion')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control @error('ciudad') is-invalid @enderror" value="{{ old('ciudad') }}" required>
            @error('ciudad')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado') }}" required>
            @error('estado')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" name="pais" id="pais" class="form-control @error('pais') is-invalid @enderror" value="{{ old('pais') }}" required>
            @error('pais')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="codigo_postal" class="form-label">Código Postal</label>
            <input type="text" name="codigo_postal" id="codigo_postal" class="form-control @error('codigo_postal') is-invalid @enderror" value="{{ old('codigo_postal') }}" required>
            @error('codigo_postal')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</div>
@endsection

