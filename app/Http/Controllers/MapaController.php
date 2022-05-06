<?php

namespace App\Http\Controllers;

use App\Models\mapa;
use App\Models\conductore;
use Illuminate\Http\Request;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = conductore::all();  
        return view('mapas.index')->with('data',$respuesta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mapa  $mapa
     * @return \Illuminate\Http\Response
     */
    public function show(mapa $mapa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mapa  $mapa
     * @return \Illuminate\Http\Response
     */
    public function edit(mapa $mapa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mapa  $mapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mapa $mapa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mapa  $mapa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapa $mapa)
    {
        //
    }
}
