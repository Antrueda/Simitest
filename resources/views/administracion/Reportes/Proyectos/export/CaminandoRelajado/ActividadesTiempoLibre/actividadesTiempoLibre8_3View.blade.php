<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>8.3 ¿Qué actividades realiza en su tiempo libre?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if (!is_null($fiDatosBasico->sis_nnaj->fi_actividadestls) && count($fiDatosBasico->sis_nnaj->fi_actividadestls->fi_actividad_tiempo_libres))
                @foreach ($fiDatosBasico->sis_nnaj->fi_actividadestls->fi_actividad_tiempo_libres as $fi_actividad_tiempo_libre)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_actividad_tiempo_libre->i_prm_actividad_tl))
                            {{-- 8.3 ¿Qué actividades realiza en su tiempo libre? --}}
                            <td>
                                {{ $fi_actividad_tiempo_libre->i_prm_actividad_tl->nombre ?? 'Sin dato' }}
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
