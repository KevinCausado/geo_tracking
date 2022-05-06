@extends('plantilla')

@section('contenido')


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Crear nuevo Vehiculo</h1>
                        </div>
                        <form action="{{ route('vehiculosRegistro')}}" method="post" class="user">
                            {{csrf_field()}}

                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="idConductorVehiculo" class="form-control form-control-user" id="exampleFirstName" placeholder="ID Conductor (Foranea)">
                                </div>                                
                            </div> -->


                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="modeloVehiculo" class="form-control form-control-user" id="exampleFirstName" placeholder="Modelo">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="anoVehiculo" class="form-control form-control-user" id="exampleLastName" placeholder="Año">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="matriculaVehiculo" class="form-control form-control-user" id="exampleInputPassword" placeholder="Matricula">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="placaVehiculo" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Placa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="idConductorVehiculo" id="">
                                        @foreach ( $data as $conductor )
                                        <option value={{$conductor->idConductor}}>{{$conductor->nombreConductor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="docConductorVehiculo" class="form-control form-control-user" id="exampleLastName" placeholder="Documento del Conductor">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="docTarjetapropiedadVehiculo" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tarjeta de Propiedad">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="tecnicomecanicaVehiculo" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Técnico-Mecánica">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 ">
                                    <input type="text" name="soatVehiculo" class="form-control form-control-user" id="exampleInputPassword" placeholder="SOAT">
                                </div>
                                <div class="col-sm-6 ">
                                    <input type="file" name="docTecnicomecanicaVehiculo" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Técnico-Mecánica">
                                </div>                                

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="file" name="tarjetapropiedadVehiculo" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tarjeta de Propiedad">
                                </div>
                                <div class="col-sm-6 ">
                                    <input type="file" name="docSoatVehiculo" class="form-control form-control-user" id="exampleInputPassword" placeholder="SOAT">
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="date" name="fechavencimientoVehiculo" class="form-control form-control-user" id="exampleInputPassword" placeholder="Fecha Vencimiento">
                                </div>
                            </div>



                            <hr>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Crear </button>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
@endsection