@extends('header.header') <!-- Extiende de la plantilla base -->

@section('title', 'Mis Secciones') <!-- Define el título específico para esta página -->

@section('content')
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                  <img src="{{ asset('img/apanine_logo.png') }}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Apanine</span>
                    <span class="profession">Mis secciones</span>
                </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('fichabeneficiario') }}">
                            <i class='bx bx-notepad icon' ></i>
                            <span class="text nav-text">Ficha Beneficiario</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('asistencia') }}">
                            <i class='bx bx-user-check icon' ></i>
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
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
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

    </nav>

    <!-- Contenido dinámico de cada página -->
    <main>
      @yield('content')
    </main>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo dia";
    }else{
        modeText.innerText = "Modo noche";
        
    }
});
    </script>


@endsection