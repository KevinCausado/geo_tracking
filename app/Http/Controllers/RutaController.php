<?php

namespace App\Http\Controllers;

use App\Models\ruta;
use App\Models\conductore;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=1;

            $respuesta1 = conductore::where('idConductor',$i)->get(); 
            $respuesta2 = ruta::all();   
            return view('rutas.index',['rutas'=>$respuesta2])->with('data',$respuesta1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respuesta = conductore::all();
        return view('rutas.frmregistro')->with('data',$respuesta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $respuesta = request()-> except ('_token');

        $request->validate([
            'idConductorRuta'=>'required',
            'coordenadasRuta'=>'required',
            'fechaRuta'=>'required'
        ]);

        $datos= new ruta();
        $datos->idConductorRuta= $request->idConductorRuta;
        $datos->coordenadasRuta= $request->coordenadasRuta;
        $datos->fechaRuta= $request->fechaRuta;        
        $datos->save();
        return redirect ('/rutas/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function show(ruta $ruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function edit(ruta $ruta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ruta $ruta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruta $ruta)
    {
        //
    }
}
