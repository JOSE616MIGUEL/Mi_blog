<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Analista Programador || José Miguel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/icon/perfil_git.gif') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header =======  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
    <header id="header">

        <div class="d-flex flex-column">


            <div class="profile">
                <img src="{{ asset('assets/img/img1.jpg') }}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="{{ route('Welcome') }}">José Calderón</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://web.facebook.com/jose.miguelcalderon.9/" class="facebook" target="_blank"><i
                            class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/_pantera616_/" class="instagram" target="_blank"><i
                            class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/jose-calderon-1a80a1283/" class="linkedin" target="_blank"><i
                            class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/JOSE616MIGUEL" class="linkedin" target="_blank"><i
                            class="bx bxl-github"></i></a>
                    <a href="{{ route('Cv.pdf') }}" class="linkedin" target="_blank"><i class='bx bxs-file-pdf'></i></a>
                    <!--validate user -->
                    @guest

                        <a href="{{ route('login') }}" class="text-white" target="_blank">
                            <i class="bi bi-box-arrow-in-right"></i>
                        </a>
                    @else
                        <!--Validación de rol administrador -->
                        @if (Auth::user()->role_as == 1)
                            <a href="{{ route('home') }}" class="text-white" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-database-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223" />
                                    <path
                                        d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972" />
                                    <path
                                        d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972" />
                                    <path
                                        d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972" />
                                </svg>
                            </a>
                        @else
                        @endif
                        <!--Fin Validación de rol administrador -->
                    @endguest
                    <!--End validate user -->
                </div>
            </div>



            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Inicio</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre
                                Mí</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resumen</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portafolio</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Servicios</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contacto</span></a></li>
                    <!--validate user -->
                    @guest
                    @else
                        <li class="nav-link scrollto"><i class="bx bx-home"></i>
                            <span>
                                <h6 class="text-light">Información de la cuenta</h6>
                                <p class="text-secondary">{{ Auth::user()->name }}</p>
                                <p class="text-secondary">{{ Auth::user()->email }}</p>
                                <p class="text-secondary">{{ Auth::user()->fono }}</p>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i
                                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </span>
                        </li>
                    @endguest
                    <!--End validate user -->
                </ul>

            </nav><!-- .nav-menu -->

        </div>

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">

        <div class="hero-container" data-aos="fade-in">
            <h1>José Calderón</h1>
            <p>Yo soy <span class="typed" data-typed-items="Analista Programador :)"></span></p>
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-primary" role="alert">
                    {{ $mensaje }}
                </div>
            @else
            @endif
        </div>
    </section><!-- End Hero -->
    <div id="particles-js"></div>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Sobre mí</h2>
                    <p>Mi nombre es José Miguel, soy títulado de analista programador,
                        durante mi periodo estudiantil realizé proyectos de programación en distintos lenguajes, php,
                        java, sql, json, xml, etc.
                        Mis proyectos personales están incluido este mismo sitio web,
                        donde tengo datos sensibles e información que necesito para mi gestión,
                        también mi propia aplicación móvil pensada y analizada para artitas callejeros especificamente
                        para los habilidosos malabaristas.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/img2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Analista Programador, Desarrollo web &amp; móvil.</h3>
                        <p class="fst-italic">
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Cumpleaños:</strong> <span>5 de
                                            septiembre
                                            2000</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Sitio Web:</strong>
                                        <span>www.example.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Teléfono:</strong>
                                        <span>+569</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Santiago,
                                            Chile</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>22</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Hechos</h2>
                    <p>En esta sección se aprecia los clientes, proyectos, tecnologías dominadas y empresas registradas.
                    </p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <?php
                            $contandorcliente = 0;
                            ?>
                            @forelse ($cliente as $item)
                                <?php
                                $contandorcliente++;
                                ?>
                            @empty
                                <!--
    <tr>
                                <div>
                                    <h1>No hay cliente</h1>
                                </div>
                            </tr>

                              -->
                            @endforelse
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $contandorcliente; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>

                            <strong>Clientes</strong>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <?php
                            $contandorproyecto = 0;
                            ?>
                            @forelse ($proyecto as $item)
                                <?php
                                $contandorproyecto++;
                                ?>
                            @empty
                                <!--
                            <tr>
                                <div>
                                    <h1>No hay proyecto</h1>
                                </div>
                            </tr>
                              -->
                            @endforelse
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $contandorproyecto; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>

                            <strong>Projectos</strong>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <?php
                            $contandortecnologia = 0;
                            ?>
                            @forelse ($tecnologia as $item)
                                <?php
                                $contandortecnologia++;
                                ?>
                            @empty
                                <!--
                            <tr>
                                <div>
                                    <h1>No hay tecnología</h1>
                                </div>
                            </tr>
                              -->
                            @endforelse
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $contandortecnologia; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <strong>Tecnologías dominadas</strong>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <?php
                            $contandorempresa = 0;
                            ?>
                            @forelse ($empresa as $item)
                                <?php
                                $contandorempresa++;
                                ?>
                            @empty
                                <!--
                            <tr>
                                <div>
                                    <h1>No hay empresa</h1>
                                </div>
                            </tr>
                              -->
                            @endforelse
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $contandorempresa; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <strong>Empresas</strong>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Habilidades</h2>
                    <p>Muestra en porcentaje mis habilidades en tecnología donde personalemte a mi percepción y
                        opiniones de otras personas considero que estoy capacitado.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        @forelse ($tecnologia as $item)
                            <img src="{{ asset($item->imagen) }}" alt="" width="80px"
                                height="80px">
                        @empty
                            <div class="alert alert-primary" role="alert">
                                <h1>No hay habilidades registradas</h1>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>En mi resumen muestra una línea temporal de mi educaciópn y experiencia profesional hasta ahora.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">


                        <h3 class="resume-title">Educación</h3>
                        @forelse ($educacion as $item)
                            <div class="resume-item">
                                <h4>{{ $item->nombre }}</h4>
                                <h5>{{ $item->inicio }} - {{ $item->termino }}</h5>
                                <p><em>{{ $item->institucion }}</em></p>
                                <p>{{ $item->descripcion }}</p>
                            </div>
                        @empty
                            <div class="alert alert-primary" role="alert">
                                <h1>No hay educación registrada</h1>
                            </div>
                        @endforelse
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Experiencia Profesional</h3>
                        @forelse ($experiencia as $item)
                            <div class="resume-item">
                                <h4>{{ $item->nombre }}</h4>
                                <h5>{{ $item->inicio }} - {{ $item->termino }}</h5>
                                <p><em>{{ $item->lugar }}</em></p>
                                <p>{{ $item->descripcion }}</p>
                            </div>
                        @empty
                            <div class="alert alert-primary" role="alert">
                                <h1>No hay experiencia registrada</h1>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portafolio</h2>
                    <p>En mi portafolio muestra mis proyecto realizados con logotipo y nombre.</p>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @forelse ($proyecto as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset($item->imagen) }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset($item->imagen) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{ $item->nombre }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ $item->link }}" title="More Details" target="__blank"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-primary" role="alert">
                            <h1>No hay proyecto</h1>
                        </div>
                    @endforelse
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Servicios</h2>
                    <p>En está sección está en lista los servicos que entrego como analista en informática.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Portafolio de proyectos software</a></h4>
                        <p class="description">La codificación es el punto principal entre la interacción de un
                            software
                            con un usuario (persona),
                            por lo que tener respaldo de está misma es necesario para cualquier tipo de negocio.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class='bx bx-microchip'></i></div>
                        <h4 class="title"><a href="">Mantención</a></h4>
                        <p class="description">La mantención del software y hardware permite conservar, garantizar el
                            funcionamiento de este mismo para evitar fallos, esto es necesarios para reducir costos y
                            evitar problemas.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class='bx bx-support'></i></div>
                        <h4 class="title"><a href="">Soporte</a></h4>
                        <p class="description">El soporte técnico es garatizar al usuario el manejo del programa no
                            pueda ser comprendido, configuración , instalación, indicaciones, etc</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Investigación</a></h4>
                        <p class="description">La investigación es primordial al recopilar información nueva para la
                            mejoras y soluciones concretas para la necesidad del cliente.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class='bx bx-task'></i></div>
                        <h4 class="title"><a href=""></a>Automatización de procesos</h4>
                        <p class="description">Esto es necesario para la optimización de tareas o actividades mediante
                            un software, sustituye obejetos manuales por acciones automáticas esto facilita porcesos sin
                            mayor esfuerzo.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class='bx bx-vector'></i></div>
                        <h4 class="title"><a href="">Calidad de software</a></h4>
                        <p class="description">La calidad del software necesita mucho esfuerzo, para que cumpla con las
                            expectativas del usuario, tomando en cuenta las especificaciones, requisitos necesarios para
                            el desarrollo de cualquier sistema, debe ser adaptado a los requerimientos establecidos.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contacto</h2>
                    <p>En la última sección apreciará un formulario de contacto, si desea contactarse debe ingresar sus
                        datos y enviarme un mensaje para tener en cuenta su necesidad.</p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Correo:</h4>
                                <p>jose.calderon15@inacapmail.cl</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>+</p>
                            </div>

                            <!-- Puede ingresar un mapa de ubicación de trabajo con 250 alto y ancho del mapa  -->
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        @guest
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <div>
                                    Si desea enviar un mensaje al programador puede
                                    <a href="{{ route('register') }}">Registrarse</a> o <a
                                        href="{{ route('login') }}">Iniciar Sesión</a> en el sitio web, esto puede
                                    automatizar tiempo para atender su proyecto.
                                </div>
                            </div>
                        @else
                            <form action="{{ route('Contacto.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Nombre</label><br>
                                        {{ Auth::user()->name }}
                                        @error('nombre')
                                            <small>
                                                <strong>
                                                    <div class="alert alert-danger" role="alert">
                                                        Campo vacío
                                                    </div>
                                                </strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Correo</label><br>
                                        {{ Auth::user()->email }}
                                        @error('correo')
                                            <small>
                                                <strong>
                                                    <div class="alert alert-danger" role="alert">
                                                        Campo vacío
                                                    </div>
                                                </strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <br>
                                        <label for="name">Teléfono</label><br>
                                        {{ Auth::user()->fono }}
                                        @error('fono')
                                            <small>
                                                <strong>
                                                    <div class="alert alert-danger" role="alert">
                                                        Campo vacío
                                                    </div>
                                                </strong>
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="name">Asunto</label>
                                    <input type="text" class="form-control" name="asunto"
                                        placeholder="Ejemplo: Trabajo para un sitio web">
                                    @error('asunto')
                                        <small>
                                            <strong>
                                                <div class="alert alert-danger" role="alert">
                                                    Campo vacío
                                                </div>
                                            </strong>
                                        </small>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="name">Mensaje</label>
                                    <textarea class="form-control" name="mensaje" rows="10"
                                        placeholder="Ejemplo: Necesito un sitio web para un restaurant...."></textarea>
                                    @error('mensaje')
                                        <small>
                                            <strong>
                                                <div class="alert alert-danger" role="alert">
                                                    Campo vacío
                                                </div>
                                            </strong>
                                        </small>
                                    @enderror
                                </div>
                                <div class="my-3">

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                                </div>
                            </form>
                        @endguest
                        <!--End validate user -->

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/particles.json') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/lib/stats.js') }}"></script>
    <script>
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    </script>

</body>

</html>
