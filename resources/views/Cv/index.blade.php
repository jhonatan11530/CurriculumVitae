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
                                        <th>Nombre</th>
                                        <th>Idioma</th>
                                        <th>Fecha de creacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($HojaVida as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->Nombre}}</td>
                                        <td>{{$item->Idioma}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('hoja.vida.show.pdf',$item->id) }}"
                                                        target="_blank">Visualizar</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('hoja.vida.pdf.export') }}">Exportar</a>
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
