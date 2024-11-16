@extends('header.base-views')

@section('title', 'Asistencia') 

@section('content')
<div class="content">
    <div class="fila1">
        <h2>Vista de asistencias</h2>
        <h4>Revise las asistencias según actividades, o registre una nueva.</h4>
    </div>
    <hr>
    <div class="fila2">
        <a class="boton-primario" id="benAgregar" href="{{ route('registroactividad') }}">
            <p><i class='bx bx-bookmark-plus'></i> Agregar actividad</p>
        </a>
        <!-- Para buscar productos por texto -->
        <form method="POST">
            <input type="text" name="benBuscar" id="benBuscar" placeholder="Buscar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </div>
    <div class="cardSimple">
        <h3>Beneficiarios</h3>
        <h4>Revisar la asistencia de beneficiarios según tiempo o especialista.</h4>
        <div class="fila2" id="btnGroup">
            <a class="boton-cuartiario" id="benAgregar" href="{{ route('asistencia') }}">
                <p>Ver más</p>
            </a>
            <a class="boton-primario" id="benAgregar" href="{{ route('asistencia') }}">
                <p>Modificar</p>
            </a>
            <a class="boton-terciario" id="benEliminar" href="{{ route('asistencia') }}"><i
                    class='bx bx-trash'></i>
                Eliminar</a>
        </div>
    </div>
    <div class="fila2">
        <div class="cardSimple">
            <h3>Taller yoga</h3>
            <h4>Actividad enfocada a padres con el objetivo de relajarlos.</h4>
            <div class="fila2" id="btnGroup">
                <a class="boton-cuartiario" id="benAgregar" href="{{ route('asistencia') }}">
                    <p>Ver más</p>
                </a>
                <a class="boton-primario" id="benAgregar" href="{{ route('asistencia') }}">
                    <p>Modificar</p>
                </a>
                <a class="boton-terciario" id="benEliminar" href="{{ route('asistencia') }}"><i class='bx bx-trash'></i>
                    Eliminar</a>
            </div>
        </div>
    </div>
</div>
@endsection