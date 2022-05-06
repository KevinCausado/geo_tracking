@extends('plantilla')

@section('contenido')

<div class="col-xl-5 col-lg-7">
    <h2> VALOR PARAMETROS</h2>


    <div class="card shadow mb-4">
        <!-- Buscador -->
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2">&nbsp &nbsp
            <!-- Buton de Filtr -->
            <a href="" class="btn btn-outline-primary" type="button">Filtrar </a>&nbsp &nbsp
            <!-- Buton de Registro -->
            <a href="{{ route('valorparametros.frmregistro')}}" class="btn btn-outline-primary" type="button">Crear + </a>
        </div>
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre Parametro</th>
                        <th scope="col">Nombre Valor Parametro</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($valorparametros as $valorparametro )
                    <tr>
                        @foreach ($data as $parametro )
                        <th scope="row">{{$parametro->nombreParametro}}</th>
                        @endforeach
                        <td>{{$valorparametro->nombrevalorParametro}}</td>
                        <td>{{$valorparametro->estadovalorParametro}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection