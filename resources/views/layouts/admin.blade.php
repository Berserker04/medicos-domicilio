<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="/assets/css/pace.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/801e81d80f.js" crossorigin="anonymous"></script>

    <!--Theme Styles-->
    <link href="/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="/assets/css/light-theme.css" rel="stylesheet" />
    <link href="/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="/assets/css/header-colors.css" rel="stylesheet" />

    <title>Onedash - Bootstrap 5 Admin Template</title>
</head>

<body>

    {{-- {{ dd(Auth::user()) }} --}}

    <!--start wrapper-->
    <div class="wrapper">
        {{-- {{ dd(Auth::user()) }} --}}
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">

                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item search-toggle-icon">
                            <a class="nav-link" href="#">
                                <div class="">
                      <i class=" bi bi-search"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center">
                                    <img height="40" width="40 " style="border-radius: 100%"
                                        src="{{ $person->person->image == null ? '/assets/images/avatars/avatar-1.png' : '/uploads/' . $person->person->image }}">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $person->person->image == null ? '/assets/images/avatars/avatar-1.png' : '/uploads/' . $person->person->image }}"
                                                alt="" class="rounded-circle" width="54" height="54">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">
                                                    {{ $person->person->firstName }}
                                                </h6>
                                                <small
                                                    class="mb-0 dropdown-user-designation text-secondary">{{ $person->role->name }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-user-profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class=" bi bi-person-fill"></i></div>
                                            <div class="ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('client.home') }}">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class=" bi bi-speedometer"></i></div>
                                            <div class="ms-3"><span>Pagina principal</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                             document.getElementById('logout-form').submit();">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class=" bi bi-lock-fill"></i></div>
                                            <div class="ms-3"><span>Salir</span></div>
                                        </div>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="/images/logo.png" height="40"  alt="Webmania" class="logo-icon" />
                </div>
                <div>
                    <h4 class="logo-text">M domicilo</h4>
                </div>
                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <ul>
                        <li class="{{ str_contains(Request::path(), 'citas') ? 'mm-active' : '' }}">
                            <a href="{{ route('citas.index') }}">
                                <i class="bi bi-grid-fill"></i>
                                Citas
                            </a>
                        </li>
                        @if ($person->role->name == 'Admin')
                            <li class="{{ str_contains(Request::path(), 'doctores') ? 'mm-active' : '' }}">
                                <a href="{{ route('doctores.index') }}">
                                    <i class="bi bi-grid-fill"></i>
                                    Doctores
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            @yield('content')
        </main>
        <!--end page main-->

        <footer class="bg-white border-top p-3 text-center">
            <p class="mb-0">Copyright © 2021. Todos los derechos reservados.</p>
        </footer>

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->


    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="/assets/js/pace.min.js"></script>
    <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/table-datatable.js"></script>

    <script src="/assets/plugins/select2/js/select2.min.js"></script>
    <script src="/assets/js/form-select2.js"></script>

    <!--app-->
    <script src="/assets/js/app.js"></script>

</body>

</html>
