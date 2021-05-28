<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>13.3 Riesgo ESCNNA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if(!is_null($sisNnaj->fi_situacion_especials))
                @foreach ($sisNnaj->fi_situacion_especials->fi_riesgo_escnnas as $fi_riesgo_escnna)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_riesgo_escnna->i_prm_riesgo_escnna))
                            {{-- 13.3 Riesgo ESCNNA --}}
                            <td>
                                {{ $fi_riesgo_escnna->i_prm_riesgo_escnna->nombre }}
                            </td>
                        @else
                            <td>Sin evaluar</td>
                        @endif
                    </tr>
                @endforeach
            @else
                <tr>
                    @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                    <td>Sin evaluar</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

