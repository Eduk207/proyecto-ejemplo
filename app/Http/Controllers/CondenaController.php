<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondenaController extends Controller
{
    public function index(){
        return view('condena.index');

    }
    public function create(){
        return view('condena.create');

    }
    public function show($condena){
        return view('condena.show',['condena'=>$condena]);

    }
}
