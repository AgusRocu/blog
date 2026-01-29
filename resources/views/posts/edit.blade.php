@extends('plantilla')
@section('titulo', 'Listado de post')
@section('contenido')
<h1>Editar el post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="{{ $post->titulo }}">
    </div>
    <div>
        <label for="contenido">Contenido</label>
        <textarea name="contenido">{{ $post->contenido }}</textarea>
    </div>
    <button type="submit">Actualizar</button>
</form>

@endsection