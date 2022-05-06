@extends('plantilla')

@section('contenido')

<div class="col-xl-3 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <form action="{{ route('valorparametrosRegistro')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-center">
                        <h4> Valor Parametros</h4>
                    </div>
                    <select name="idParametro" id="">
                        @foreach ( $data as $parametro )
                        <option value={{$parametro->idParametro}}>{{$parametro->nombreParametro}}</option>
                        @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre valor Parametro</label>
                    <input type="text" name="nombrevalorParametro" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Estado(0 ó 1)</label>
                    <input type="number" name="estadovalorParametro" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Registrar  Valor Parametro </button>
                </div>
            </form>
        </div>
    </div>

    @endsection