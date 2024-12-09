@extends('header.base-views')

@section('title', 'Ficha Beneficiario')

@section('content')

<style>

/* General Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.content {
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Input Fields */
input[type="text"],
input[type="number"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

input:focus,
select:focus,
textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

/* Labels */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 14px;
    color: #333;
}

/* Textarea */
textarea {
    resize: vertical;
}

/* Buttons */
button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

button[type="submit"] {
    background-color: #007bff;
    color: white;
}

button[type="reset"] {
    background-color: #6c757d;
    color: white;
}

button:hover {
    opacity: 0.9;
}

/* Tabs Styling */
.nav-tabs {
    border-bottom: 2px solid #007bff;
    margin-bottom: 20px;
}

.nav-tabs .nav-link {
    color: #007bff;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 15px;
    border: 1px solid transparent;
    border-radius: 5px 5px 0 0;
    background-color: #f1f1f1;
    transition: all 0.3s ease-in-out;
}

.nav-tabs .nav-link:hover {
    background-color: #e9ecef;
    border-color: #ddd;
}

.nav-tabs .nav-link.active {
    color: white;
    background-color: #007bff;
    border-color: #007bff #007bff #f9f9f9;
}

/* Tab Content */
.tab-content {
    padding: 20px;
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Layout Styling */
.layoutTelefono,
.layoutNombre,
.layoutDomicilio {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.layoutTelefono div,
.layoutNombre div,
.layoutDomicilio div {
    flex: 1;
}

/* Tables (if any) */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table th,
table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

table th {
    background-color: #007bff;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}


 </style>

<div class="content">
    <br>

    <!-- Botón para volver a la ficha principal -->
    <a href="{{ route('fichabeneficiario') }}">VOLVER</a>

    <!-- Título del formulario -->
    <h1>Registrar beneficiario</h1>

    <!-- Navegación de pestañas -->
    <ul class="nav nav-tabs" id="formTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="datos-beneficiario-tab" data-bs-toggle="tab" data-bs-target="#datos-beneficiario" type="button" role="tab" aria-controls="datos-beneficiario" aria-selected="true">Datos Beneficiario</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="datos-colegio-tab" data-bs-toggle="tab" data-bs-target="#datos-colegio" type="button" role="tab" aria-controls="datos-colegio" aria-selected="false">Datos Colegio</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="datos-derivante-tab" data-bs-toggle="tab" data-bs-target="#datos-derivante" type="button" role="tab" aria-controls="datos-derivante" aria-selected="false">Datos Derivante</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="datos-familia-tab" data-bs-toggle="tab" data-bs-target="#datos-familia" type="button" role="tab" aria-controls="datos-familia" aria-selected="false">Datos Familia</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="antecedentes-salud-tab" data-bs-toggle="tab" data-bs-target="#antecedentes-salud" type="button" role="tab" aria-controls="antecedentes-salud" aria-selected="false">Antecedentes Salud</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="antecedentes-sociales-tab" data-bs-toggle="tab" data-bs-target="#antecedentes-sociales" type="button" role="tab" aria-controls="antecedentes-sociales" aria-selected="false">Antecedentes Sociales</button>
        </li>
    </ul>

    <!-- Contenido de pestañas -->
    <div class="tab-content" id="formTabsContent">
        <!-- Pestaña: Datos Beneficiario -->
        <div class="tab-pane fade show active" id="datos-beneficiario" role="tabpanel" aria-labelledby="datos-beneficiario-tab">
            <h3>Datos Beneficiario</h3>
            <section class="layoutTelefono">
                <div>
                    <label for="benRut">Rut:</label>
                    <input type="number" name="benRut" id="benRut">
                </div>
                <div>
                    <label for="benDv">Dv:</label>
                    <input type="text" name="benDv" id="benDv">
                </div>
            </section>
            <div class="layoutNombre">
                <div>
                    <label for="benPNombre">Primer Nombre:</label>
                    <input type="text" name="benPNombre" id="benPNombre">
                </div>
                <div>
                    <label for="benSNombre">Segundo Nombre:</label>
                    <input type="text" name="benSNombre" id="benSNombre">
                </div>
                <div>
                    <label for="benApPaterno">Apellido Paterno:</label>
                    <input type="text" name="benApPaterno" id="benApPaterno">
                </div>
                <div>
                    <label for="benApMaterno">Apellido Materno:</label>
                    <input type="text" name="benApMaterno" id="benApMaterno">
                </div>
            </div>
            <label for="benFecNac">Fecha de nacimiento:</label>
            <input type="date" name="benFecNac" id="benFecNac">
            <div class="layoutTelefono">
                <div>
                    <label for="benTel1">Teléfono 1:</label>
                    <input type="number" name="benTel1" id="benTel1">
                </div>
                <div>
                    <label for="benTel2">Teléfono 2:</label>
                    <input type="number" name="benTel2" id="benTel2">
                </div>
            </div>
            <label for="benCobMed">Cobertura médica:</label>
            <select name="benCobMed" id="benCobMed">
                <option value="Isapre">Isapre</option>
                <option value="Fonasa Tramo A">Fonasa Tramo A</option>
                <option value="Fonasa Tramo B">Fonasa Tramo B</option>
            </select>
            <label for="benNac">Nacionalidad:</label>
            <select name="benNac" id="benNac">
                <option value="Chileno">Chileno</option>
                <option value="Argentino">Argentino</option>
                <option value="Peruano">Peruano</option>
            </select>
            <div class="layoutDomicilio">
                <div>
                    <label for="benDom">Domicilio:</label>
                    <textarea name="benDom" id="benDom"></textarea>
                </div>
                <div>
                    <label for="benComuna">Comuna:</label>
                    <select name="benComuna" id="benComuna">
                        <option value="Santiago">Santiago</option>
                        <option value="Cerrillos">Cerrillos</option>
                    </select>
                </div>
                <div>
                    <label for="benTipViv">La familia vive en casa:</label>
                    <select name="benTipViv" id="benTipViv">
                        <option value="Propia">Propia</option>
                        <option value="Propia con deuda">Propia con deuda</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Pestaña: Datos Colegio -->
        <div class="tab-pane fade" id="datos-colegio" role="tabpanel" aria-labelledby="datos-colegio-tab">
            <h3>Datos Colegio</h3>
            <fieldset>
                <legend>¿Asiste al colegio?</legend>
                <input type="radio" id="benAsisColSi" name="benAsisCol" value="Sí">
                <label for="benAsisColSi">Sí</label>
                <input type="radio" id="benAsisColNo" name="benAsisCol" value="No">
                <label for="benAsisColNo">No</label>
            </fieldset>
            <div>
                <label for="colNom">Nombre Establecimiento:</label>
                <input type="text" name="colNom" id="colNom">
            </div>
            <div>
                <label for="colTel">Teléfono Establecimiento:</label>
                <input type="number" name="colTel" id="colTel">
            </div>
            <div>
                <label for="benCurso">Curso:</label>
                <input type="text" name="benCurso" id="benCurso">
            </div>
            <div>
                <label for="colProfJefe">Profesor(a) Jefe:</label>
                <input type="text" name="colProfJefe" id="colProfJefe">
            </div>
        </div>

        <!-- Pestaña: Datos Derivante -->
        <div class="tab-pane fade" id="datos-derivante" role="tabpanel" aria-labelledby="datos-derivante-tab">
            <h3>Datos Derivante</h3>

        <label for="devNombre">Quien deriva:</label>
        <input type="text" name="devNombre" id="devNombre">

        <label for="devObservaciones">Observaciones derivación:</label>
        <textarea name="devObservaciones" id="devObservaciones"></textarea>
        </div>


         <!-- Pestaña: Datos Familia -->
         <div class="tab-pane fade" id="datos-familia" role="tabpanel" aria-labelledby="datos-familia-tab">
            <h3>Datos Familia</h3>

        <!-- Tipo Familiar -->
        <label for="famTipo">Familiaridad:</label>
        <select name="famTipo" id="famTipo">
            <option value="Padre">Padre</option>
            <option value="Madre">Madre</option>
            <option value="Hermano(a)">Hermano(a)</option>
        </select>

        <!-- Rut familiar -->
        <div id="famRutCompleto">
            <label for="famRut">Rut:</label>
            <input type="number" name="famRut" id="famRut"> - <input type="text" name="famDv" id="famDv">
        </div>

        <!-- Nombre familiar -->
        <div class="layoutNombre">
            <div>
                <label for="famPNombre">Primer Nombre:</label>
                <input type="text" name="famPNombre" id="famPNombre">
            </div>
            <div>
                <label for="famSNombre">Segundo Nombre:</label>
                <input type="text" name="famSNombre" id="famSNombre">
            </div>
            <div>
                <label for="famApPaterno">Apellido Paterno:</label>
                <input type="text" name="famApPaterno" id="famApPaterno">
            </div>
            <div>
                <label for="famApMaterno">Apellido Materno:</label>
                <input type="text" name="famApMaterno" id="famApMaterno">
            </div>
        </div>

        <label for="famTel">Teléfono:</label>
        <input type="number" name="famTel" id="famTel">

        <label for="famEmail">Correo electrónico:</label>
        <input type="email" name="famEmail" id="famEmail">

        <!-- Cuidador o no -->
        <fieldset>
            <legend>¿Es cuidador(a)?</legend>

            <input type="radio" id="famCuidadorSi" name="famCuidador" value="Sí">
            <label for="famCuidadorSi">Sí</label>

            <input type="radio" id="famCuidadorNo" name="famCuidador" value="No">
            <label for="famCuidadorNo">No</label>
        </fieldset>

        <!-- Situación Laboral -->
        <label for="famSitLab">Situación laboral:</label>
        <select name="famSitLab" id="famSitLab">
            <option value="Trabajo Estable">Trabajo Estable</option>
            <option value="Trabajo Ocasional">Trabajo Ocasional</option>
            <option value="Sin trabajo">Sin trabajo</option>
            <option value="Pensionado">Pensionado</option>
        </select>
        </div>


         <!-- Pestaña: Antecedentes Salud -->
         <div class="tab-pane fade" id="antecedentes-salud" role="tabpanel" aria-labelledby="antecedentes-salud-tab">
            <h3>Antecedentes salud</h3>

        <!-- Necesidades educativas especiales -->
        <label for="benNee">NEE:</label>
        <textarea name="benNee" id="benNee" rows="4" cols="50"></textarea>

        <!-- Enfermadades crónicas -->
        <label for="benEnfCro">Enfermedades crónicas:</label>
        <textarea name="benEnfCro" id="benEnfCro" rows="4" cols="50"></textarea>

        <!-- Tratamientos -->
        <label for="benTratamientos">Tratamientos actuales:</label>
        <textarea name="benTratamientos" id="benTratamientos" rows="4" cols="50"></textarea>

        <!-- ¿Tuvo cirugías? -->
        <fieldset>
            <legend>¿Cirugías?</legend>

            <input type="radio" id="benCirugiaSi" name="benCirugia" value="Sí">
            <label for="benCirugiaSi">Sí</label>

            <input type="radio" id="benCirugiaNo" name="benCirugia" value="No">
            <label for="benCirugiaNo">No</label>

        </fieldset>

        <!-- Descripción cirugías -->
        <label for="benCirugiaNom">¿Cuales?</label>
        <textarea name="benCirugiaNom" id="benCirugiaNom" rows="4" cols="50"></textarea>

        </div>

         <!-- Pestaña: Antecedentes Sociales -->
         <div class="tab-pane fade" id="antecedentes-sociales" role="tabpanel" aria-labelledby="antecedentes-sociales-tab">
            <h3>Antecedentes sociales</h3>

        <!-- ¿Cuenta con ficha familiar? -->
        <fieldset>
            <legend>¿Cuenta con ficha familiar?</legend>

            <input type="radio" id="benFicFamSi" name="benFicFam" value="Sí">
            <label for="benFicFamSi">Sí</label>

            <input type="radio" id="benFicFamNo" name="benFicFam" value="No">
            <label for="benFicFamNo">No</label>

        </fieldset>

        <!-- Puntaje ficha familiar -->
        <label for="benFicFamPtje">Puntaje:</label>
        <input type="number" name="benFicFamPtje" id="benFicFamPtje">

        <!-- Beneficios sociales -->
        <fieldset>
            <legend>Beneficios sociales:</legend>

            <input type="checkbox" id="benBenSoc1" name="benBenSoc1" value="Subsidio familiar">
            <label for="vehicle1"> Subsidio familiar</label><br>
            <input type="checkbox" id="benBenSoc2" name="benBenSoc2" value="Pensiones">
            <label for="vehicle2"> Pensiones</label><br>
            <input type="checkbox" id="benBenSoc3" name="benBenSoc3" value="Becas">
            <label for="vehicle3"> Becas</label><br>
            <input type="checkbox" id="benBenSoc4" name="benBenSoc4" value="Chile solidario">
            <label for="vehicle3"> Chile solidario</label><br>
            <input type="checkbox" id="benBenSoc5" name="benBenSoc5" value="Programa puente">
            <label for="vehicle3"> Programa puente</label><br>
            <input type="checkbox" id="benBenSoc6" name="benBenSoc6" value="Subsidio ético familiar">
            <label for="vehicle3"> Subsidio ético familiar</label><br>
        </fieldset>

        <!-- Anotar beneficio social extra -->
        <label for="benBenSocOtro">Otro:</label>
        <input type="text" name="benBenSocOtro" id="benBenSocOtro">

        <!-- ¿Cuenta con credencial de discapacidad? -->
        <fieldset>
            <legend>¿Cuenta con credencial de discapacidad?</legend>

            <input type="radio" id="benCredDiscSi" name="benCredDisc" value="Sí">
            <label for="benCredDiscSi">Sí</label>

            <input type="radio" id="benCredDiscNo" name="benCredDisc" value="No">
            <label for="benCredDiscNo">No</label>
        </fieldset>
        </div>


    </div>

    <!-- Botones del formulario -->
    <div id="botonGroup" style="margin-top: 20px;">
        <button type="submit">AÑADIR</button>
        <button type="reset">CANCELAR</button>
    </div>
</div>
@endsection
