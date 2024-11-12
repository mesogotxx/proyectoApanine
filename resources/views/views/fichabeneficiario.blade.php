@extends('header.base-views')

@push('styles')
<!-- <link rel="stylesheet" href="{{ asset('cssbootstrap/bootstrap.css') }}"> -->
@endpush

@section('title', 'Ficha Beneficiario')


@section('content')

    <div class="content">
        <h1>Ficha del Beneficiario 2024</h1>
        <form id="formulario">

            <!-- Paso 1: Identificación del Niño(a) -->
            <div class="step active">
                <h2>1. Identificación del Niño(a)</h2>
                <div class="form-grid">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" required>

                    <label>Fecha de Nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" required>

                    <label>RUT:</label>
                    <input type="text" name="rut" required>

                    <label>Nacionalidad:</label>
                    <input type="text" name="nacionalidad" required>

                    <label>Quien deriva:</label>
                    <input type="text" name="quien_deriva">
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
                    <label>Nombre:</label>
                    <input type="text" name="nombre_madre" required>

                    <label>RUT:</label>
                    <input type="text" name="rut_madre" required>

                    <label>Teléfono:</label>
                    <input type="tel" name="telefono_madre">

                    <label>Correo Electrónico:</label>
                    <input type="email" name="email_madre">

                    <h3>Padre</h3>
                    <label>Nombre:</label>
                    <input type="text" name="nombre_padre" required>

                    <label>RUT:</label>
                    <input type="text" name="rut_padre">

                    <label>Teléfono:</label>
                    <input type="tel" name="telefono_padre">
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
                    <label>NEE (Necesidades Educativas Especiales):</label>
                    <input type="text" name="nee">

                    <label>Enfermedades Crónicas:</label>
                    <input type="text" name="enfermedades_cronicas">

                    <label>Cirugías:</label>
                    <input type="checkbox" name="cirugia" value="si"> Sí
                    <input type="checkbox" name="cirugia" value="no"> No
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
                    <label>¿Cuenta con ficha familiar?:</label>
                    <input type="radio" name="ficha_familiar" value="SI" required> Sí
                    <input type="radio" name="ficha_familiar" value="NO"> No

                    <label>Beneficios Sociales:</label>
                    <select multiple name="beneficios">
                        <option>Subsidio Familiar</option>
                        <option>Pensiones</option>
                        <option>Becas</option>
                        <option>Chile Solidario</option>
                    </select>
                </div>
                <div class="button-container">
                    <button type="button" onclick="previousStep()">Atrás</button>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>

    </div>
@endsection
