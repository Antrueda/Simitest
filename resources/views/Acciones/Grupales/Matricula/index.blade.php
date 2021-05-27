@include('Acciones.Individuales.SalidaMayores.formulario')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Salidas de Jóvenes Mayores de Edad 
            @if($tarea != 'Nueva')
                <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('ai.salidamayores.nuevo', $dato->id) }}">
                    Nueva
                </a>
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['aisalidamayores-leer','aisalidamayores-crear','aisalidamayores-editar','aisalidamayores-borrar'])
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">Acciones</th>
                            <th>Fecha</th>
                            <th>UPI</th>
                            <th>Razones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($salidas) > 0)
                            @foreach($salidas as $d)
                                <tr>
                                    <td>
                                        @can('aisalidamayores-editar')
                                            <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('ai.salidamayores.editar', [$dato->id, $d->id]) }}">
                                                EDITAR
                                            </a>
                                        @endcan
                                    </td>
                                    <td>{{ $d->fecha }}</td>
                                    <td>{{ $d->upi->nombre }}</td>
                                    <td>
                                        @foreach($d->razones as $e)
                                            <span class="badge">{{ $e->nombre }}</span> 
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="4">No hay datos disponibles</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        @endcanany
    </div>
</div>