<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Cargar estilos globales -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    @stack('styles')
    {{-- <link rel="stylesheet" href="{{ asset('cssbootstrap/bootstrap.css') }}"> --}}
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
                        <span class="name">Apanine</span>
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
                                <a href="{{ route('fichabeneficiario') }}">
                                    <i class='bx bx-notepad icon'></i>
                                    <span class="text nav-text">Ficha Beneficiario</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="{{ route('asistencia') }}">
                                    <i class='bx bx-user-check icon'></i>
                                    <span class="text nav-text">Asistencia</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="{{ route('registroactividad') }}">
                                    <i class='bx bx-wallet icon'></i>
                                    <span class="text nav-text">Registro/actividad</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-pie-chart-alt icon' ></i>
                                    <span class="text nav-text"></span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-heart icon' ></i>
                                    <span class="text nav-text"></span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bell icon' ></i>
                                    <span class="text nav-text"></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li>
                            <a href="#">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Salir</span>
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
            @yield('content') <!-- Contenido dinámico de cada vista -->
        </main>
    </div>
    {{-- script para el dia y la noche, tambien actualizar el margen --}}
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

        // Función para actualizar el margen del contenido
        const updateContentMargin = () => {
            if (sidebar.classList.contains("close")) {
                document.querySelector('.content').style.marginLeft = '88px';
            } else {
                document.querySelector('.content').style.marginLeft = '250px';
            }
        };

        // Agregar el evento de clic para alternar el sidebar
        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            updateContentMargin(); // Actualizamos el margen del contenido cuando se hace clic
        });

        // Cuando el buscador se hace clic, se abre el sidebar
        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
            updateContentMargin();
        });

        // Cambio entre modo día y modo noche
        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Modo día";
            } else {
                modeText.innerText = "Modo noche";
            }
        });

        // Llamar a la función para asegurarse de que el margen esté correcto al cargar la página
        updateContentMargin();
    </script>

    <!-- Cargar archivos JS específicos si es necesario -->
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
