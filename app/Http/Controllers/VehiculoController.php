<?php

namespace App\Http\Controllers;

use App\Models\vehiculo;
use App\Models\conductore;
use Illuminate\Http\Request;

class VehiculoController extends Controller
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
            $respuesta2 = vehiculo::all();           
            // $respuesta2 = vehiculo::where('idVehiculo',$i)->get(); 
            return view('vehiculos.index',['vehiculos'=>$respuesta2])->with('data',$respuesta1);
           
        
        // $respuesta1= conductore::all();
        // $id= $request->get('idConductor');                
              
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respuesta = conductore::all();  
        return view('vehiculos.frmregistro')->with('data',$respuesta);
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

        // $request->validate([
            
        //     'idConductorVehiculo'=>'required',
        //     'modeloVehiculo'=>'required',
        //     'anoVehiculo'=>'required',
        //     'placaVehiculo'=>'required', 
        //     'nombreconductorVehiculo'=>'required',
        //     'tarjetapropiedadVehiculo'=>'required',
        //     'tecnicomecanicaVehiculo'=>'required',
        //     'soatVehiculo'=>'required',
        //     'fechavencimientoVehiculo'=>'required'           
                        
            
        // ]);

        // $datos= new vehiculo();        
        // $datos->idConductorVehiculo= $request->idConductorVehiculo;
        // $datos->modeloVehiculo= $request->modeloVehiculo;
        // $datos->anoVehiculo= $request->anoVehiculo;
        // $datos->placaVehiculo= $request->placaVehiculo;
        // $datos->nombreconductorVehiculo= $request->nombreconductorVehiculo;
        // $datos->tarjetapropiedadVehiculo= $request->tarjetapropiedadVehiculo;
        // $datos->tecnicomecanicaVehiculo= $request->tecnicomecanicaVehiculo;
        // $datos->soatVehiculo= $request->soatVehiculo;
        // $datos->fechavencimientoVehiculo= $request->fechavencimientoVehiculo;      
        // $datos->save();




        $respuesta = request()-> except ('_token');

        $request->validate([    
                    
            'idConductorVehiculo'=>'required',
            'modeloVehiculo'=>'required',
            'anoVehiculo'=>'required',
            'matriculaVehiculo'=>'required', 
            'placaVehiculo'=>'required', 
            // 'nombreConductorVehiculo'=>'required',
            'docConductorVehiculo'=>'required',
            'docTarjetapropiedadVehiculo'=>'required',
            'docTecnicomecanicaVehiculo'=>'required',
            'docSoatVehiculo'=>'required',
            'tecnicomecanicaVehiculo'=>'required',
            'soatVehiculo'=>'required',
            'fechavencimientoVehiculo'=>'required'           
                        
            
        ]);

        $datos= new vehiculo();
        $datos->idConductorVehiculo= $request->idConductorVehiculo;
        $datos->modeloVehiculo= $request->modeloVehiculo;
        $datos->anoVehiculo= $request->anoVehiculo;
        $datos->matriculaVehiculo= $request->matriculaVehiculo;
        $datos->placaVehiculo= $request->placaVehiculo;
        // $datos->nombreConductorVehiculo= $request->nombreConductorVehiculo;
        $datos->docConductorVehiculo= $request->docConductorVehiculo;
        $datos->docTarjetapropiedadVehiculo= $request->docTarjetapropiedadVehiculo;
        $datos->docTecnicomecanicaVehiculo= $request->docTecnicomecanicaVehiculo;
        $datos->docSoatVehiculo= $request->docSoatVehiculo;
        $datos->tecnicomecanicaVehiculo= $request->tecnicomecanicaVehiculo;
        $datos->soatVehiculo= $request->soatVehiculo;       
        $datos->fechavencimientoVehiculo= $request->fechavencimientoVehiculo;      
        $datos->save();
        
        return redirect ('/vehiculos/index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehiculo $vehiculo)
    {
        //
    }
}
