@extends('layouts.plantilla')

@section('title','Editar Reo')

@section('content')
    <h1>En esta seccion podras editar un Reo</h1>
    <form action="{{ route('reo.update', $reo) }}" method="POST">
        @csrf
        @method('put')
        <label for="">
            Codigo Reo: <input type="text" name="codigo_reo" value="{{old('codigo_reo', $reo->codigo_reo)}} ">
        </label>
        <br>
        <label for="">
            Cedula: <input type="text" name="ci" value=" {{old('ci', $reo->ci)}} ">
        </label>
        <br>
        <label for="">
            Nombres: <input type="text" name="nombres" value=" {{old('nombres', $reo->nombres)}} ">
        </label>
        <br>
        <label for="">
            Apellidos: <input type="text" name="apellidos" value=" {{old('apellidos', $reo->apellidos)}} ">
        </label>
        <br>
        <label for="">
            Nacionalidad: <input type="text" name="nacionalidad" value=" {{old('nacionalidad', $reo->nacionalidad)}} ">
        </label>
        <br>
        <label for="">
            Fecha de nacimiento: <input type="date" name="fecha_nac" value=" {{old('fecha_nac', $reo->fecha_nac)}} ">
        </label>
        <br>
        <label for="">
            Lugar de nacimiento: <input type="text" name="lugar_nac" value=" {{old('lugar_nac', $reo->lugar_nac)}} ">
        </label>
        <br>
        <button type="submit">ACTUALIZAR</button>
    </form>
@endsection
