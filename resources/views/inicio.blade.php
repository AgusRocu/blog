@extends('plantilla')
@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif
@section('titulo', 'Inicio')
@section('contenido',' Este es el contenido del incioo :) ')