@extends('layouts.plantilla')

@section('title','reo')

@section('content')
    <h1>Bienvenido a la seccion Reo</h1>
    <a href=" {{reo.create}} "> Crear Reo </a>
    <br>
    <a href=" {{reo.edit, $reo}} "> Editar Cliente</a>
    <ul>
        @foreach ($reo as $reo)
            <li>
                <a href="{{ route('reo.show'), $reo->reo}}"> {{$reo->nombres}} </a>
            </li>
        @endforeach
    </ul>

    {{ $reo->links }}
@endsection
