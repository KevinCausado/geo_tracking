@extends('plantilla')

@section('contenido')

<div class="col-xl-5 col-lg-7">
    <h2> RUTAS</h2>


    <div class="card shadow mb-4">
        <!-- Buscador -->
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2">&nbsp &nbsp
            <!-- Buton de Filtr -->
            <a href="" class="btn btn-outline-primary" type="button">Filtrar </a>&nbsp &nbsp
            <!-- Buton de Registro -->
            <a href="{{ route('rutas.frmregistro')}}" class="btn btn-outline-primary" type="button">Crear + </a>
        </div>
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre Conductor</th>
                        <th scope="col">Coordenadas</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $rutas as $ruta )
                    <tr>
                        @foreach ( $data as $conductor )
                        <th scope="row">{{ $conductor->nombreConductor}}</th>
                        @endforeach
                        
                        <td>{{ $ruta->coordenadasRuta}}</td>
                        <td>{{ $ruta->fechaRuta}}</td>
                        @endforeach
                    </tr>



                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection