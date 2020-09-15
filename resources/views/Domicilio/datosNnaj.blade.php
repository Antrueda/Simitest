<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md">
                NOMBRE:
                {{ $nnaj->nombre_completo }}
            </div>
            <div class="col-md">
                TIPO DE DOCUMENTO: {{ $nnaj->nnaj_docu->tipoDocumento->nombre }}
            </div>
            <div class="col-md">
                DOCUMENTO: {{ $nnaj->nnaj_docu->s_documento }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                FECHA DE NACIMIENTO: {{ $nnaj->nnaj_nacimi->d_nacimiento }}
            </div>
            <div class="col-md">
                EDAD: {{ $nnaj->nnaj_nacimi->edad }} años
            </div>
            <div class="col-md">
                SEXO NACIMIENTO: {{ $nnaj->nnaj_sexo->prmSexo->nombre }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                DIRECCIÓN: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->direccion : '' }}
            </div>
            <div class="col-md">
                TELÉFONO: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->telefonos : '' }}
            </div>
            <div class="col-md">
                NOMBRE IDENTITARIO: {{ $nnaj->nnaj_sexo->s_nombre_identitario }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                TIPO POBLACIÓN: {{ $nnaj->prmTipoPobla->nombre }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                @if($accion != 'Nueva')
                    <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('csd.nuevo', $dato->id) }}">
                        Nueva
                    </a>
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($accion == 'Nueva')
            {!! Form::open(['route' => ['csd.nuevo', $dato->id], 'class' => 'form-horizontal']) !!}
                @include('Domicilio.campos')
            {!! Form::close() !!}
        @endif
        @if ($accion == 'Editar')
            {!! Form::model($valor, ['route' => ['csd.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
                @include('Domicilio.campos')
            {!! Form::close() !!}
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr class="text-center">
                        <th width="160">Acciones</th>
                        <th>Propósito</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($csds)>0)
                        @foreach($csds as $d)
                            <tr>
                                <td>
                                    @canany(['permission:csddatobasico-leer','csddatobasico-crear','csddatobasico-editar'])
                                        <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('csd.editar', [$dato->id, $d->id]) }}">
                                            Editar
                                        </a>
                                        <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('csd.ver', $d->id) }}">
                                            Seleccionar
                                        </a>
                                    @endcan
                                </td>
                                <td>{{ $d->proposito }}</td>
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
