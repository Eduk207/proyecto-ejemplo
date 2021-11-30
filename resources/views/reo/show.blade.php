@extends('layouts.plantilla')

@section('title','reo '. $reo->nombres)

@section('content')
    <h1> Bienvenido a la seccion Reo: {{ $reo->nombres }}</h1>
@endsection
