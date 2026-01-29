@extends('plantilla')
@section('titulo', 'Ficha de post')
@section('contenido')

<div>
    <h1>Ficha del post Nr: {{ $post->titulo }} </h1>
    <p>Aca tambien iria el contenido de la ficha de post <br><br> {{ $post->contenido }}</p>
    <p>Fecha creacion del post: {{ $post->created_at->format('d/m/Y')}}</p>
</div>

<div>
    <h3>Comentarios</h3>
    @forelse($post->coments as $comentario)
        <div class="card my-4">
            <p class="card-header d-flex justify-content-between"><strong>comentario creado por: {{ $comentario->user->login}}</strong> <span class=" text-body-secondary">{{ $comentario->created_at?->format('d/m/Y') }}</span></p>
            <div class="card-body">
                <p class="card-text">{{ $comentario->contenido }}</p>
            </div>
        </div>
        @empty
            Ningun comentario
        @endforelse
</div>


@endsection
