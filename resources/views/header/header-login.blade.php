<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ======= CSS ======= -->
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
    
    <!-- ====== Boxicons CSS ====== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>@yield('title', 'Mi Sitio')</title> <!-- Título dinámico -->
</head>
<body>
    <div class="container">
        <!-- Aquí se incluirá el contenido de cada página -->
        @yield('content')
    </div>
</body>
</html>