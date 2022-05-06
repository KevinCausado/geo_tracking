<?php

namespace App\Http\Controllers;

use App\Models\conductore;
use Illuminate\Http\Request;

class ConductoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = conductore::all();
        return view('conductores.index',['data'=>$respuesta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductores.frmregistro');
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
            'nombreConductor'=>'required',
            'apellidoConductor'=>'required',
            'telefonoConductor'=>'required',
            'direccionConductor'=>'required',
            'nopaseConductor'=>'required',
            'paseConductor'=>'required',
            'cedulaConductor'=>'required',
            'hojavidaConductor'=>'required'
            
        ]);

        $datos= new conductore();
        $datos->nombreConductor= $request->nombreConductor;
        $datos->apellidoConductor= $request->apellidoConductor;
        $datos->telefonoConductor= $request->telefonoConductor;
        $datos->direccionConductor= $request->direccionConductor;
        $datos->nopaseConductor= $request->nopaseConductor;
        $datos->paseConductor= $request->paseConductor;
        $datos->cedulaConductor= $request->cedulaConductor;
        $datos->hojavidaConductor= $request->hojavidaConductor;        
        $datos->save();

        return redirect ('/conductores/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\conductore  $conductore
     * @return \Illuminate\Http\Response
     */
    public function show(conductore $conductore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conductore  $conductore
     * @return \Illuminate\Http\Response
     */
    public function edit(conductore $conductore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\conductore  $conductore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conductore $conductore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conductore  $conductore
     * @return \Illuminate\Http\Response
     */
    public function destroy(conductore $conductore)
    {
        //
    }
}
