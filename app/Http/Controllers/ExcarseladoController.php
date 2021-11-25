<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcarseladoController extends Controller
{
    public function index(){
        return view('excarselado.index');

    }
    public function create(){
        return view('excarselado.create');

    }
    public function show($excarselado){
        return view('excarselado.show',['excarselado'=>$excarselado]);

    }
}
