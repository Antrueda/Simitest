<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th rowspan="2">Nº</th>
                @if ($vsi->sis_esta_id == 1)
                    <th rowspan="2" width="70">Acciones</th>
                @endif
                <th rowspan="2">Tipo de Red</th>
                <th rowspan="2">Nombre Persona / Institución</th>
                <th rowspan="2">Servicios o beneficios</th>
                <th colspan="2">Datos de contacto</th>
            </tr>
            <tr class="text-center">
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @if($valorActual->count()>0)
                @foreach($valorActual as $k => $d)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        @if ($vsi->sis_esta_id == 1)
                            <td>
                                {!! Form::open(['route' => ['VSI.redesapoyo.actual.borrar', $d->vsi_id, $d->id], 'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        @endif
                        <td>{{ $d->tipo->nombre }}</td>
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->servicio }}</td>
                        <td>{{ $d->telefono }}</td>
                        <td>{{ $d->direccion }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="12" class="text-center">No hay datos disponibles</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>