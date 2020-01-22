<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th rowspan="2">Nº</th>
                @if ($vsi->sis_esta_id == 1)
                    <th rowspan="2" width="70">Acciones</th>
                @endif
                <th rowspan="2">Entidad - Persona</th>
                <th rowspan="2">Servicios o beneficios recibidos</th>
                <th colspan="3">¿Durante cuánto tiempo?</th>
                <th rowspan="2">Año de prestación del servicio</th>
            </tr>
            <tr class="text-center">
                <th>Días</th>
                <th>Meses</th>
                <th>Años</th>
            </tr>
        </thead>
        <tbody>
            @if($valorPasado->count()>0)
                @foreach($valorPasado as $k => $d)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        @if ($vsi->sis_esta_id == 1)
                            <td>
                                {!! Form::open(['route' => ['VSI.redesapoyo.pasado.borrar', $d->vsi_id, $d->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        @endif
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->servicio }}</td>
                        <td>{{ $d->dia }}</td>
                        <td>{{ $d->mes }}</td>
                        <td>{{ $d->ano }}</td>
                        <td>{{ $d->ano_prestacion }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="13" class="text-center">No hay datos disponibles</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>