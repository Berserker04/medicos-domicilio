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
                            <li><a href="#features">Features</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#pricing-plans">Pricing Plans</a></li>
                            <li><a href="#blog">Latests Blogs</a></li>
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
                            tiempo en filas y son lentas la gestión, mediante Medicos Domicilio solo tarda 5 minutos en hacer tu cita.</p>
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
    <section class="section white padding-bottom-90" id="features">
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
    </section>
    <!-- ***** Features Small End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
                    <img src="/assetsClient/images/photos/features/navy-blue-1.png" class="img-fluid float-left"
                        alt="App">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <div class="left-heading">
                        <h2 class="section-title">Reservations Management</h2>
                    </div>
                    <div class="left-text">
                        <p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu
                            augue, molestie faucibus metus ullamcorper vel.</p>
                        <ul>
                            <li>Sed facilisis tempor dolor, ac mollis</li>
                            <li>Donec ac lectus in lacus.</li>
                            <li>Praesent mauris risus, condimentum ac placerat</li>
                            <li>Quisque cursus viverra justo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section white padding-bottom-100">
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Fast Reports</h2>
                    </div>
                    <div class="left-text">
                        <p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu
                            augue, molestie faucibus metus ullamcorper vel.</p>
                        <ul>
                            <li>Sed facilisis tempor dolor, ac mollis</li>
                            <li>Donec ac lectus in lacus.</li>
                            <li>Praesent mauris risus, condimentum ac placerat</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="/assetsClient/images/photos/features/navy-blue-2.png" class="img-fluid float-right"
                        alt="App">
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
                            <p>Here you'll find handy documentation about our APIs and SDKs. Choose below.</p>
                        </div>
                    </div>
                </div>

                <!-- ***** API & SDK Buttons Start ***** -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fa fa-code"></i>
                            <span>Web API</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fa fa-apple"></i>
                            <span>iOS SDK</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fa fa-android"></i>
                            <span>Android SDK</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 api-btn-content">
                        <a href="#" class="btn-api">
                            <i class="fa fa-file-text-o"></i>
                            <span>Documentation</span>
                        </a>
                    </div>
                </div>
                <!-- ***** API & SDK Buttons End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** API Parallax End ***** -->


    <!-- ***** Testimonials Start ***** -->
    <section class="section padding-bottom-80" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Testimonials</h2>
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

            <div class="row testimonials-wrapper">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testimonials-item">
                        <div class="user">
                            <img src="/assetsClient/images/photos/profile/1.jpg" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h3 class="user-name">Fletch Skinner</h3>
                            <span>Mellow Mountain Hotel</span>
                            <div class="txt">
                                <p>Nullam at venenatis dui. Suspendisse lectus lacus, ornare sed imperdiet eu, viverra
                                    vel neque. Duis nec nunc dolor. Cras non molestie sem, eu lacinia. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testimonials-item">
                        <div class="user">
                            <img src="/assetsClient/images/photos/profile/2.jpg" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h3 class="user-name">Will Barrow</h3>
                            <span>Tranquil Resort & Spa</span>
                            <div class="txt">
                                <p>Vestibulum eget imperdiet ex, posuere tempor lorem. Duis orci metus, placerat eget
                                    pharetra tempus, imperdiet vel massa. Vestibulum eget imperdiet ex.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testimonials-item">
                        <div class="user">
                            <img src="/assetsClient/images/photos/profile/3.jpg" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h3 class="user-name">Dominic L. Ement</h3>
                            <span>Sunrise Paradise Hotel</span>
                            <div class="txt">
                                <p>Pellentesque porta imperdiet porta. Integer aliquam ligula placerat placerat
                                    elementum. In euismod, neque in mattis gravida, nunc nunc euismod magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testimonials-item">
                        <div class="user">
                            <img src="/assetsClient/images/photos/profile/4.jpg" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h3 class="user-name">Gunther Bearder</h3>
                            <span>Jade Brook Resort</span>
                            <div class="txt">
                                <p>Proin fringilla molestie vulputate. Suspendisse vitae elit eget ipsum sagittis
                                    aliquet. Proin sagittis luctus mauris non sollicitudin. Donec dapibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testimonials-item">
                        <div class="user">
                            <img src="/assetsClient/images/photos/profile/5.jpg" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h3 class="user-name">Girth Wiedend</h3>
                            <span>Queen's Hotel & Spa</span>
                            <div class="txt">
                                <p>Aenean fringilla tellus nisl, placerat venenatis lectus feugiat id. Nam nisi sem,
                                    tristique vitae lectus sodales, ullamcorper gravida felis. Vestibulum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testimonials-item">
                        <div class="user">
                            <img src="/assetsClient/images/photos/profile/6.jpg" alt="">
                        </div>
                        <div class="testimonials-content">
                            <h3 class="user-name">Hanson Deck</h3>
                            <span>Sublime Quest Resort</span>
                            <div class="txt">
                                <p>Integer elementum cursus dui. Praesent dolor risus, elementum vitae arcu eu, cursus
                                    imperdiet justo. Pellentesque vel pellentesque orci. Morbi tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->


    <!-- ***** Pricing Plans Start ***** -->
    <section class="section white bg-center-left" id="pricing-plans">
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Pricing Plans</h2>
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
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-4 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">BASIC PLAN</h3>
                            <div class="number">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">13.90</span>
                                <span class="period">/Month</span>
                            </div>
                            <ul class="list">
                                <li class="active">Unlimited Reservations</li>
                                <li class="active">2 Clients and Products</li>
                                <li class="active">Invoicing and Payments</li>
                                <li class="active">Housekeeping Status</li>
                                <li>Data Security and Backups</li>
                                <li>Unlimited Staff Accounts</li>
                                <li>Web Booking Widget</li>
                                <li>Monthly Reports and Analytics</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="item-bg"></div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-4 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title">ADVANCED PLAN</h3>
                            <div class="number">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">23.90</span>
                                <span class="period">/Month</span>
                            </div>
                            <ul class="list">
                                <li class="active">Unlimited Reservations</li>
                                <li class="active">2 Clients and Products</li>
                                <li class="active">Invoicing and Payments</li>
                                <li class="active">Housekeeping Status</li>
                                <li class="active">Data Security and Backups</li>
                                <li class="active">Unlimited Staff Accounts</li>
                                <li>Web Booking Widget</li>
                                <li>Monthly Reports and Analytics</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="item-bg"></div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-4 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">EXPERT PLAN</h3>
                            <div class="number">
                                <span>3</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">33.90</span>
                                <span class="period">/Month</span>
                            </div>
                            <ul class="list">
                                <li class="active">Unlimited Reservations</li>
                                <li class="active">2 Clients and Products</li>
                                <li class="active">Invoicing and Payments</li>
                                <li class="active">Housekeeping Status</li>
                                <li class="active">Data Security and Backups</li>
                                <li class="active">Unlimited Staff Accounts</li>
                                <li class="active">Web Booking Widget</li>
                                <li class="active">Monthly Reports and Analytics</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="item-bg"></div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->


    <!-- ***** Counter Parallax Start ***** -->
    <section class="parallax-counter" data-image="/assetsClient/images/photos/parallax-counter.jpg">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>202</strong>
                            <span>Happy<br>Customer</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>765</strong>
                            <span>Reservation<br>Request</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>12</strong>
                            <span>Color<br>Template</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>186</strong>
                            <span>Staff<br>Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->


    <!-- ***** Blog Start ***** -->
    <section class="section white bg-center-left" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Blog</h2>
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
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="/assetsClient/images/photos/blog/1.jpg" alt="">
                        </div>
                        <h3>
                            <a href="navy-blue-blog-single.html">How to select the best channel manager for your
                                hotel?</a>
                        </h3>
                        <div class="text">
                            Mauris tellus sem, ultrices varius nisl at, convallis iaculis mauris. Sed eget sem vitae
                            purus tempus dignissim ante acet.
                        </div>
                        <a href="navy-blue-blog-single.html" class="btn-primary-line">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="/assetsClient/images/photos/blog/2.jpg" alt="">
                        </div>
                        <h3>
                            <a href="navy-blue-blog-single.html">Find out where you earn most money – Webmania
                                statistics</a>
                        </h3>
                        <div class="text">
                            Cras imperdiet faucibus sem, a dignissim urna feugiat sed. Interdum et malesuada fames ac
                            ante ipsum primis in faucibus.
                        </div>
                        <a href="navy-blue-blog-single.html" class="btn-primary-line">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="/assetsClient/images/photos/blog/3.jpg" alt="">
                        </div>
                        <h3>
                            <a href="navy-blue-blog-single.html">Earn more profits from Webmania than high seasons!</a>
                        </h3>
                        <div class="text">
                            Quisque euismod nec lacus sit amet maximus. Ut convallis sagittis lorem auctor malesuada.
                            Morbi auctor tortor eu risus condimentum.
                        </div>
                        <a href="navy-blue-blog-single.html" class="btn-primary-line">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="/assetsClient/images/logo-navy-blue.png" class="logo" alt="">
                    <div class="text">Morbi convallis bibendum urna ut viverra. Maecenas quis consequat
                        libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus
                        semper.</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">© 2021 Webmania. All Rights Reserved.</p>
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
