<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>7.3 ¿En qué días?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if (!is_null($sisNnaj->fi_generacion_ingresos))
                @foreach ($sisNnaj->fi_generacion_ingresos->fi_dias_genera_ingresos as $fi_dias_genera_ingreso)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_dias_genera_ingreso->prm_diagener))
                            {{-- 7.3 ¿En qué días? --}}
                            <td>
                                {{ $fi_dias_genera_ingreso->prm_diagener->nombre }}
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
