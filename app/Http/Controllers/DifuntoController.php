<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DifuntoController extends Controller
{
    public function index(){
        return view('difunto.index');

    }
    public function create(){
        return view('difunto.create');

    }
    public function show($difunto){
        return view('difunto.show',['difunto'=>$difunto]);

    }
}
