<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>8.1 ¿Cuánto tiempo al día permanece en la calle?</th>
            <th>8.2 ¿Cuántos días a la semana?</th>
            <th>8.3 ¿Qué actividades realiza en su tiempo libre?</th>
            <th>8.4 ¿Pertecene a algún grupo, parche u organización?</th>
            <th>8.4 A ¿Por las acciones en las cuales presuntamente está en conflicto con la ley ha actuado en:</th>
            <th>8.5 ¿Tiene acceso a recreación?</th>
            <th>8.6 ¿Tiene prácticas religiosas?</th>
            <th>8.7 ¿Cuál religión practica?</th>
            <th>8.8 Indique sacramentos hechos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($sisNnaj->fi_actividadestls))
                    {{-- 8.1 ¿Cuánto tiempo al día permanece en la calle? --}}
                    <td>{{ $sisNnaj->fi_actividadestls->i_horas_permanencia_calle ?? 'Sin dato' }}</td>
                    {{-- 8.2 ¿Cuántos días a la semana? --}}
                    <td>{{ $sisNnaj->fi_actividadestls->i_dias_permanencia_calle ?? 'Sin dato' }}</td>
                    {{-- 8.4 ¿Pertecene a algún grupo, parche u organización? --}}
                    <td>{{ $sisNnaj->fi_actividadestls->i_prm_pertenece_parche->nombre ?? 'Sin dato' }}</td>
                    {{-- 8.5 ¿Tiene acceso a recreación? --}}
                    <td>{{ $sisNnaj->fi_actividadestls->i_prm_acceso_recreacion->nombre ?? 'Sin dato' }}</td>
                    {{-- 8.6 ¿Tiene prácticas religiosas? --}}
                    <td>{{ $sisNnaj->fi_actividadestls->i_prm_practica_religiosa->nombre ?? 'Sin dato' }}</td>
                    {{-- 8.7 ¿Cuál religión practica? --}}
                    <td>{{ $sisNnaj->fi_actividadestls->i_prm_religion_practica->nombre ?? 'Sin dato' }}</td>
                @else
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
