<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="{{ asset('assets/img/sidebar-4.jpg') }}">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    GEO TRACKING
                </a>
            </div>
            <div class="sidebar-heading">
                <span class="text-center">Rutas</span>
            </div>
            <!-- {{-- @foreach ($conductores as $conductor) -->
                <li class="nav-item-active">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-techometer-alt"></i>
                        <span>Yurley </span></a>
                </li>
                <li class="nav-item-active">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-techometer-alt"></i>
                        <span>Yurley </span></a>
                </li>
                <li class="nav-item-active">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-techometer-alt"></i>
                        <span>Yurley </span></a>
                </li>
            <!-- @endforeach --}} -->
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('mapa') }}">
                                <span class="no-icon">Mapa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('conductores') }}">
                                <span class="no-icon">Conductores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('vehiculos') }}">
                                <span class="no-icon">Vehiculos</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
       
    </div>
</div>

@section('contenido')
    <div class="container">
        <div class="card">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="850" height="530" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=barranquilla&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://fmovies-online.net"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 530px;
                            width: 850px;
                        }

                    </style><a href="https://www.embedgooglemap.net"></a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 530px;
                            width: 850px;
                        }

                    </style>
                </div>
            </div>
        </div>
    </div>