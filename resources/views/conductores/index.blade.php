@extends('plantilla')

@section('contenido')
    
<div class="col-xl-10 col-lg-7">  

        
    <div class="card shadow mb-4">
        <!-- Buscador -->               
        <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar"
                    aria-label="Buscar" aria-describedby="basic-addon2">&nbsp &nbsp 
                    <!-- Buton de Filtr -->
                    <a href="" class="btn btn-outline-primary" type="button">Filtrar </a>&nbsp &nbsp  
                <!-- Buton de Registro -->
                    <a href="{{ route('conductores.frmregistro')}}" class="btn btn-outline-primary" type="button">Crear + </a>               
            </div>
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">No.Pase</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $conductor )                              
                    <tr>                       
                        <td>{{$conductor->nombreConductor}} </td>
                        <td>{{$conductor->apellidoConductor}}</td>
                        <td>{{$conductor->telefonoConductor}}</td>
                        <td>{{$conductor->direccionConductor}}</td>
                        <td>{{$conductor->nopaseConductor}}</td>
                    </tr>                   
                    @endforeach  
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection