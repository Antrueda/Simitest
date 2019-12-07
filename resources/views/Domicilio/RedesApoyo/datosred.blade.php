<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th>Nº</th>
                <th width="70">Acciones</th>
                <th>Entidad - Persona</th>
                <th>Servicios o beneficios recibidos</th>
                <th>¿Durante cuánto tiempo?</th>
                <th>Año de prestación del servicio</th>
                <th>Motivo de retiro</th>
            </tr>
        </thead>
        <tbody>
            @if($valorPasado->count()>0)
                @foreach($valorPasado as $k => $d)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td>
                        {!! Form::open(['route' => ['CSD.redesapoyo.pasado.borrar', $d->csd_id, $d->id], 'method' => 'DELETE']) !!}
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        {!! Form::close() !!}
                    </td>
                    <td>{{ $d->nombre }}</td>
                    <td>{{ $d->servicios }}</td>
                    <td>{{ $d->cantidad.' '.$d->unidad->nombre }}</td>
                    <td>{{ $d->ano }}</td>
                    <td>{{ $d->retiro }}</td>
                </tr>
                @endforeach
            @else
            <tr class="text-center">
                <td colspan="7">No hay datos disponibles</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>