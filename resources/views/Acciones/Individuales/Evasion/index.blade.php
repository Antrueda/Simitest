@include('Acciones.Individuales.Evasion.formulario')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Reporte de Evasiones
            @if($tarea != 'Nueva')
                <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('ai.evasion.nuevo', $dato->id) }}">
                    Nuevo
                </a>
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['aievasion-leer','aievasion-crear','aievasion-editar','aievasion-borrar'])
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">Acciones</th>
                            <th>Fecha de Evasión</th>
                            <th>Hora de Evasión</th>
                            <th>UPI/Lugar/Espacio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($evasiones) > 0)
                            @foreach($evasiones as $d)
                                <tr>
                                    <td>
                                        @can('aievasion-editar')
                                            <a class="btn btn-sm btn-primary" title="Editar"
                                                href="{{ route('ai.evasion.editar', [$dato->id, $d->id]) }}">
                                                EDITAR
                                            </a>
                                        @endcan
                                    </td>
                                    <td>{{ $d->fecha_evasion }}</td>
                                    <td>{{ $d->hora_evasion }}</td>
                                    <td>{{ $d->upis->nombre }} - {{ $d->lugar_evasion }}</td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">No hay datos disponibles</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        @endcanany
    </div>
</div>