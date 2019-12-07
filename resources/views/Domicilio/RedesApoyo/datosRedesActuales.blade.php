<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr>
                <th colspan="5"></th>
                <th class="text-center" colspan="2">Datos de contacto</th>
            </tr>
            <tr class="text-center">
                <th>Nº</th>
                <th width="70">Acciones</th>
                <th>Tipo de Red</th>
                <th>Nombre Persona / Institución</th>
                <th>Servicios o beneficios</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @if($valorActual->count()>0)
                @foreach($valorActual as $k=> $d)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>
                            {!! Form::open(['route' => ['CSD.redesapoyo.actual.borrar', $d->csd_id, $d->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                            {!! Form::close() !!}
                        </td>
                        <td>{{ $d->tipo->nombre }}</td>
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->servicios }}</td>
                        <td>{{ $d->telefono }}</td>
                        <td>{{ $d->direccion }}</td>
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