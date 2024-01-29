<aside class="sidebar-nav-wrapper bg-black bg-gradient">
    <div class="navbar-logo">
        <a href="{{ route('Welcome') }}">
            <img class="rounded-circle" src="{{ asset('img/icon/perfil_git.gif') }}" alt="logo" width="50px" height="50px"/>
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item">
                <a href="{{ route('home') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/panel1.png')}}" alt="" width="22" height="22" class="icon-navbar">
                    </span>
                    <span class="text">Panel de control</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('User.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/cliente1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Empresa.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/empresa1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Empresa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Cliente.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/cliente1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Cliente</span>
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a href="{{ route('Proyecto.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/proyecto1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Proyecto</span>
                </a>
            </li>
            <span class="divider">
                <hr />
            </span>
            <li class="nav-item">
                <a href="{{ route('Contacto.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/contacto1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Contacto</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Tecnologia.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/tecnologia1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Tecnología</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Venta.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/venta1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Venta</span>
                </a>
            </li>

            <span class="divider">
                <hr />
            </span>

            <li class="nav-item">
                <a href="{{ route('Educacion.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/educacion1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Educación</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('Experiencia.index') }}">
                    <span class="icon">
                    <img src="{{asset('img/icon/experiencia1.png')}}" alt="" width="22" height="22">
                    </span>
                    <span class="text">Experiencia Profesional</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>