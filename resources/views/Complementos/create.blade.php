@extends('Layout/PLantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Modulo crear archivos de estudios</h2>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        {!! Form::open(['url' => 'SoporteEstudioComplemento', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Fecha Titulo</label><span style="color: red">*</span>
                                {!! Form::date('Fecha', date('Y-m-d'), ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Institucion / Universidad</label><span style="color: red">*</span>
                                {!! Form::text('Institucion', '', ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Adjuntar Soporte</label><span style="color: red">*</span>
                                {!! Form::file('SoporteEstudio', ['class' => 'form-control', 'accept' => 'image/png, image/gif, image/jpeg']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nombre Titulo</label><span style="color: red">*</span>
                                {!! Form::text('NombreTitulo', '', ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Seleccione el tipo de Estudio</label><span style="color: red">*</span>
                                <select name="TipoEstudio" class="form-control">
                                    <option value="" selected disabled>Seleccione el estudio</option>
                                    <option value="Bachillerato">Bachillerato</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Tecnologo">Tecnologo</option>
                                    <option value="Profesional">Profesional</option>
                                    <option value="Especializado">Especializado</option>
                                    <option value="Diplomado">Diplomado</option>
                                    <option value="Curso Complementario">Curso Complementario</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                            <a href="{{ route('SoporteEstudioComplemento.index') }}" class="btn btn-danger">volver atrás</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
