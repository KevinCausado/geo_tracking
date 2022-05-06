@extends('plantilla')

@section('contenido')


<div class="col-xl-3 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <form action="{{ route('parametrosRegistro')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-center">
                    <h4>RUTAS</h4>
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Nombre Parametro</label>
                    <input type="text" name="nombreParametro" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Estado(0 ó 1)</label>
                    <input type="number" name="estadoParametro" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Registrar Parametro </button>
                </div>
            </form>
        </div>
    </div>

    @endsection