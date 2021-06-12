<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>13.1 Situaciones de vulneraciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if(!is_null($fiDatosBasico->sis_nnaj->fi_situacion_especials) && count($fiDatosBasico->sis_nnaj->fi_situacion_especials))
                @foreach ($fiDatosBasico->sis_nnaj->fi_situacion_especials->fi_situ_vulnera as $fi_situ_vulner)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_situ_vulner->prm_situacion_vulnera))
                            {{-- 13.1 Situaciones de vulneraciones --}}
                            <td>
                                {{ $fi_situ_vulner->prm_situacion_vulnera->nombre ?? 'Sin dato' }}
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
