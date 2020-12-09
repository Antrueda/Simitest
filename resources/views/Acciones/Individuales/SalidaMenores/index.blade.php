@include('Acciones.Individuales.SalidaMenores.formulario')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Salidas y permisos con acompañamiento y/o Representante Legal
            @if($tarea != 'Nueva')
                <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('ai.salidamenores.nuevo', $dato->id) }}">
                    Nuevo
                </a>
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['aisalidamenores-leer','aisalidamenores-crear','aisalidamenores-editar','aisalidamenores-borrar'])
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr class="text-center">
                        <th width="70">Acciones</th>
                        <th>Fecha de Salida</th>
                        <th>UPI</th>
                        <th>Razones</th>
                        <th>Tiempo</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($salidas) > 0)
                    @foreach($salidas as $d)
                    <tr>
                        <td>
                            @can('aisalidamenores-editar')
                            <a class="btn btn-sm btn-primary" title="Editar"
                                href="{{ route('ai.salidamenores.editar', [$dato->id, $d->id]) }}">
                                EDITAR
                            </a>
                            @endcan
                        </td>
                        <td>{{ $d->fecha }}</td>
                        <td>{{ $d->upis->nombre }} </td>
                        <td>
                            @foreach($d->objetivo as $e)
                                <span class="badge">{{ $e->nombre }}</span> 
                            @endforeach
                        </td>
                        <td>{{ $d->tiempo }} dias</td>
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