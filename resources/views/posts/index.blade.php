@extends('plantilla')
@section('titulo', 'Listado de post')
@section('contenido')
    <h1>Listado de posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                {{ $post->titulo }} | creado por: <span><strong>{{$post->user->login}} </strong></span> <br> 
                <!-- Botón Ver -->
                <a href="{{ route('posts.show', $post) }}">Ver</a>

                @auth
                @if(auth()->id() === $post->user_id)
                <!-- Botón Eliminar -->
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                @endif
                @endauth
            </li>
                    @empty
            <li>No hay posts disponibles.</li>
        @endforelse
    </ul>

<!-- Paginación -->
<div>
    {{ $posts->links('pagination::simple-default') }}
</div>
@endsection