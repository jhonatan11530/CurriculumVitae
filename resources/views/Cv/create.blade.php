@extends('Layout/PLantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Modulo Creacion Hoja de Vida</h2>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        {!! Form::open(['url' => 'CurriculumVitae', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nombre Completo</label><span style="color: red">*</span>
                                {!! Form::text('Nombre', 'Jhonatan fernandez muñoz', ['class' => 'form-control', 'readonly']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Identificacion</label><span style="color: red">*</span>
                                {!! Form::number('Identificador', '', ['class' => 'form-control','min'=>0, 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Adjuntar Foto</label><span style="color: red">*</span>
                                {!! Form::file('Foto', ['class' => 'form-control', 'accept' => 'image/png, image/gif, image/jpeg', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Fecha de Nacimiento</label><span style="color: red">*</span>
                                {!! Form::date('DateNacimiento', '', ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Cargo Asipirante</label><span style="color: red">*</span>
                                <select name="Cargo" class="form-control js-multiple" required>
                                    <option value="" disabled>Seleccione el Cargo</option>
                                    @foreach ($Cargos as $program)
                                        <option value="{{ $program->nombre }}">{{ $program->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Pais</label><span style="color: red">*</span>
                                <select name="Pais" class="form-control" id="country" required>
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Departamento</label><span style="color: red">*</span>
                                <select name="Departamento" class="form-control" id="estado" required>
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Ciudad</label><span style="color: red">*</span>
                                <select name="Ciudad" class="form-control" id="ciudad" required>
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">DATOS DE CONTACTO</h2>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Telefono Celular</label><span style="color: red">*</span>
                                {!! Form::number('Celular', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Correo electronico</label><span style="color: red">*</span>
                                {!! Form::email('Correo', '', ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-12">
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">HABILIDADES O LENGUAJES</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Habilidades</label><span style="color: red">*</span>
                                <select name="Habilidades[]" id="Habilidades" class="form-control js-multiple" multiple
                                    required>
                                    <option value="" disabled>Seleccione el lenguaje de programacion</option>
                                </select>
                            </div>
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">BASE DE DATOS</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Base de datos</label><span style="color: red">*</span>
                                <select name="Database[]" class="form-control js-multiple" multiple required>
                                    <option value="" disabled>Seleccione el lenguaje de programacion</option>
                                    @foreach ($Databases as $database)
                                        <option value="{{ $database->nombre }}">{{ $database->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">INFORMACION PROFESIONAL</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Perfil Profesional</label><span style="color: red">*</span>
                                {!! Form::textarea('PerfilProfesional', '', ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">REFERENCIAS PERSONALES</h2>
                                <a class="btn btn-primary text-white" onclick="Family()">Añadir Referencia</a>
                            </div>
                            <div class="col-sm-12">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">REFERENCIAS FAMILIARES #1</h2>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('NombreReferenciaFamily[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre del Cargo Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('CargoReferenciaFamily[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Telefono Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::number('TelReferenciaFamily[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Pais</label><span style="color: red">*</span>
                                                <select name="PaisReferenciaFamily[]" class="form-control"
                                                    id="ReferenceFamilyCountry1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Departamento</label><span
                                                    style="color: red">*</span>
                                                <select name="DepartamentoReferenciaFamily[]" class="form-control"
                                                    id="ReferenceFamilyEstado1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                                <select name="CiudadReferenciaFamily[]" class="form-control"
                                                    id="ReferenceFamilyCiudad1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Family"></div>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">REFERENCIAS PERSONALES</h2>
                                <a class="btn btn-primary text-white" onclick="Person()">Añadir Referencia</a>
                            </div>
                            <div class="col-sm-12">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">REFERENCIAS #1</h2>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('NombreReferenciaPersonal[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre del Cargo Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('CargoReferenciaPersonal[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Telefono Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::number('TelReferenciaPersonal[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Pais</label><span style="color: red">*</span>
                                                <select name="PaisReferenciaPersonal[]" class="form-control"
                                                    id="ReferencePersonCountry1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Departamento</label><span
                                                    style="color: red">*</span>
                                                <select name="DepartamentoReferenciaPersonal[]" class="form-control"
                                                    id="ReferencePersonEstado1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                                <select name="CiudadReferenciaPersonal[]" class="form-control"
                                                    id="ReferencePersonCiudad1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Person"></div>
                            </div>
                        </div>
                        <!--- --->
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">EXPERIENCIA LABORAL</h2>
                                <a class="btn btn-primary text-white" onclick="jobs()">Añadir Experiencia</a>
                            </div>
                            <div class="col-sm-12">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">EXPERIENCIA #1</h2>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">nombre empresa</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('NombreReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">fecha ingreso</label><span
                                                    style="color: red">*</span>
                                                {!! Form::date('FechaEntradaReferenciaLaboral[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">fecha salida</label><span
                                                    style="color: red">*</span>
                                                {!! Form::date('FechaSalidaReferenciaLaboral[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">cargo en la empresa</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('CargoReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-3 form-group">
                                                <label class="text-white">Pais</label><span style="color: red">*</span>
                                                <select name="PaisReferenciaLaboral[]" class="form-control"
                                                    id="ReferenceJobsCountry1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 form-group">
                                                <label class="text-white">Departamento</label><span
                                                    style="color: red">*</span>
                                                <select name="DepartamentoReferenciaLaboral[]" class="form-control"
                                                    id="ReferenceJobsEstado1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                                <select name="CiudadReferenciaLaboral[]" class="form-control"
                                                    id="ReferenceJobsCiudad1" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Funciones</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('FuncionesReferenciaLaboral[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Habilidades Usadas</label><span
                                                    style="color: red">*</span>
                                                <select name="HabilidadesReferenciaLaboral[]" id="HabilidadesUsing"
                                                    class="form-control js-multiple" multiple required>
                                                    <option value="" disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Jobs"></div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">IDIOMAS QUE MANEJA</h2>
                                <a class="btn btn-primary text-white" onclick="Languaje()">Añadir Idiomas</a>
                            </div>
                            <div class="col-sm-12">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">IDIOMAS #1</h2>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Idioma</label>
                                                <select name="Idioma[]" id="Idioma" class="form-control">
                                                    <option value="" selected disabled>Seleccione Idioma</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Nivel Idioma</label>
                                                <select name="Idioma[]" class="form-control">
                                                    <option value="" selected disabled>Seleccione Idioma</option>
                                                    <option value="Nativo">Nativo</option>
                                                    <option value="Basico">Basico</option>
                                                    <option value="Intermedio">Intermedio</option>
                                                    <option value="Avanzado">Avanzado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Languajes"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        <a href="{{ route('CurriculumVitae.index') }}" class="btn btn-danger">Volver
                            atraz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            InicializeAjax();

            $('.js-multiple').select2();

            var ReferenceFamily = 1;
            var ReferencePerson = 1;
            var LanguajeInt = 1;
            var Jobs = 1;
            /*
                        var EducationInt = 1;
                        var EducationComInt = 1;
            */
            // se ejecuta un Ajax que trae los paises mediante AJAX
            function InicializeAjax() {
                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#country').append($('<option>', {
                                value: result,
                                text: result
                            }));
                            $('#ReferenceFamilyCountry' + ReferenceFamily).append($('<option>', {
                                value: result,
                                text: result
                            }));
                            $('#ReferencePersonCountry' + ReferencePerson).append($('<option>', {
                                value: result,
                                text: result
                            }));
                            $('#ReferenceJobsCountry' + Jobs).append($('<option>', {
                                value: result,
                                text: result
                            }));

                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $.ajax({
                    type: "get",
                    url: "/api/lenguaje",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#Habilidades').append($('<option>', {
                                value: result['nombre'],
                                text: result['nombre']
                            }));
                            $('#HabilidadesUsing').append($('<option>', {
                                value: result['nombre'],
                                text: result['nombre']
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $.ajax({
                    type: "get",
                    url: "/api/idioma",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#Idioma').append($('<option>', {
                                value: result['nombre'],
                                text: result['nombre']
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $('#country').change(function(e) {
                    e.preventDefault();
                    $('#estado').empty();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#estado').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

                $('#estado').change(function(e) {
                    e.preventDefault();
                    $('#ciudad').empty();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ciudad').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

            }

            function Family() {
                ReferenceFamily++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">REFERENCIAS FAMILIARES #${ReferenceFamily}</h2>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('NombreReferenciaFamily[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre del Cargo Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('CargoReferenciaFamily[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Telefono Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::number('TelReferenciaFamily[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Pais</label><span style="color: red">*</span>
                                                <select name="PaisReferenciaFamily[]" class="form-control" id="ReferenceFamilyCountry${ReferenceFamily}"
                                                    required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Departamento</label><span
                                                    style="color: red">*</span>
                                                <select name="DepartamentoReferenciaFamily[]" class="form-control" id="ReferenceFamilyEstado${ReferenceFamily}"
                                                    required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                                <select name="CiudadReferenciaFamily[]" class="form-control" id="ReferenceFamilyCiudad${ReferenceFamily}"
                                                    required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                $('#Family').append(html);

                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferenceFamilyCountry' + ReferenceFamily).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $('#ReferenceFamilyCountry' + ReferenceFamily).change(function(e) {
                    e.preventDefault();
                    $('#ReferenceFamilyEstado' + ReferenceFamily).empty();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ReferenceFamilyEstado' + ReferenceFamily).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

                $('#ReferenceFamilyEstado' + ReferenceFamily).change(function(e) {
                    e.preventDefault();
                    $('#ReferenceFamilyCiudad' + ReferenceFamily).empty();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ReferenceFamilyCiudad' + ReferenceFamily).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

            }

            $('#ReferenceFamilyCountry' + ReferenceFamily).change(function(e) {
                e.preventDefault();
                $('#ReferenceFamilyEstado' + ReferenceFamily).empty();
                $.ajax({
                    type: "get",
                    url: "/api/estado/" + $(this).val(),
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferenceFamilyEstado' + ReferenceFamily).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });

                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            });

            $('#ReferenceFamilyEstado' + ReferenceFamily).change(function(e) {
                e.preventDefault();
                $('#ReferenceFamilyCiudad' + ReferenceFamily).empty();
                $.ajax({
                    type: "get",
                    url: "/api/ciudad/" + $(this).val(),
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferenceFamilyCiudad' + ReferenceFamily).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            });

            function Person() {
                ReferencePerson++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">REFERENCIAS #${ReferencePerson}</h2>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('ReferenciaPersonal[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Nombre del Cargo Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('ReferenciaPersonal[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Telefono Referencia</label><span
                                                    style="color: red">*</span>
                                                {!! Form::number('ReferenciaPersonal[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Pais</label><span style="color: red">*</span>
                                                <select name="ReferenciaPersonal[]" class="form-control"
                                                    id="ReferencePersonCountry${ReferencePerson}" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Departamento</label><span
                                                    style="color: red">*</span>
                                                <select name="ReferenciaPersonal[]" class="form-control"
                                                    id="ReferencePersonEstado${ReferencePerson}" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                                <select name="ReferenciaPersonal[]" class="form-control"
                                                    id="ReferencePersonCiudad${ReferencePerson}" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#Person').append(html);

                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferencePersonCountry' + ReferencePerson).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $('#ReferencePersonCountry' + ReferencePerson).change(function(e) {
                    e.preventDefault();
                    $('#ReferencePersonEstado' + ReferencePerson).empty();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ReferencePersonEstado' + ReferencePerson).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

                $('#ReferencePersonEstado' + ReferencePerson).change(function(e) {
                    e.preventDefault();
                    $('#ReferencePersonCiudad' + ReferencePerson).empty();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ReferencePersonCiudad' + ReferencePerson).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

            }

            $('#ReferencePersonCountry' + ReferencePerson).change(function(e) {
                e.preventDefault();
                $('#ReferencePersonEstado' + ReferencePerson).empty();
                $.ajax({
                    type: "get",
                    url: "/api/estado/" + $(this).val(),
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferencePersonEstado' + ReferencePerson).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });

                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            });

            $('#ReferencePersonEstado' + ReferencePerson).change(function(e) {
                e.preventDefault();
                $('#ReferencePersonCiudad' + ReferencePerson).empty();
                $.ajax({
                    type: "get",
                    url: "/api/ciudad/" + $(this).val(),
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferencePersonCiudad' + ReferencePerson).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            });

            function jobs() {
                Jobs++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">EXPERIENCIA #${Jobs}</h2>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">nombre empresa</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('NombreReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">fecha ingreso</label><span
                                                    style="color: red">*</span>
                                                {!! Form::date('FechaEntradaReferenciaLaboral[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">fecha salida</label><span
                                                    style="color: red">*</span>
                                                {!! Form::date('FechaSalidaReferenciaLaboral[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label class="text-white">cargo en la empresa</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('CargoReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0', 'required']) !!}
                                            </div>
                                            <div class="col-sm-3 form-group">
                                                <label class="text-white">Pais</label><span style="color: red">*</span>
                                                <select name="PaisReferenciaLaboral[]" class="form-control"
                                                    id="ReferenceJobsCountry${Jobs}" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 form-group">
                                                <label class="text-white">Departamento</label><span
                                                    style="color: red">*</span>
                                                <select name="DepartamentoReferenciaLaboral[]" class="form-control"
                                                    id="ReferenceJobsEstado${Jobs}" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                                <select name="CiudadReferenciaLaboral[]" class="form-control"
                                                    id="ReferenceJobsCiudad${Jobs}" required>
                                                    <option value="" selected disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Funciones</label><span
                                                    style="color: red">*</span>
                                                {!! Form::text('FuncionesReferenciaLaboral[]', '', ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Habilidades Usadas</label><span
                                                    style="color: red">*</span>
                                                <select name="HabilidadesReferenciaLaboral[]" id="HabilidadesUsing${Jobs}"
                                                    class="form-control js-multiple" multiple required>
                                                    <option value="" disabled>Seleccione el cargo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                $('#Jobs').append(html);

                setTimeout(function() {
                    $('.js-multiple').select2();
                }, 100);

                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferenceJobsCountry' + Jobs).append($('<option>', {
                                value: result,
                                text: result
                            }));

                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $.ajax({
                    type: "get",
                    url: "/api/lenguaje",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#HabilidadesUsing' + Jobs).append($('<option>', {
                                value: result['nombre'],
                                text: result['nombre']
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });

                $('#ReferenceJobsCountry' + Jobs).change(function(e) {
                    e.preventDefault();
                    $('#ReferenceJobsEstado' + Jobs).empty();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ReferenceJobsEstado' + Jobs).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

                $('#ReferenceJobsEstado' + Jobs).change(function(e) {
                    e.preventDefault();
                    $('#ReferenceJobsCiudad' + Jobs).empty();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + $(this).val(),
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ReferenceJobsCiudad' + Jobs).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        }
                    });
                });

            }

            $('#ReferenceJobsCountry' + Jobs).change(function(e) {
                e.preventDefault();
                $('#ReferenceJobsEstado' + Jobs).empty();
                $.ajax({
                    type: "get",
                    url: "/api/estado/" + $(this).val(),
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferenceJobsEstado' + Jobs).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });

                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            });

            $('#ReferenceJobsEstado' + Jobs).change(function(e) {
                e.preventDefault();
                $('#ReferenceJobsCiudad' + Jobs).empty();
                $.ajax({
                    type: "get",
                    url: "/api/ciudad/" + $(this).val(),
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#ReferenceJobsCiudad' + Jobs).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            });

            function Languaje() {
                LanguajeInt++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h2 class="text-center">IDIOMAS #${LanguajeInt}</h2>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Idioma</label>
                                                <select name="Idioma[]" id="Idioma${LanguajeInt}" class="form-control">
                                                    <option value="" selected disabled>Seleccione Idioma</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label class="text-white">Nivel Idioma</label>
                                                <select name="Idioma[]" class="form-control">
                                                    <option value="" selected disabled>Seleccione Idioma</option>
                                                    <option value="Basico">Basico</option>
                                                    <option value="Intermedio">Intermedio</option>
                                                    <option value="Avanzado">Avanzado</option>
                                                </select>
                                          </div>
                                        </div>
                                    </div>
                                </div>`;
                $('#Languajes').append(html);

                $.ajax({
                    type: "get",
                    url: "/api/idioma",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#Idioma' + LanguajeInt).append($('<option>', {
                                value: result['nombre'],
                                text: result['nombre']
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    }
                });
            }
        </script>
    @endpush
@endsection
