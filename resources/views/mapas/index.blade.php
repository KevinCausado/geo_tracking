@extends('plantilla')

@section('sidebar')

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Geo Tracking </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Heading -->
            <div class="sidebar-heading">
                Rutas
            </div>

            
            @foreach ($data as $conductores )   
           
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{$conductores->nombreConductor}}</span></a>
            </li>
            @endforeach
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('parametros.frmregistro')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Parametros</span></a>
            </li>
             <!-- Divider -->
             <li class="nav-item active">
                <a class="nav-link" href="{{ route('valorparametros.frmregistro')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Valor parametro</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('rutas.frmregistro')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Rutas</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>            

        </ul>


@endsection

@section('contenido')

<!-- <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5"> -->
        <!-- <div class="mapouter"> -->
            <div class="gmap_canvas"><iframe width="1024px" height="1024px" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 1024px;
                        width: 1024px;
                    }
                </style><a href="https://www.embedgooglemap.net">google map code generator</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 1024px;
                        width: 1024px;
                    }
                </style>
            </div>
        <!-- </div> -->
    <!-- </div>
</div> -->


@endsection