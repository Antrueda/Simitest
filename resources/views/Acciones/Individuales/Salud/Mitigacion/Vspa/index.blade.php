@include('Acciones.Individuales.Salud.Mitigacion.Vspa.formulario')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Valoración del Riesgo por Consumo de SPA
            @if($tarea != 'Nueva')
            <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('mitigacion.vspa.nuevo', $dato->id) }}">
                Nueva
            </a>
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['vspa-leer','vspa-crear','vspa-editar','vspa-borrar'])
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">ACCIONES</th>
                            <th>FECHA</th>
                            <th>UPI</th>
                            <th>RAZONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($vspa) > 0)
                            @foreach($vspa as $d)
                                <tr>
                                    <td>
                                        @can('vspa-editar')
                                            <a class="btn btn-sm btn-primary" title="Editar"
                                                href="{{ route('mitigacion.vspa.editar', [$dato->id, $d->id]) }}">
                                                EDITAR
                                            </a>
                                        @endcan
                                    </td>
                                    <td>{{ $d->fecha }}</td>
                                    <td>{{ $d->upi->nombre }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="4">No hay datos disponibles</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        @endcanany
    </div>
</div>