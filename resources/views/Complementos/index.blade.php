@extends('Layout/Plantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Modulo para crear archivos de estudios complementario</h2>
        </div>

        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('SoporteEstudioComplemento.create') }}" class="btn btn-secondary btn-round">Crear
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
                                                            href="{{ route('SoporteEstudioComplemento.show', $Soporte->id) }}">Visualizar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('SoporteEstudioComplemento.edit', $Soporte->id) }}">Editar</a>
                                                        <a class="dropdown-item"data-toggle="modal" data-target="#eliminar"
                                                            href="#">Eliminar</a>
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
    @isset($Soporte)
        <div class="modal fade" id="eliminar">
            <div class="modal-dialog text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">SEGURO QUE DESEA ELIMINAR ?</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <i class="fas fa-archive fa-10x" style="color:rgb(255, 52, 52)"></i>
                    </div>
                    <div class="modal-footer">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['SoporteEstudioComplemento.destroy', $Soporte->id]]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-primary mt-3']) !!}
                        <button type="button" class="btn btn-danger mt-3" data-dismiss="modal">Atras</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endisset
@endsection
