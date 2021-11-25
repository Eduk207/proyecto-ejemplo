<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RasgosController extends Controller
{
    public function index(){
        return view('rasgos.index');

    }
    public function create(){
        return view('rasgos.create');

    }
    public function show($rasgos){
        return view('rasgos.show',['rasgos'=>$rasgos]);

    }
}
