<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReoController extends Controller
{
    public function index(){
        $reo = reo::orderBy('id', 'desc')->paginate();

       return view('reo.index', compact('reo'));
   }
    public function create(){
        return view('reo.create');
    }
    public function store(Request $request){

        $request->validate([
            'codigo_reo' => 'required',
            'ci' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'nacionalidad' => 'required',
            'fecha_nac' => 'required',
            'lugar_nac' => 'required',
        ]);
        $reo = new reo();

        $reo->codigo_reo = $request->codigo_reo;
        $reo->ci = $request->ci;
        $reo->nombres = $request->nombres;
        $reo->apellidos = $request->apellidos;
        $reo->nacionalidad = $request->nacionalidad;
        $reo->fecha_nac = $request->fecha_nac;
        $reo->lugar_nac = $request->lugar_nac;

        $reo->save();
        return redirect()->route('reo.show', $reo);
    }
    public function show($reo){
        return view('reo.show',['reo'=>$reo]);
    }
    public function edit(reo $cliente){

        return view('reo.edit', compact('reo'));
    }
    public function update(Request $request, reo $reo){

        $request->validate([
            'codigo_reo' => 'required',
            'ci' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'nacionalidad' => 'required',
            'fecha_nac' => 'required',
            'lugar_nac' => 'required',
        ]);

        $reo->codigo_reo = $request->codigo_reo;
        $reo->ci = $request->ci;
        $reo->nombres = $request->nombres;
        $reo->apellidos = $request->apellidos;
        $reo->nacionalidad = $request->nacionalidad;
        $reo->fecha_nac = $request->fecha_nac;
        $reo->lugar_nac = $request->lugar_nac;
        
        $reo->save();
        return redirect()->route('reo.show', $reo);
}
}