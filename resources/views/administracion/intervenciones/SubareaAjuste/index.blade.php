@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.SubareaAjuste.header')

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                @canany(['intsubarea-editar', 'intsubarea-cambiar', 'intsubarea-leer'])
                    <th scope="col" width="250">Acciones</th>
                @endcan
                <th scope="col">Subárea de Ajuste</th>
                <th scope="col">Área de Ajuste</th>
                <th scope="col">Estado</th>
            </thead>
            <tbody>

                @foreach ($resultado as $resultad)

                    <tr>
                        <td>
                            <div class="dropdown">
                                @canany(['intsubarea-editar', 'intsubarea-cambiar', 'intsubarea-leer'])
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SELECCIONE
                                    </button>
                                @endcan
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @canany(['intsubarea-editar'])
                                        <div class="dropdown-item">
                                            <a class="btn btn-sm btn-warning"
                                                href="{{ route($rutaxxxx . '.edit', ['intsubarea' => $resultad->id, 'atencion' => Route::current()->parameters['atencion'], 'area' => Route::current()->parameters['area']]) }}"
                                                data-toggle="tooltip" data-placement="bottom"
                                                title="Editar a {{ $resultad->param_area->padre->nombre . ' ' . $resultad->subarea->nombre }}">
                                                EDITAR
                                            </a>
                                        </div>
                                    @endcan
                                    @canany(['intsubarea-leer'])
                                        <div class="dropdown-item">
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route($rutaxxxx . '.show', ['intsubarea' => $resultad->id, 'atencion' => Route::current()->parameters['atencion'], 'area' => Route::current()->parameters['area']]) }}"
                                                data-toggle="tooltip" data-placement="bottom"
                                                title="Ver a {{ $resultad->param_area->padre->nombre . ' ' . $resultad->subarea->nombre }}">
                                                VER
                                            </a>
                                        </div>
                                    @endcan
                                    @canany(['intsubarea-cambiar'])
                                        <div class="dropdown-item  form-check-inline">
                                            {!! Form::open(['method' => 'DELETE', 'route' => [$rutaxxxx . '.destroy', ['intsubarea' => $resultad->id, 'atencion' => Route::current()->parameters['atencion'], 'area' => Route::current()->parameters['area']]]]) !!}
                                            {{ Form::submit('CAMBIAR', ['class' => 'btn btn-sm btn-danger']) }}
                                            {!! Form::close() !!}
                                        </div>
                                    @endcan
                                </div>
                            </div>
                        </td>
                        <td>{{ $resultad->subarea->nombre }}</td>
                        <td>{{ $resultad->param_area->hijo->nombre }}</td>
                        <td>{{ $resultad->sis_esta->s_estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('administracion.intervenciones.footer')
@endsection
