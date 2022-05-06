<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Geo Tracking</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Estilo Mapa -->
    <style>
        #map {
            height: 100%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->


    <div id="wrapper">
        @yield('sidebar')

        <!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>
<!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- <ul class="navbar-nav ml-auto">
                    GEOTRACKING
                </ul> -->
                  
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Navbar -->

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="{{ route('mapa.index')}}">Mapa </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="{{ route('conductores.index')}}">Conductores </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="#">Empresas </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="{{ route('vehiculos.index')}}">Vehiculos </a>
                        </li>
                        <!-- Top bar divider -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bienvenido</span>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kevin Causado</span>
                                <img class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Content Wrapper -->
                @yield('contenido')
            </div>
            <!-- End of Page Wrapper -->



            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Estas seguro, que desea salir?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Selecciona "Salir" debajo para finalizar tu sesion actual.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="login.html">Salir</a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Bootstrap core JavaScript-->
            <script src="   {{asset ('vendor/jquery/jquery.min.js')}}"></script>
            <script src="  {{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

            <!-- Core plugin JavaScript-->
            <script src=" {{asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

            <!-- Custom scripts for all pages-->
            <script src=" {{asset ('js/sb-admin-2.min.js')}}"></script>

            <!-- Page level plugins -->
            <script src=" {{asset ('vendor/chart.js/Chart.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src=" {{asset ('js/demo/chart-area-demo.js')}}"></script>
            <script src="  {{asset (' js/demo/chart-pie-demo.js')}} "></script>

            <!-- <script>
                let map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById("map"), {
                        center: {
                            lat: -34.397,
                            lng: 150.644
                        },
                        zoom: 8,
                    });
                }

                window.initMap = initMap;
            </script>

            <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOatraGo9YlIGhpaj4ZTJyUT_xgj5cHY4&callback=initMap">
            </script> -->


</body>

</html>