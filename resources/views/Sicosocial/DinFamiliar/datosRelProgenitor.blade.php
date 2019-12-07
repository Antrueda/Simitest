<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
          <tr class="text-center">
            <th rowspan="2">Nº</th>
            @if($vsi->activo == 1)
                <th rowspan="2">Acciones</th>
            @endif
            <th rowspan="2">Convivieron</th>
            <th colspan="3">Tiempo de Convivencia</th>
            <th rowspan="2">Hijos</th>
            <th rowspan="2">Motivo de separación</th>
          </tr>
          <tr class="text-center">
            <th>Días</th>
            <th>Meses</th>
            <th>Años</th>
          </tr>
        </thead>
        <tbody>
            @if($valorPadre->count()>0)
                @foreach($valorPadre as $k => $d)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        @if($vsi->activo == 1)
                            <td>
                                {!! Form::open(['route' => ['VSI.dinfamiliar.padre.borrar', $d->vsi_id, $d->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        @endif
                        <td>{{ $d->convive->nombre }}</td>
                        <td>{{ $d->dia }}</td>
                        <td>{{ $d->mes }}</td>
                        <td>{{ $d->ano }}</td>
                        <td>{{ $d->hijo }}</td>
                        @if (!empty($d->separa->nombre))
                            <td>{{ $d->separa->nombre }}</td>
                        @else
                            <td></td>
                        @endif
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