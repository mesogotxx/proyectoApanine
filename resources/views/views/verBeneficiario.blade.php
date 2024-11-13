@extends('header.base-views')

@section('title', 'Ficha Beneficiario')

@section('content')

<!-- Div para que el sidebar no moleste -->
<div class="content">
  <div class="cuadrado" id="datosBeneficiario">
    <h2>Juan Enrique Manzo Gárate</h2>
    <p><span class="letraNegrita">Rut: </span> 9835803-k</p>
    <p><span class="letraNegrita">Fecha de nacimiento: </span> 16/10/1663</p>
    <p><span class="letraNegrita">Teléfono 1: </span> 9 8126 7512</p>
    <p><span class="letraNegrita">Teléfono 2: </span> N/A</p>
    <p><span class="letraNegrita">Nacionalidad: </span> Chileno</p>
    <p><span class="letraNegrita">Previsión: </span> Fonasa tramo b</p>
    <p><span class="letraNegrita">Comuna: </span> Melipilla</p>
    <p><span class="letraNegrita">Domicilio: </span> Los prados 117</p>
    <p><span class="letraNegrita">Vive en casa: </span> Propia</p>
  </div>

  <div class="cuadrado" id="datosColegio">
    <h2>Datos del colegio</h2>
    <p><span class="letraNegrita">¿Asiste al colegio? </span> Sí</p>
    <p><span class="letraNegrita">Nombre: </span>Colegio Particular melipilla</p>
    <p><span class="letraNegrita">Teléfono: </span>9 7490 4931</p>
    <p><span class="letraNegrita">Curso: </span> 8° básico "C"</p>
    <p><span class="letraNegrita">Profesor(a) jefe: </span> Fabiola Jiménez</p>
  </div>

  <div class="cuadrado" id="datosFamiliaPadre">
    <h2>Padre</h2>
    <p><span class="letraNegrita">Nombre: </span> Juan Esteban Manzo Jorquera</p>
    <p><span class="letraNegrita">Rut: </span> 18487992-1</p>
    <p><span class="letraNegrita">Teléfono: </span>9 7186 4540</p>
    <p><span class="letraNegrita">Correo eletrónico: </span>juanmanzo93@gmail.com</p>
    <p><span class="letraNegrita">Situación laboral: </span> Trabajo estable</p>
    <p><span class="letraNegrita">¿Es cuidador(a)?: </span> Sí</p>
  </div>

  <div class="cuadrado" id="datosFamiliaMadre">
    <h2>Madre</h2>
    <p><span class="letraNegrita">Nombre: </span> Rosa Cecilia Jorquera Díaz</p>
    <p><span class="letraNegrita">Rut: </span> 18487992-1</p>
    <p><span class="letraNegrita">Teléfono: </span>9 7156 4000</p>
    <p><span class="letraNegrita">Correo eletrónico: </span>N/A</p>
    <p><span class="letraNegrita">Situación laboral: </span> Sin trabajo</p>
    <p><span class="letraNegrita">¿Es cuidador(a)?: </span> Sí</p>
  </div>

  <div class="cuadrado" id="datosFamiliaHermanos">
    <h2>Hermanos</h2>
    <p><span class="letraNegrita">Nombre: </span> Juan Pablo Manzo Jorquera</p>
  </div>

  <div class="cuadrado" id="antecedentesSalud">
    <h2>Antecedentes de salud</h2>
    <p><span class="letraNegrita">NEE: </span> Cáracter transitorio</p>
    <p><span class="letraNegrita">Enfermedades crónicas: </span> Diábetes tipo 2</p>
    <p><span class="letraNegrita">Tratamientos actuales: </span><br>Consumo de insulina para regular la glicemia.</p>
    <p><span class="letraNegrita">¿Ha tenido cirugías?: </span> No</p>
  </div>

  <div class="cuadrado" id="antecedentesSalud">
    <h2>Antecedentes de salud</h2>
    <p><span class="letraNegrita">NEE: </span> Cáracter transitorio</p>
    <p><span class="letraNegrita">Enfermedades crónicas: </span> Diábetes tipo 2</p>
    <p><span class="letraNegrita">Tratamientos actuales: </span><br>Consumo de insulina para regular la glicemia.</p>
    <p><span class="letraNegrita">¿Ha tenido cirugías?: </span> No</p>
  </div>

  <div class="cuadrado" id="antecedentesSociales">
    <h2>Antecedentes sociales</h2>
    <p><span class="letraNegrita">¿Cuenta con ficha familiar?: </span> Sí</p>
    <p><span class="letraNegrita">Puntaje: </span> 5to quintil</p>
    <p><span class="letraNegrita">Beneficios: </span><br>Subsidio familiar<br>Becas</p>
    <p><span class="letraNegrita">¿Cuenta con credencial de discapacidad?: </span> No</p>
  </div>
</div>
@endsection