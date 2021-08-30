@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.header')

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th scope="col" width="250">Acciones</th>
                <th scope="col">Área de Ajuste</th>
                <th scope="col">Estado</th>
            </thead>
            <tbody> 
                 @foreach ($resultado->parametros as $resultad)
                    <tr>
                        <td>

                            <a class="btn btn-sm btn-warning" href="{{ route('tipoatencion.edit', $resultad->id) }}"
                                data-toggle="tooltip" data-placement="bottom" title="Editar a {{ $resultad->nombre }}">
                                EDITAR
                            </a>
                            <a class="btn btn-sm btn-primary" href="{{ route('tipoatencion.show', $resultad->id) }}"
                                data-toggle="tooltip" data-placement="bottom" title="Ver a {{ $resultad->nombre }}">
                                VER
                            </a>
                            <div class="form-check form-check-inline">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['tipoatencion.destroy', $resultad->id]]) !!}
                                {{ Form::submit('CAMBIAR', ['class' => 'btn btn-sm btn-danger']) }}
                                {!! Form::close() !!}
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
