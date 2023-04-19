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
                                {!! Form::text('Nombre', 'Jhonatan fernandez muñoz', ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Adjuntar Foto</label><span style="color: red">*</span>
                                {!! Form::file('Foto', ['class' => 'form-control', 'accept' => 'image/png, image/gif, image/jpeg']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Cargo Asipirante</label><span style="color: red">*</span>
                                {!! Form::text('Cargo', '', ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Seleccione el Idioma</label><span style="color: red">*</span>
                                {!! Form::select(
                                    'Idioma',
                                    ['Seleccione una opcion' => 'Seleccione una opcion', 'Español' => 'Español', 'Ingles' => 'Ingles'],
                                    'Seleccione una opcion',
                                    ['class' => 'form-control'],
                                ) !!}
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Seleccione la plantilla del CV</label><span style="color: red">*</span>
                                <select name="plantilla" class="form-control" >
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Pais</label><span style="color: red">*</span>
                                <select name="PaisDatoPrincipal" class="form-control" id="country" >
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Departamento</label><span style="color: red">*</span>
                                <select name="DepartamentoDatoPrincipal" class="form-control" id="estado" >
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Ciudad</label><span style="color: red">*</span>
                                <select name="CiudadDatoPrincipal" class="form-control" id="ciudad" >
                                    <option value="" selected disabled>Seleccione el cargo</option>
                                </select>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">DATOS DE CONTACTO</h2>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Telefono Celular</label><span style="color: red">*</span>
                                {!! Form::number('Celular', '', ['class' => 'form-control', 'min' => '0']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Telefono Fijo</label><span style="color: red">*</span>
                                {!! Form::number('Fijo', '', ['class' => 'form-control', 'min' => '0']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Correo electronico</label><span style="color: red">*</span>
                                {!! Form::email('Correo', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">HABILIDADES O LENGUAJES</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Habilidades</label><span style="color: red">*</span>
                                <select name="Habilidades" class="form-control js-multiple" name="states[]" multiple
                                    >
                                    <option value="" disabled>Seleccione el cargo</option>
                                    <option value="">C#</option>
                                    <option value="">C++</option>
                                </select>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">INFORMACION PROFESIONAL</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Perfil Profesional</label><span style="color: red">*</span>
                                {!! Form::textarea('PerfilProfesional', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">INFORMACION SOBRE MI</h2>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Sobre Mi</label><span style="color: red">*</span>
                                {!! Form::textarea('SobreMi', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>


                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">REFERENCIAS PERSONALES</h2>
                                <a class="btn btn-primary text-white" onclick="ReferencePerson()">Añadir Referencia</a>
                            </div>
                        </div>
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <h2 class="text-center">REFERENCIAS #1</h2>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="text-white">Nombre Referencia</label><span
                                            style="color: red">*</span>
                                        {!! Form::text('ReferenciaPersonal[]', '', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="text-white">Nombre del Cargo Referencia</label><span
                                            style="color: red">*</span>
                                        {!! Form::text('ReferenciaPersonal[]', '', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="text-white">Telefono Referencia</label><span
                                            style="color: red">*</span>
                                        {!! Form::number('ReferenciaPersonal[]', '', ['class' => 'form-control', 'min' => '0']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Experience"></div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">EXPERIENCIA LABORAL</h2>
                                <a class="btn btn-primary text-white" onclick="ReferenceJosb()">Añadir Experiencia</a>
                            </div>
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">EXPERIENCIA #1</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">nombre empresa</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">fecha ingreso</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">fecha salida</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">cargo en la empresa</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0']) !!}
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Pais</label><span style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control" id="country1" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Departamento</label><span
                                                style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control" id="estado1"
                                                >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control" id="ciudad1" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Tareas</label><span style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Funciones</label><span style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Habilidades Usadas</label><span
                                                style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control js-multiple"
                                                multiple >
                                                <option value="" disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Experiencia"></div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">EDUCACION PRINCIPAL</h2>
                                <a class="btn btn-primary text-white" onclick="Education()">Añadir Educacion</a>
                            </div>
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">EDUCACION #1</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Año del Estudio</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('Education[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Pais</label><span style="color: red">*</span>
                                            <select name="Education[]" class="form-control" id="country2" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Departamento</label><span
                                                style="color: red">*</span>
                                            <select name="Education[]" class="form-control" id="estado2"
                                                >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                            <select name="Education[]" class="form-control" id="ciudad2" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Nombre Titulo</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('Education[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Institucion / Universidad</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('Education[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Education"></div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">EDUCACION COMPLEMENTARIA</h2>
                                <a class="btn btn-primary text-white" onclick="EducationComplemente()">Añadir Educacion</a>
                            </div>
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">EDUCACION COMPLEMENTARIA #1</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Año del Estudio</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('EducationComple[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Pais</label><span style="color: red">*</span>
                                            <select name="EducationComple[]" class="form-control" id="country3">
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Departamento</label><span
                                                style="color: red">*</span>
                                            <select name="EducationComple[]" class="form-control" id="estado3">
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                            <select name="EducationComple[]" class="form-control" id="ciudad3">
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Nombre Titulo</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('EducationComple[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Institucion / Universidad</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('EducationComple[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="EducationComple"></div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="text-center">IDIOMAS QUE MANEJA</h2>
                                <a class="btn btn-primary text-white" onclick="Languajes()">Añadir Idiomas</a>
                            </div>
                        </div>
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <h2 class="text-center">IDIOMAS #1</h2>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="text-white">Idioma</label>
                                        <select name="Idioma[]" class="form-control">
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
                        </div>
                        <div id="Languajes"></div>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            InicializeAjax();
            $('.js-multiple').select2();
            var ExperienceInt = 1;
            var ReferenceInt = 1;
            var EducationInt = 1;
            var EducationComInt = 1;
            var LanguajeInt = 1;
            // se ejecuta un Ajax que trae los paises mediante AJAX
            function InicializeAjax() {
                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    beforeSend: function() {},
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#country').append($('<option>', {
                                value: result,
                                text: result
                            }));
                            $('#country1').append($('<option>', {
                                value: result,
                                text: result
                            }));
                            $('#country2').append($('<option>', {
                                value: result,
                                text: result
                            }));
                            $('#country3').append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    },
                    complete: function() {}
                });

                $('#country').change(function(e) {
                    e.preventDefault();
                    $('#estado').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {

                        },
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
                        },
                        complete: function() {}
                    });
                });

                $('#estado').change(function(e) {
                    e.preventDefault();
                    $('#ciudad').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
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
                        },
                        complete: function() {}
                    });
                });

                $('#country1').change(function(e) {
                    e.preventDefault();
                    $('#estado1').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {

                        },
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#estado1').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#estado1').change(function(e) {
                    e.preventDefault();
                    $('#ciudad1').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ciudad1').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#country2').change(function(e) {
                    e.preventDefault();
                    $('#estado2').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {

                        },
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#estado2').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#estado2').change(function(e) {
                    e.preventDefault();
                    $('#ciudad2').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ciudad2').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#country3').change(function(e) {
                    e.preventDefault();
                    $('#estado3').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {

                        },
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#estado3').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#estado3').change(function(e) {
                    e.preventDefault();
                    $('#ciudad3').empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#ciudad3').append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });
            }

            function ReferencePerson() {
                ExperienceInt++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">REFERENCIAS #${ExperienceInt}</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Nombre Referencia</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('ReferenciaPersonal[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Nombre del Cargo Referencia</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('ReferenciaPersonal[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Telefono Referencia</label><span
                                                style="color: red">*</span>
                                            {!! Form::number('ReferenciaPersonal[]', '', ['class' => 'form-control', 'min' => '0']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                $('#Experience').append(html);
            }

            function ReferenceJosb() {
                ExperienceInt++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">EXPERIENCIA #${ExperienceInt}</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">nombre empresa</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">fecha ingreso</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">fecha salida</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">cargo en la empresa</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control', 'min' => '0']) !!}
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Pais</label><span style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control" id="Experiencecountry${ExperienceInt}" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Departamento</label><span
                                                style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control" id="Experienceestado${ExperienceInt}" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control" id="Experienceciudad${ExperienceInt}" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Tareas</label><span style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Funciones</label><span style="color: red">*</span>
                                            {!! Form::text('ReferenciaLaboral[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Habilidades Usadas</label><span
                                                style="color: red">*</span>
                                            <select name="ReferenciaLaboral[]" class="form-control js-multiple" multiple >
                                                <option value="" disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                $('#Experiencia').append(html);

                setTimeout(function() {
                    $('.js-multiple').select2();
                }, 100);

                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    beforeSend: function() {},
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#Experiencecountry' + ExperienceInt).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    },
                    complete: function() {}
                });

                $('#Experiencecountry' + ExperienceInt).change(function(e) {
                    e.preventDefault();
                    $('#Experienceestado' + ExperienceInt).empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#Experienceestado' + ExperienceInt).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#Experienceestado' + ExperienceInt).change(function(e) {
                    e.preventDefault();
                    $('#Experienceciudad' + ExperienceInt).empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#Experienceciudad' + ExperienceInt).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

            }

            function Education() {
                EducationInt++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">EDUCACION #${EducationInt}</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Año del Estudio</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('Education[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Pais</label><span style="color: red">*</span>
                                            <select name="Education[]" class="form-control" id="Educationcountry${EducationInt}" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Departamento</label><span
                                                style="color: red">*</span>
                                            <select name="Education[]" class="form-control" id="Educationestado${EducationInt}" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                            <select name="Education[]" class="form-control" id="Educationciudad${EducationInt}" >
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Nombre Titulo</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('Education[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Institucion / Universidad</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('Education[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                $('#Education').append(html);


                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    beforeSend: function() {},
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#Educationcountry' + EducationInt).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    },
                    complete: function() {}
                });

                $('#Educationcountry' + EducationInt).change(function(e) {
                    e.preventDefault();
                    $('#Educationestado' + EducationInt).empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {

                        },
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#Educationestado' + EducationInt).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#Educationestado' + EducationInt).change(function(e) {
                    e.preventDefault();
                    $('#Educationciudad' + EducationInt).empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#Educationciudad' + EducationInt).append($('<option>', {
                                    value: result,
                                    text: result
                                }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });
            }

            function EducationComplemente() {
                EducationComInt++;
                var html = null;
                html = `<div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <h2 class="text-center">EDUCACION COMPLEMENTARIA #${EducationComInt}</h2>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label class="text-white">Año del Estudio</label><span
                                                style="color: red">*</span>
                                            {!! Form::date('EducationComple[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Pais</label><span style="color: red">*</span>
                                            <select name="EducationComple[]" class="form-control" id="EducationComplementecountry${EducationComInt}">
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="text-white">Departamento</label><span
                                                style="color: red">*</span>
                                            <select name="EducationComple[]" class="form-control" id="EducationComplementeestado${EducationComInt}">
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="text-white">Ciudad</label><span style="color: red">*</span>
                                            <select name="EducationComple[]" class="form-control" id="EducationComplementeciudad${EducationComInt}">
                                                <option value="" selected disabled>Seleccione el cargo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Nombre Titulo</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('EducationComple[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="text-white">Institucion / Universidad</label><span
                                                style="color: red">*</span>
                                            {!! Form::text('EducationComple[]', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                $('#EducationComple').append(html);

                $.ajax({
                    type: "get",
                    url: "/api/pais",
                    dataType: 'json',
                    tryCount: 0,
                    retryLimit: 3,
                    beforeSend: function() {},
                    success: function(response) {
                        $.each(response, function(key, result) {
                            $('#EducationComplementecountry' + EducationComInt).append($('<option>', {
                                value: result,
                                text: result
                            }));
                        });
                    },
                    error: function(xhr) {
                        alert("Ocurrió un error. Vuelva a intentarlo.");
                    },
                    complete: function() {}
                });

                $('#EducationComplementecountry' + EducationComInt).change(function(e) {
                    e.preventDefault();
                    $('#EducationComplementeestado' + EducationComInt).empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/estado/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {

                        },
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#EducationComplementeestado' + EducationComInt).append($(
                                    '<option>', {
                                        value: result,
                                        text: result
                                    }));
                            });

                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });

                $('#EducationComplementeestado' + EducationComInt).change(function(e) {
                    e.preventDefault();
                    $('#EducationComplementeciudad' + EducationComInt).empty();
                    var value = $(this).val();
                    $.ajax({
                        type: "get",
                        url: "/api/ciudad/" + value,
                        dataType: 'json',
                        tryCount: 0,
                        retryLimit: 3,
                        beforeSend: function() {},
                        success: function(response) {
                            $.each(response, function(key, result) {
                                $('#EducationComplementeciudad' + EducationComInt).append($(
                                    '<option>', {
                                        value: result,
                                        text: result
                                    }));
                            });
                        },
                        error: function(xhr) {
                            alert("Ocurrió un error. Vuelva a intentarlo.");
                        },
                        complete: function() {}
                    });
                });
            }

            function Languajes() {
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
                                                <select name="Idioma[]" class="form-control">
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
            }
        </script>
    @endpush
@endsection
