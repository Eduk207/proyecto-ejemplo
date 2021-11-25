<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reo_delitoController extends Controller
{
    public function index(){
        return view('reo_delito.index');

    }
    public function create(){
        return view('reo_delito.create');

    }
    public function show($reo_delito){
        return view('reo_delito.show',['reo_delito'=>$reo_delito]);

    }
}
