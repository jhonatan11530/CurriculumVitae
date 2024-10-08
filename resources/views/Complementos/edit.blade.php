@extends('Layout/Plantilla')
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
                        {!! Form::model($SoporteEstudioModel, [
                            'method' => 'PATCH',
                            'route' => ['SoporteEstudioComplemento.update', $SoporteEstudioModel->id],
                            'files' => true,
                        ]) !!}
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
                                <label>Adjuntar Soporte</label><span style="color: red">*</span>
                                {!! Form::file('SoporteEstudio', ['class' => 'form-control', 'accept' => 'image/png, image/gif, image/jpeg']) !!}
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
