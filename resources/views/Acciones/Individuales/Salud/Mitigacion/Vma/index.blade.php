@include('Acciones.Individuales.Salud.Mitigacion.Vma.formulario')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Valoración Medicina Alternativa
            @if($tarea != 'Nueva')
            <a class="btn btn-sm btn-primary" title="Nueva" href="{{ route('mitigacion.vma.nuevo', $dato->id) }}">
                Nueva
            </a>
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['vma-leer','vma-crear','vma-editar','vma-borrar'])
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
                        @if(count($vma) > 0)
                        @foreach($vma as $d)
                        <tr>
                            <td>
                                @can('vma-editar')
                                <a class="btn btn-sm btn-primary" title="Editar"
                                    href="{{ route('mitigacion.vma.editar', [$dato->id, $d->id]) }}">
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