<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>11.2 Edad uso por primera vez</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if (!is_null($fiDatosBasico->sis_nnaj->fi_consumo_spas) && count($fiDatosBasico->sis_nnaj->fi_consumo_spas->fi_sustancia_consumidas))
                @foreach ($fiDatosBasico->sis_nnaj->fi_consumo_spas->fi_sustancia_consumidas as $fi_sustancia_consumida)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_sustancia_consumida->i_edad_uso))
                            {{-- 11.2 Edad uso por primera vez --}}
                            <td>
                                {{ $fi_sustancia_consumida->i_edad_uso ?? 'Sin dato' }}
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
