<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webmania - Agency, Startup and SaaS template</title>
    <meta name="description" content="Webmania is a Agency, Startup and SaaS template by tempload." />
    <meta name="keywords" content="webmania, startup, saas, agency, development, html, template, tempload" />
    <meta name="author" content="tempload" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assetsClient/images/favicon/favicon.png" />

    <!-- Bootstrap & Plugins CSS -->
    <link href="/assetsClient/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assetsClient/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assetsClient/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="/assetsClient/css/navy-blue.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/801e81d80f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div class="preloader-wrapper">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="navy-blue-index.html" class="logo">
                            <img src="/images/logo.png" height="50" alt="Webmania" />
                        </a>
                        <!-- ***** Logo End ***** -->


                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome">Inicio</a></li>
                            <li><a href="#features">Beneficios</a></li>
                            {{-- <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#pricing-plans">Pricing Plans</a></li> --}}
                            <li><a href="#blog">Medicos</a></li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="navy-blue-about.html">About Us</a></li>
                                    <li><a href="navy-blue-features.html">Features</a></li>
                                    <li><a href="navy-blue-faq.html">FAQ's</a></li>
                                    <li><a href="navy-blue-blog.html">Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="navy-blue-contact.html">Contact</a></li> --}}
                            @if (Route::has('login'))
                                @auth

                                    <li><a href="{{ url('/citas') }}" class="btn-nav-line">Administración</a>
                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}" class="btn-nav-line"><span>Ingresar</span></a>
                                    </li>
                                    {{-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif --}}
                                @endauth
                            @endif

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Background Image Start ***** -->
        <div class="right-bg">
            <img src="images/header.jpeg" class="img-fluid float-right" alt="">
        </div>
        <!-- ***** Header Background Image End ***** -->

        <div class="header-bg">
            <img src="/assetsClient/images/header-bg.svg" class="img-fluid" alt="">
        </div>

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <h1>Sistema de gestión de citas a domicilio online</h1>
                        <p>A diferencia de los sistemas tradicionales de administración de citas, que requieren
                            tiempo en filas y son lentas la gestión, mediante Medicos Domicilio solo tarda 5 minutos en
                            hacer tu cita.</p>
                        {{-- <div class="email-box">
                            <div class="input">
                                <input type="email" placeholder="Enter your email">
                                <button>Get started</button>
                            </div>
                            <span>30-day FREE trial - no credit card needed</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->

        <!-- ***** Play Button Start ***** -->
        {{-- <div class="play-button-wrapper">
            <a href="https://www.youtube.com/watch?v=dPZTh2NKTm4" class="btn-play">
                <i class="fa fa-play"></i>
            </a>
        </div> --}}
        <!-- ***** Play Button End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Small Start ***** -->
    {{-- <section class="section white padding-bottom-90" >
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">4 ways Webmania helps your business succeed</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis
                            congue risus volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <a href="navy-blue-features-single.html" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <h5 class="features-title">Manage In One Place</h5>
                        <p>Morbilling pharetra sapiening ut mattis viverra. Curabitur magna.</p>
                        <div class="button">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->

                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <a href="navy-blue-features-single.html" class="features-small-item active">
                        <div class="icon">
                            <i class="fa fa-bed"></i>
                        </div>
                        <h5 class="features-title">Selling More Rooms</h5>
                        <p>Donec pellentesque turpis utium lorem imperdiet semper viverra.</p>
                        <div class="button">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->

                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <a href="navy-blue-features-single.html" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <h5 class="features-title">Know Your Numbers</h5>
                        <p>Facilisis arcu ligula, malesuada id tincidunt laoreet, facilisis at justo.</p>
                        <div class="button">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->

                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
                    <a href="navy-blue-features-single.html" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <h5 class="features-title">Fast & Secure Sales</h5>
                        <p>Proin arcu ligula, malesuada id tincidunt laoreet, facilisis at justo.</p>
                        <div class="button">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->
            </div>
        </div>
    </section> --}}
    <!-- ***** Features Small End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
                    <img src="/images/fila.jpg" class="img-fluid float-left" alt="App">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <div class="left-heading">
                        <h2 class="section-title">Largas filas en los centros de salud</h2>
                    </div>
                    <div class="left-text">
                        <p>Hacer filas para hacerse los examenes medicos es el día a día, donde en ocaciones toca
                            esperar horas de pie.</p>
                        <ul>
                            <li>Las filas se acabaran</li>
                            <li>El tiempo que inviertes yendo al centro de salud te lo puedes ahorrar</li>
                            <li>No te expones a ser contajiada de alguna enfermeda entra las tantas personas</li>
                            <li>No esperes en filas en las que al final pueda que no allán más fichos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">En la comodidad de tu casa</h2>
                    </div>
                    <div class="left-text">
                        <p>Estar bien en salud es también estar bien cómodamente, solo tienes que solicitar tu cita y se
                            te enviara un médico especializado a la comodidad de tu casa.</p>
                        <ul>
                            <li>Ahora tiempo en e invierte lo en cosas mejores que salir a tomar una cita</li>
                            <li>Siente comodo y disfruta de la buena atención especializada y sin prisa.</li>
                            <li>Resive tus resultados en poco tiempo</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="/images/casa.jpg" class="img-fluid float-left" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** API Parallax Start ***** -->
    <section class="parallax" data-image="/assetsClient/images/photos/parallax.jpg">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <div class="info">
                            <p>Estamos disponibles en diferentes ciudades.</p>
                        </div>
                    </div>
                </div>

                <!-- ***** API & SDK Buttons Start ***** -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Mdellín</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Bogotá</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Pereira</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Cali</span>
                        </a>
                    </div>
                </div>
                <!-- ***** API & SDK Buttons End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** API Parallax End ***** -->


    <!-- ***** Blog Start ***** -->
    <section class="section white bg-center-left" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Algunos médicos</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Tenemos a disposición una muchos medicos dispuesto a ayudarte con tus necesidades medicas.
                        </p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="/uploads/m1.jpg" alt="">
                        </div>
                        <h3>
                            <a href="navy-blue-blog-single.html">Adrian Hernandez</a>
                        </h3>
                        <div class="text">
                            Traumatólogo con difenres maestrias relacionadas al tema de la medina moderna.
                        </div>
                        {{-- <a href="navy-blue-blog-single.html" class="btn-primary-line">Read More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="/uploads/m2.jpg" alt="">
                        </div>
                        <h3>
                            <a href="navy-blue-blog-single.html">Luis Hinestroza</a>
                        </h3>
                        <div class="text">
                            Medico y docente de medicina en universidades, espicialista en cardiólogía.
                        </div>
                        {{-- <a href="navy-blue-blog-single.html" class="btn-primary-line">Read More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="/uploads/m3.jpg" alt="">
                        </div>
                        <h3>
                            <a href="navy-blue-blog-single.html">Brenda valde rama</a>
                        </h3>
                        <div class="text">
                            Especialista en ostalmologia, con años de experiencia en dicho campo.
                        </div>
                        {{-- <a href="navy-blue-blog-single.html" class="btn-primary-line">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->
    <section class="parallax-counter" data-image="/assetsClient/images/photos/parallax-counter.jpg">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>{{ $totalClient }}</strong>
                            <span>Total de<br>Clientes</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>{{ $totalDoctor }}</strong>
                            <span>Total de <br>Medicos</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>{{ $totalAppointmet }}</strong>
                            <span>Total de <br>Citas realizadas</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>{{ $totalProfessition }}</strong>
                            <span>Tipos de <br>Profesiones</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img height="100" src="/images/logo.png" class="logo" alt="">
                    <div class="text">Esta página esta creada con el propósito de brindar un servicio muy
                        importante como es la salud en nuestro país, con esta lo que queremos es que
                        las personas tengan la facilidad de pedir un servicio médico de forma virtual, para que así la
                        asistencia del personal médico que ellos deseen llegue hasta la puerta de sus casas.</div>
                </div>
                {{-- <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Helpful Links</h5>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>About Us</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Features</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>FAQ’s</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Features</h5>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Worldwide</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Scalable</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Modular</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Connectivity</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Corporate</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <h5>Contact Us</h5>
                    <div class="address">
                        <p>455 West Orchard Street<br>Kings Mountain, NC 28086</p>
                        <p>Phone: (272) 211-7370</p>
                        <p><span>E-Mail:</span><a href="#">support@yourbrand.com</a></p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">© 2021 Medico Online. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer End ***** -->



    <!-- jQuery -->
    <script src="/assetsClient/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assetsClient/js/popper.js"></script>
    <script src="/assetsClient/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/assetsClient/js/scrollreveal.min.js"></script>
    <script src="/assetsClient/js/parallax.min.js"></script>
    <script src="/assetsClient/js/waypoints.min.js"></script>
    <script src="/assetsClient/js/jquery.counterup.min.js"></script>
    <script src="/assetsClient/js/jquery.magnific-popup.min.js"></script>
    <script src="/assetsClient/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="/assetsClient/js/custom.js"></script>
</body>

</html>
