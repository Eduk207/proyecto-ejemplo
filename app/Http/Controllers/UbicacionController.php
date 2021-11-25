<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function index(){
        return view('ubicacion.index');

    }
    public function create(){
        return view('ubicacion.create');

    }
    public function show($ubicacion){
        return view('ubicacion.show',['ubicacion'=>$ubicacion]);

    }
}
