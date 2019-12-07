@include('Acciones.Individuales.RetornoSalida.formulario')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Retorno de salidas y permisos con acudiente y/o representante legal
            @if($tarea != 'Nueva')
                <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('ai.retornosalida.nuevo', $dato->id) }}">
                    Nuevo
                </a>
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['airetornosalida-leer','airetornosalida-crear','airetornosalida-editar','airetornosalida-borrar'])
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">Acciones</th>
                            <th>Fecha de Retorno</th>
                            <th>Hora de Retorno</th>
                            <th>UPI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($retorno) > 0)
                        @foreach($retorno as $d)
                        <tr>
                            <td>
                                @can('airetornosalida-editar')
                                <a class="btn btn-sm btn-primary" title="Editar"
                                    href="{{ route('ai.retornosalida.editar', [$dato->id, $d->id]) }}">
                                    Editar
                                </a>
                                @endcan
                            </td>
                            <td>{{ $d->fecha }}</td>
                            <td>{{ $d->hora_retorno }} </td>
                            <td>{{ $d->upis->nombre }} </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No hay datos disponibles</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        @endcanany
    </div>
</div>