@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.TipoAtencion.header')

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                @canany(['tipoatencion-editar', 'tipoatencion-cambiar', 'tipoatencion-leer', 'intarea-modulo'])
                    <th scope="col">ACCIONES</th>
                @endcan
                <th scope="col">{{ $tituloxx }}</th>
                <th scope="col">ESTADO</th>
            </thead>
            <tbody>
                @foreach ($resultado->parametros as $resultad)
                    <tr>
                        <td>
                            <div class="dropdown">
                                @canany(['tipoatencion-editar', 'tipoatencion-cambiar', 'tipoatencion-leer',
                                    'intarea-modulo'])

                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SELECCIONE
                                    </button>
                                @endcan
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @canany(['tipoatencion-editar'])
                                        <div class="dropdown-item">
                                            <a class="btn btn-sm btn-warning"
                                                href="{{ route($rutaxxxx . '.edit', $resultad->id) }}" data-toggle="tooltip"
                                                data-placement="bottom" title="Editar a {{ $resultad->nombre }}">
                                                EDITAR
                                            </a>
                                        </div>
                                    @endcan
                                    @canany(['tipoatencion-leer'])
                                        <div class="dropdown-item">
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route($rutaxxxx . '.show', $resultad->id) }}" data-toggle="tooltip"
                                                data-placement="bottom" title="Ver a {{ $resultad->nombre }}">
                                                VER
                                            </a>
                                        </div>
                                    @endcan
                                    @canany(['tipoatencion-cambiar'])
                                    <div class="dropdown-item  form-check-inline">
                                        {!! Form::open(['method' => 'DELETE', 'route' => [$rutaxxxx . '.destroy', $resultad->id]]) !!}
                                        {{ Form::submit('CAMBIAR', ['class' => 'btn btn-sm btn-danger show_confirm']) }}
                                        {!! Form::close() !!}
                                    </div>
                                    @endcan
                                    @canany(['intarea-modulo'])
                                    <div class="dropdown-item">
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route($asignruta . '.index', $resultad->id) }}" data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Asignar Área de Ajuste a {{ $resultad->nombre }}">
                                            ASIGNAR AREA
                                        </a>
                                    </div>
                                    @endcan
                                </div>
                            </div>
                        </td>
                        <td>{{ $resultad->nombre }}</td>
                        <td>{{ $resultad->sis_esta->s_estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('administracion.intervenciones.footer')

@endsection
