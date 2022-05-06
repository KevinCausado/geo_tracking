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
                                <h1 class="h4 text-gray-900 mb-4">Crear nuevo conductor</h1>
                            </div>
                            <form action="{{ route('conductoresRegistro')}}" method="post" class="user">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nombreConductor" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="apellidoConductor" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Apellido">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="telefonoConductor" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Teléfono">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="direccionConductor" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Dirección">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nopaseConductor" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="No.Pase">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="paseConductor" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Pase">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" name="cedulaConductor" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Cedula">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="hojavidaConductor" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Hoja de Vida">
                                    </div>
                                </div>
                               
                                <hr>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Registrar Conductor </button>
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

@endsection