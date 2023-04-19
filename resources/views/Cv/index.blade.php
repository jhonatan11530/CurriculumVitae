@extends('Layout/PLantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Modulo Creacion Hoja de Vida</h2>
        </div>

        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('CurriculumVitae.create') }}" class="btn btn-secondary btn-round">Crear Hoja de Vida</a>
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
                                        <th>Nombre Hoja de Vida</th>
                                        <th>Idioma</th>
                                        <th>Fecha de creacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Colombia CV</td>
                                        <td>Español</td>
                                        <td>26/03/2023</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('hoja.vida.show.pdf') }}" target="_blank">Visualizar</a>
                                                    <a class="dropdown-item" href="{{ route('hoja.vida.pdf.export') }}">Exportar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
