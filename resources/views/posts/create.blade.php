@extends('plantilla')
@section('titulo', 'Listado de post')
@section('contenido')
<h1>Crear un nuevo post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="{{ old('titulo') }}">
    </div>
    @error('titulo')
        <div>{{ $message }}</div>
    @enderror
    <div>
        <label for="contenido">Contenido</label>
        <textarea name="contenido">{{ old('contenido') }}</textarea>
    </div>
    @error('contenido')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Guardar</button>
</form>
@endsection