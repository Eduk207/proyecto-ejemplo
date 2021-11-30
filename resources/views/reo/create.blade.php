@extends('layouts.plantilla')

@section('title','Crear reo')

@section('content')
    <h1>En esta seccion podras agregar un Reo</h1>
    <form action="{{ route('reo.store') }}" method="POST">
        @csrf
        <label for="">
            Codigo Reo: <input type="text" name="codigo_reo" value="{{old('codigo_reo')}}">
        </label>
        <br>
        <label for="">
            Cedula: <input type="text" name="ci" value="{{old('ci')}}">
        </label>
        @error('ci')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Nombres: <input type="text" name="nombres" value="{{old('nombres')}}">
        </label>
        <br>
        <label for="">
            Apellidos: <input type="text" name="apellidos" value="{{old('apellidos')}}">
        </label>
        <br>
        <label for="">
            Nacionalidad: <input type="text" name="nacionalidad" value="{{old('nacionalidad')}}">
        </label>
        <br>
        <label for="">
            Fecha de nacimiento: <input type="date" name="fecha_nac" value="{{old('fecha_nac')}}">
        </label>
        <br>
        <label for="">
            Lugar de nacimiento: <input type="text" name="lugar_nac" value="{{old('lugar_nac')}}">
        </label>
        <br>
        <button type="submit">REGISTRAR</button>
    </form>
@endsection
