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
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Fecha Titulo</label><span style="color: red">*</span>
                                {!! Form::date('Fecha', $SoporteEstudioModel->Fecha, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Institucion / Universidad</label><span style="color: red">*</span>
                                {!! Form::text('Institucion', $SoporteEstudioModel->Institucion, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nombre Titulo</label><span style="color: red">*</span>
                                {!! Form::text('NombreTitulo', $SoporteEstudioModel->NombreTitulo, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Seleccione el tipo de Estudio</label><span style="color: red">*</span>
                                <select name="TipoEstudio" class="form-control">
                                    <option value="" disabled>Seleccione el estudio</option>
                                    <option value="Bachillerato" @if ($SoporteEstudioModel->TipoEstudio == 'Bachillerato') selected @endif>
                                        Bachillerato</option>
                                    <option value="Tecnico" @if ($SoporteEstudioModel->TipoEstudio == 'Tecnico') selected @endif>Tecnico
                                    </option>
                                    <option value="Tecnologo" @if ($SoporteEstudioModel->TipoEstudio == 'Tecnologo') selected @endif>Tecnologo
                                    </option>
                                    <option value="Profesional" @if ($SoporteEstudioModel->TipoEstudio == 'Profesional') selected @endif>
                                        Profesional</option>
                                    <option value="Especializado" @if ($SoporteEstudioModel->TipoEstudio == 'Especializado') selected @endif>
                                        Especializado</option>
                                    <option value="Diplomado" @if ($SoporteEstudioModel->TipoEstudio == 'Diplomado') selected @endif>Diplomado
                                    </option>
                                    <option value="Curso Complementario" @if ($SoporteEstudioModel->TipoEstudio == 'Curso Complementario') selected @endif>
                                        Curso Complementario</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Adjuntar Soporte</label><span style="color: red">*</span>
                                <img src="{{ asset($SoporteEstudioModel->SoporteFisico) }}" height="300" width="300"
                                    alt="Image not found">
                            </div>
                        </div>
                        <a href="{{ route('CurriculumVitaeAddSupportStudent.index') }}" class="btn btn-danger">Volver
                            atraz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
