<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReoController extends Controller
{
    public function index(){
        return view('reo.index');

    }
    public function create(){
        return view('reo.create');

    }
    public function show($reo){
        return view('reo.show',['reo'=>$reo]);

    }
}
