@extends('header.base-views')

@push('styles')
<link rel="stylesheet" href="{{ asset('cssbootstrap/bootstrap.css') }}">
@endpush

@section('title', 'Ficha Beneficiario')


@section('content')

<!-- Div para que el sidebar no moleste -->
<div class="content">
  <a href="{{ route('formularioBeneficiario') }}">Añadir beneficiario</a>
  <!-- Para buscar productos por texto -->
  <form method="POST">
    <input type="text" name="benBuscar" id="benBuscar" placeholder="Buscar...">
    <button type="submit">BUSCAR</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Fecha nacimiento</th>
        <th>Teléfono</th>
        <th>Cobertura médica</th>
        <th>¿Asiste al colegio?</th>
        <th>NEE</th>
        <th>Enfermedades crónicas</th>
        <th>¿Cirugias?</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Rut">9835803-k</td>
        <td data-label="Nombre">Juan Manzo</td>
        <td data-label="Fecha nacimiento">16/10/1663</td>
        <td data-label="Teléfono">981267512</td>
        <td data-label="Cobertura médica">Fonasa tramo b</td>
        <td data-label="¿Asiste al colegio?">No</td>
        <td data-label="NEE">Cáracter transitorio</td>
        <td data-label="Enfermedades crónicas">Diabetes tipo 2</td>
        <td data-label="¿Cirugias?">Sí</td>
        <td data-label="Acciones"><a href="{{ route('verBeneficiario') }}">Ver detalles</a></td>
      </tr>
      <tr>
        <td data-label="Rut">9835803-k</td>
        <td data-label="Nombre">Juan Manzo</td>
        <td data-label="Fecha nacimiento">16/10/1663</td>
        <td data-label="Teléfono">981267512</td>
        <td data-label="Cobertura médica">Fonasa tramo b</td>
        <td data-label="¿Asiste al colegio?">No</td>
        <td data-label="NEE">Cáracter transitorio</td>
        <td data-label="Enfermedades crónicas">Diabetes tipo 2</td>
        <td data-label="¿Cirugias?">Sí</td>
        <td data-label="Acciones"><a href="{{ route('verBeneficiario') }}">Ver detalles</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
