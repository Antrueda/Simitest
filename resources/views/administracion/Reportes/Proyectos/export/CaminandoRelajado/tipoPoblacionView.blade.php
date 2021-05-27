<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>13.1 Situaciones de vulneraciones</td>
            <td>13.2 Víctima ESCNNA</td>
            <td>13.3 Riesgo ESCNNA</td>
            <td>13.4 ¿Es usted Joven en presunto conflicto con la ley?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
            @if (!is_null($sisNnaj->fi_situacion_especials))
                {{-- 13.1 Situaciones de vulneraciones --}}
                <td>
                    @foreach ($sisNnaj->fi_situacion_especials->fi_situ_vulnera as $fi_situ_vulner)
                        {{ "{$fi_situ_vulner->prm_situacion_vulnera->nombre}, " }}
                    @endforeach
                </td>
                {{-- 13.2 Víctima ESCNNA --}}
                <td>
                    @foreach ($sisNnaj->fi_situacion_especials->fi_victima_escnnas as $fi_victima_escnna)
                        {{ "{$fi_victima_escnna->i_prm_victima_escnna->nombre}, " }}
                    @endforeach
                </td>
                {{-- 13.3 Riesgo ESCNNA --}}
                <td>
                    @foreach ($sisNnaj->fi_situacion_especials->fi_riesgo_escnnas as $fi_riesgo_escnna)
                        {{ "{$fi_riesgo_escnna->i_prm_riesgo_escnna->nombre}, " }}
                    @endforeach
                </td>
                {{-- 13.4 ¿Es usted Joven en presunto conflicto con la ley? --}}
                <td>{{$sisNnaj->fi_situacion_especials}}</td>
            @else
                <td>Sin evaluar</td>
                <td>Sin evaluar</td>
                <td>Sin evaluar</td>
                <td>Sin evaluar</td>
            @endif
        @endforeach
    </tbody>
</table>
