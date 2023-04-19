@extends('Layout/PLantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Modulo para crear archivos de estudios</h2>
        </div>

        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('CurriculumVitaeAddSupportStudent.create') }}" class="btn btn-secondary btn-round">Crear
                soporte de estudio</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre Institucion</th>
                                        <th>Tipo Certificado</th>
                                        <th>Nombre Certificado</th>
                                        <th>Fecha de creacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($SoporteEstudioModel as $Soporte)
                                        <tr>
                                            <td>{{ $Soporte->id }}</td>
                                            <td>{{ $Soporte->Institucion }}</td>
                                            <td>{{ $Soporte->TipoEstudio }}</td>
                                            <td>{{ $Soporte->NombreTitulo }}</td>
                                            <td>{{ $Soporte->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Acciones
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('CurriculumVitaeAddSupportStudent.show', $Soporte->id) }}">Visualizar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('CurriculumVitaeAddSupportStudent.edit', $Soporte->id) }}">Editar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('CurriculumVitaeAddSupportStudent.destroy', $Soporte->id) }}">Eliminar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
