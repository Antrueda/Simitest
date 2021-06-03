<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>7.1 ¿Que actividad realiza para generar ingresos?</th>
            <th>A.1 Mencione en qué trabaja</th>
            <th>B.1 (Si Indicó B. TRABAJO INFORMAL):</th>
            <th>C.1 (Si Indicó C. OTRAS ACTIVIDADES):</th>
            <th>D.1 ¿Por qué no genera ingresos?</th>
            <th>7.2 ¿En qué jornada genera los ingresos?</th>
            <th>7.4 ¿Con qué frecuencia recibe el ingreso por la actividad?</th>
            <th>7.5 ¿Tipo de relación laboral?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($sisNnaj->fi_generacion_ingresos))
                    {{-- 7.1 ¿Que actividad realiza para generar ingresos? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_actgeing->nombre ?? 'Sin dato' }}</td>
                    {{-- A.1 Mencione en qué trabaja --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->s_trabajo_formal ?? 'Sin dato' }}</td>
                    {{-- B.1 (Si Indicó B. TRABAJO INFORMAL): --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_trabinfo->nombre ?? 'Sin dato' }}</td>
                    {{-- C.1 (Si Indicó C. OTRAS ACTIVIDADES): --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_otractiv->nombre ?? 'Sin dato' }}</td>
                    {{-- D.1 ¿Por qué no genera ingresos? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_razgeing->nombre ?? 'Sin dato' }}</td>
                    {{-- 7.2 ¿En qué jornada genera los ingresos? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_jorgeing->nombre ?? 'Sin dato' }}</td>
                    {{-- 7.4 ¿Con qué frecuencia recibe el ingreso por la actividad? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_frecingr->nombre ?? 'Sin dato' }}</td>
                    {{-- 7.5 ¿Tipo de relación laboral? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_tiprelab->nombre ?? 'Sin dato' }}</td>
                @else
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
