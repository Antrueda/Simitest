@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.Parametro.Area.header')

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th scope="col">ACCIONES</th>
                <th scope="col">{{ $tituloxx }}</th>
                <th scope="col">ESTADO</th>
            </thead>
            <tbody>
                @foreach ($resultado->parametros as $resultad)
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SELECCIONE
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <div class="dropdown-item">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route($rutaxxxx . '.edit', $resultad->id) }}" data-toggle="tooltip"
                                            data-placement="bottom" title="Editar a {{ $resultad->nombre }}">
                                            EDITAR
                                        </a>
                                    </div>
                                    <div class="dropdown-item">
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route($rutaxxxx . '.show', $resultad->id) }}" data-toggle="tooltip"
                                            data-placement="bottom" title="Ver a {{ $resultad->nombre }}">
                                            VER
                                        </a>
                                    </div>
                                    <div class="dropdown-item  form-check-inline">
                                        {!! Form::open(['method' => 'DELETE', 'route' => [$rutaxxxx . '.destroy', $resultad->id]]) !!}
                                        {{ Form::submit('CAMBIAR', ['class' => 'btn btn-sm btn-danger']) }}
                                        {!! Form::close() !!}
                                    </div> 
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
