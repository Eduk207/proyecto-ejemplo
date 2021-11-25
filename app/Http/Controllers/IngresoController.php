<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index(){
        return view('ingreso.index');

    }
    public function create(){
        return view('ingreso.create');

    }
    public function show($ingreso){
        return view('ingreso.show',['ingreso'=>$ingreso]);

    }
}
