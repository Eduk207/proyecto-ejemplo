<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FugaController extends Controller
{
    public function index(){
        return view('fuga.index');

    }
    public function create(){
        return view('fuga.create');

    }
    public function show($fuga){
        return view('fuga.show',['fuga'=>$fuga]);

    }
}
