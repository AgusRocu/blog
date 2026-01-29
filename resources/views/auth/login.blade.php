@extends('plantilla')
@section('contenido')
<h1>Iniciar Secion</h1>

@error('login')
    <div>{{ $message }}</div>
@enderror

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div>
        <label for="login">Usuario: </label>
        <input type="text" name="login" value="{{ old('login') }}">
    </div>
    @error('titulo')
        <div>{{ $message }}</div>
    @enderror
    <div>
        <label for="password">Contraseña: </label>
        <input type="password" name="password">
    </div>
    @error('contenido')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Ingresar</button>
</form>
@endsection