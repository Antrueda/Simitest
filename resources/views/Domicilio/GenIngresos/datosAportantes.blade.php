<div class="container-fluid table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th>Nº</th>
                <th>Acciones</th>
                <th>10.1 ¿Quién Aporta?</th>
                <th colspan="2">10.2 Total Ingresos Mensuales</th>
                <th colspan="2">10.3 Aporte que le hace al hogar</th>
                <th>10.4 Jornada en que realiza la actividad</th>
                <th>10.5 Días</th>
            </tr>
        </thead>
        <tbody>
            @if($valorAporta->count()>0)
                @php
                    $tot1 = $tot2 = 0;
                @endphp
                @foreach($valorAporta as $k => $d)
                    @php
                        $tot1 += $d->mensual;
                        $tot2 += $d->aporte;
                    @endphp
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>
                            {!! Form::open(['route' => ['CSD.geningresos.aportante.borrar', $d->csd_id, $d->id], 'method' =>
                            'DELETE']) !!}
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                            {!! Form::close() !!}
                        </td>
                        <td>{{ $d->aporta->nombre }}</td>
                        <td colspan="2" class="text-right">{{ number_format($d->mensual) }}</td>
                        <td colspan="2" class="text-right">{{ number_format($d->aporte) }}</td>
                        <td>{{ $d->jornada_entre }} {{ $d->entre->nombre }} - {{ $d->jornada_a }} {{ $d->a->nombre }}</td>
                        <td>
                            @foreach($d->dias as $e)
                                <span class="badge">{{ $e->nombre }}</span>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="text-center">Totales</td>
                    <td>10.6</td>
                    <td class="text-right">$ {{ number_format($tot1) }}</td>
                    <td>10.7 Total de aportes mensuales al hogar 
                    <td class="text-right">$ {{ number_format($tot2) }}</td>    
                    <td colspan="2"></td>
                </tr>
            @else
                <tr class="text-center">
                    <td colspan="9">No hay datos disponibles</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>