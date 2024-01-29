<header class="header bg-primary bg-gradient p-3 text-white bg-opacity-75">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
                <div class="header-left d-flex align-items-center">
                    <div class="menu-toggle-btn mr-20">
                        <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                            <i class="lni lni-chevron-left me-2"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
                <div class="header-right">
                    <!-- profile start -->
                    <div class="profile-box ml-15">
                       <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('img/icon/buscar.png') }}" alt="" width="30px" height="30px">
                    </button>
                    @include('layouts.inc.modal-busqueda')
                        <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-info">
                                <div class="info">
                                    <h5 class="text-light">{{ Auth::user()->name }}</h5>
                                    <div class="image">
                                        @if(Auth::user()->imagen)
                                        <img src="{{ asset(Auth::user()->imagen) }}" alt="" height="40px">
                                        @else
                                        <img src="{{ asset('img/usuario/negro.jpg') }}" alt="" height="40px">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <i class="lni lni-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                            <li>
                                <a href="{{ route('Usuario.configuration', Auth::user()->id ) }}"> <i
                                        class="lni lni-cog"></i> Configuración </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- profile end -->
                </div>
            </div>
        </div>
    </div>
</header>