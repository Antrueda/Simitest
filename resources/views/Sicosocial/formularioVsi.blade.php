<div class="card card-outline card-secondary">
    <div class="card-header">
        Valoraciones 
        @if ($accion!='Nueva')
            <a class="btn btn-sm btn-primary ml-2" title="Agregar" href="{{ route('VSI.nueva', $dato->id) }}">
                Nueva
            </a>
        @endif
    </div>
    <div class="card-body">
        @if ($accion == 'Nueva')
            {!! Form::open(['route' => ['VSI.nueva', $dato->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('sis_nnaj_id', $dato->id) }}
                @include('Sicosocial.campos')
            {!! Form::close() !!}
        @endif
        @if ($accion == 'Editar')
            {!! Form::model($valor, ['route' => ['VSI.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
                {{ Form::hidden('sis_nnaj_id', $valor->id) }}
                @include('Sicosocial.campos')
            {!! Form::close() !!}
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr class="text-center">
                        <th width="274">Acciones</th>
                        <th>UPI</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($vsis)>0)
                        @foreach($vsis as $d)
                            <tr>
                                <td>
                                    @if($d->activo == 1)
                                        @canany(['vsidatobasico-editar'])
                                            <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('VSI.editar', [$dato->id, $d->id]) }}">
                                                Editar
                                            </a>
                                        @endcan
                                        @canany(['vsidatobasico-borrar'])
                                            <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('VSI.bloquear', [$dato->id, $d->id]) }}">
                                                Grabar y enviar
                                            </a>
                                        @endcan
                                    @endif
                                    @canany(['permission:vsidatobasico-leer','vsidatobasico-crear','vsidatobasico-editar','vsidatobasico-borrar'])
                                        <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('VSI.ver', $d->id) }}">
                                            Seleccionar
                                        </a>
                                    @endcan
                                </td>
                                <td>{{ $d->dependencia->nombre }}</td>
                                <td>{{ $d->fecha }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="3">No hay datos disponibles</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>