@extends('header.base-views')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/fichabene.css') }}">
@endpush

@section('title', 'Ficha Beneficiario')


@section('content')

<div class="content">
  <h1 class="form-title">Ficha del Beneficiario 2024</h1>
  <form id="formulario" class="form-container">

      <!-- Paso 1: Identificación del Niño(a) -->
      <div class="step active">
          <h2>1. Identificación del Niño(a)</h2>
          <div class="form-grid">
              <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" name="nombre" required>
              </div>
              <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <input type="date" name="fecha_nacimiento" required>
              </div>
              <div class="form-group">
                  <label>RUT:</label>
                  <input type="text" name="rut" required>
              </div>
              <div class="form-group">
                  <label>Nacionalidad:</label>
                  <input type="text" name="nacionalidad" required>
              </div>
              <div class="form-group full-width">
                  <label>Quien deriva:</label>
                  <input type="text" name="quien_deriva">
              </div>
          </div>
          <div class="button-container">
              <button type="button" onclick="nextStep()">Siguiente</button>
          </div>
      </div>

      <!-- Paso 2: Identificación del Grupo Familiar -->
      <div class="step">
          <h2>2. Identificación del Grupo Familiar</h2>
          <div class="form-grid">
              <h3>Madre</h3>
              <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" name="nombre_madre" required>
              </div>
              <div class="form-group">
                  <label>RUT:</label>
                  <input type="text" name="rut_madre" required>
              </div>
              <div class="form-group">
                  <label>Teléfono:</label>
                  <input type="tel" name="telefono_madre">
              </div>
              <div class="form-group full-width">
                  <label>Correo Electrónico:</label>
                  <input type="email" name="email_madre">
              </div>

              <h3>Padre</h3>
              <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" name="nombre_padre" required>
              </div>
              <div class="form-group">
                  <label>RUT:</label>
                  <input type="text" name="rut_padre">
              </div>
              <div class="form-group full-width">
                  <label>Teléfono:</label>
                  <input type="tel" name="telefono_padre">
              </div>
          </div>
          <div class="button-container">
              <button type="button" onclick="previousStep()">Atrás</button>
              <button type="button" onclick="nextStep()">Siguiente</button>
          </div>
      </div>

      <!-- Paso 3: Antecedentes de Salud -->
      <div class="step">
          <h2>3. Antecedentes de Salud</h2>
          <div class="form-grid">
              <div class="form-group">
                  <label>NEE (Necesidades Educativas Especiales):</label>
                  <input type="text" name="nee">
              </div>
              <div class="form-group">
                  <label>Enfermedades Crónicas:</label>
                  <input type="text" name="enfermedades_cronicas">
              </div>
              <div class="form-group full-width">
                  <label>Cirugías:</label>
                  <label><input type="checkbox" name="cirugia" value="si"> Sí</label>
                  <label><input type="checkbox" name="cirugia" value="no"> No</label>
              </div>
          </div>
          <div class="button-container">
              <button type="button" onclick="previousStep()">Atrás</button>
              <button type="button" onclick="nextStep()">Siguiente</button>
          </div>
      </div>

      <!-- Paso 4: Antecedentes Sociales -->
      <div class="step">
          <h2>4. Antecedentes Sociales</h2>
          <div class="form-grid">
              <div class="form-group full-width">
                  <label>¿Cuenta con ficha familiar?:</label>
                  <label><input type="radio" name="ficha_familiar" value="SI" required> Sí</label>
                  <label><input type="radio" name="ficha_familiar" value="NO"> No</label>
              </div>
              <div class="form-group full-width">
                  <label>Beneficios Sociales:</label>
                  <select multiple name="beneficios">
                      <option>Subsidio Familiar</option>
                      <option>Pensiones</option>
                      <option>Becas</option>
                      <option>Chile Solidario</option>
                  </select>
              </div>
          </div>
          <div class="button-container">
              <button type="button" onclick="previousStep()">Atrás</button>
              <button type="submit">Enviar</button>
          </div>
      </div>
  </form>
</div>
@endsection
