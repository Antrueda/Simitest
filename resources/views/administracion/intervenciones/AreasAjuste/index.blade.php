@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.AreasAjuste.header')

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                @canany(['intarea-editar', 'intarea-cambiar', 'intarea-leer', 'intsubarea-modulo'])
                    <th scope="col" width="250">Acciones</th>
                @endcan
                <th scope="col">Área de Ajuste</th>
                <th scope="col">Tipo de Atención</th>
                <th scope="col">Estado</th>
            </thead>
            <tbody>
                @foreach ($resultado as $resultad)
                    <tr>
                        <td>
                            <div class="dropdown">
                                @canany(['intarea-editar', 'intarea-cambiar', 'intarea-leer', 'intsubarea-modulo'])
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SELECCIONE
                                    </button>
                                @endcan
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @canany(['intarea-editar'])
                                    <div class="dropdown-item">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route($rutaxxxx . '.edit', ['intarea' => $resultad->id, 'atencion' => Route::current()->parameters['atencion']]) }}"
                                            data-toggle="tooltip" data-placement="bottom"
                                            title="Editar a {{ $resultad->padre->nombre . ' ' . $resultad->hijo->nombre }}">
                                            EDITAR
                                        </a>
                                    </div>
                                    @endcan
                                    @canany(['intarea-leer'])
                                    <div class="dropdown-item">
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route($rutaxxxx . '.show', ['intarea' => $resultad->id, 'atencion' => Route::current()->parameters['atencion']]) }}"
                                            data-toggle="tooltip" data-placement="bottom"
                                            title="Ver a {{ $resultad->padre->nombre . ' ' . $resultad->hijo->nombre }}">
                                            VER
                                        </a>
                                    </div>
                                    @endcan
                                    @canany(['intarea-cambiar'])
                                    <div class="dropdown-item  form-check-inline">
                                        {!! Form::open(['method' => 'DELETE', 'route' => [$rutaxxxx . '.destroy', ['intarea' => $resultad->id, 'atencion' => Route::current()->parameters['atencion']]]]) !!}
                                        {{ Form::submit('CAMBIAR', ['class' => 'btn btn-sm btn-danger show_confirm']) }}
                                        {!! Form::close() !!}
                                    </div>
                                    @endcan
                                    @canany(['intsubarea-modulo'])
                                     <div class="dropdown-item">
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route($asignruta . '.index', ['atencion' => Route::current()->parameters['atencion'], 'area' => $resultad->id]) }}"
                                            data-toggle="tooltip" data-placement="bottom"
                                            title="Asignar Subarea a {{ $resultad->padre->nombre . ' ' . $resultad->hijo->nombre }}">
                                            ASIGNAR SUBAREA
                                        </a>
                                    </div>
                                    @endcan
                                </div>
                            </div>
                        </td>
                        <td>{{ $resultad->hijo->nombre }}</td>
                        <td>{{ $resultad->padre->nombre }}</td>
                        <td>{{ $resultad->sis_esta->s_estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('administracion.intervenciones.footer')
@endsection
