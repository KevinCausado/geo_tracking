<?php

namespace App\Http\Controllers;

use App\Models\parametro;
use Illuminate\Http\Request;


class ParametroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = parametro::all();
        return view('parametros.index',['data'=>$respuesta]);
    }

    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parametros.frmregistro');
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
            'nombreParametro'=>'required|min:4',
            'estadoParametro'=>'required'
        ]);

        $datos= new parametro();
        $datos->nombreParametro= $request->nombreParametro;
        $datos->estadoParametro= $request->estadoParametro;
        $datos->save();
        return redirect ('/parametros/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function show(parametro $parametro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function edit(parametro $parametro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parametro $parametro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function destroy(parametro $parametro)
    {
        //
    }
}
