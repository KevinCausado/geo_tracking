@extends('plantilla')

@section('contenido')

<div class="card shadow mb-4">
    <!-- Buscador -->
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2">&nbsp &nbsp
        <!-- Buton de Filtr -->
        <a href="" class="btn btn-outline-primary" type="button">Filtrar </a>&nbsp &nbsp
        <!-- Buton de Registro -->
        <a href="{{ route('vehiculos.frmregistro')}}" class="btn btn-outline-primary" type="button">Crear + </a>
    </div>
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Conductor</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Tecnomecánica</th>
                    <th scope="col">SOAT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $vehiculo )
                <tr>
                    @foreach ($data as $conductor )
                    <td>{{ $conductor->nombreConductor}}</td>
                    @endforeach


                    <td>{{ $vehiculo->modeloVehiculo }}</td>
                    <td>{{ $vehiculo->anoVehiculo}}</td>
                    <td>{{ $vehiculo->matriculaVehiculo }}</td>
                    <td>{{ $vehiculo->placaVehiculo }}</td>
                    <td>{{ $vehiculo->tecnicomecanicaVehiculo }}</td>
                    <td>{{ $vehiculo->soatVehiculo}}</td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </div>
</div>
</div>

@endsection