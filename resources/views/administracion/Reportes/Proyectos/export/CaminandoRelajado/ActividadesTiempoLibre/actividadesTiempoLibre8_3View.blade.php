<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>8.3 ¿Qué actividades realiza en su tiempo libre?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if (!is_null($sisNnaj->fi_actividadestls))
                @foreach ($sisNnaj->fi_actividadestls->fi_actividad_tiempo_libres as $fi_actividad_tiempo_libre)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_actividad_tiempo_libre->i_prm_actividad_tl))
                            {{-- 8.3 ¿Qué actividades realiza en su tiempo libre? --}}
                            <td>
                                {{ $fi_actividad_tiempo_libre->i_prm_actividad_tl->nombre }}
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
