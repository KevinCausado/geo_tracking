<?php

namespace App\Http\Controllers;
use App\Models\parametro;
use App\Models\valorparametro;
use Illuminate\Http\Request;

class ValorparametroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=2;

            $respuesta1 = parametro::where('idParametro',$i)->get(); 
            $respuesta2 = valorparametro::all();  
            return view('valorparametros.index',['valorparametros'=>$respuesta2])->with('data',$respuesta1);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respuesta = parametro::all();
        return view('valorparametros.frmregistro')->with('data',$respuesta);
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
            'idParametro'=>'required',
            'nombrevalorParametro'=>'required',
            'estadovalorParametro'=>'required'
        ]);

        $datos= new valorparametro();
        $datos->idParametro= $request->idParametro;
        $datos->nombrevalorParametro= $request->nombrevalorParametro;
        $datos->estadovalorParametro= $request->estadovalorParametro;
        $datos->save();
        return redirect ('/valorparametros/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\valorparametro  $valorparametro
     * @return \Illuminate\Http\Response
     */
    public function show(valorparametro $valorparametro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\valorparametro  $valorparametro
     * @return \Illuminate\Http\Response
     */
    public function edit(valorparametro $valorparametro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\valorparametro  $valorparametro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, valorparametro $valorparametro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\valorparametro  $valorparametro
     * @return \Illuminate\Http\Response
     */
    public function destroy(valorparametro $valorparametro)
    {
        //
    }
}
