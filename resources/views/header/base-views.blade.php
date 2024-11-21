<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Cargar estilos globales -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!-- Cambiar fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    @stack('styles')
    <!-- {{-- <link rel="stylesheet" href="{{ asset('cssbootstrap/bootstrap.css') }}"> --}} -->
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="{{ asset('img/apanine_logo.png') }}" alt="Logo">
                    </span>
                    <div class="text logo-text">
                        <span class="name">Apaninnet</span>
                        <span class="profession">Mis secciones</span>
                    </div>
                    <i class='bx bx-chevron-right toggle'></i>
                </div>

                <div class="menu-bar">
                    <div class="menu">
                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Buscar...">
                        </li>
                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="{{ route('fichausuarios') }}">
                                    <i class='bx bx-user icon'></i>
                                    <span class="text nav-text">Usuarios</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="{{ route('fichabeneficiario') }}">
                                    <i class='bx bx-notepad icon'></i>
                                    <span class="text nav-text">Beneficiarios</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="{{ route('fichaespecialista') }}">
                                    <i class='bx bx-band-aid icon'></i>
                                    <span class="text nav-text">Especialistas</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="{{ route('asistencia') }}">
                                    <i class='bx bx-user-check icon'></i>
                                    <span class="text nav-text">Asistencias</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="bottom-content">
                        <li>
                            <a href="#">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Cerrar sesión</span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Modo noche</span>

                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>
                    </div>
                </div>
            </header>
        </nav>

        <!-- Contenido para ver las vistas-->
        <main>
            @yield('navbar') <!-- Contenido dinámico de cada vista -->
            @yield('content') <!-- Contenido dinámico de cada vista -->
        </main>
    </div>
    <!-- Cargar archivos JS específicos si es necesario -->
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>