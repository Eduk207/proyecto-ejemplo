<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelitoController extends Controller
{
    public function index(){
        return view('delito.index');

    }
    public function create(){
        return view('delito.create');

    }
    public function show($delitio){
        return view('delito.show',['delito'=>$delito]);

    }
}
