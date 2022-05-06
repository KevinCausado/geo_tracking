@extends('plantilla')

@section('contenido')


<div class="col-xl-3 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <form action="{{ route('rutasRegistro')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-center">
                        <h4> Rutas</h4>
                    </div>
                    <select name="idConductorRuta" id="">
                        @foreach ( $data as $conductor )
                        <option value={{$conductor->idConductor}}>{{$conductor->nombreConductor}}</option>
                        @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Coordenadas</label>
                    <input type="text" name="coordenadasRuta" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">fecha Ruta</label>
                    <input type="date" name="fechaRuta" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Registrar Ruta </button>
                </div>
            </form>
        </div>
    </div>

    @endsection