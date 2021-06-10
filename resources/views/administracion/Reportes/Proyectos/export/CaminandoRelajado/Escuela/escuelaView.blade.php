<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>4.1 ¿Sabe leer?</th>
            <th>4.2 ¿Sabe escribir?</th>
            <th>4.3 ¿Sabe operaciones básicas matemáticas?</th>
            <th>4.4 ¿Actualmente estudia?</th>
            <th>4.5 ¿En qué jornada estudia?</th>
            <th>4.8 ¿Cuánto tiempo lleva sin estudiar?</th>
            <th>4.9 ¿Cuál es su último nivel de estudio?</th>
            <th>4.10 Último grado, modulo o semestre aprobado</th>
            <th>4.11 ¿Tiene certificado del último nivel de estudio alcanzado?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if(!is_null($fiDatosBasico->sis_nnaj->fi_formacions))
                    {{-- 4.1 ¿Sabe leer? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->i_prm_lee->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.2 ¿Sabe escribir? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->i_prm_escribe->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.3 ¿Sabe operaciones básicas matemáticas? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->prm_operacio->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.4 ¿Actualmente estudia? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->i_prm_estudia->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.5 ¿En qué jornada estudia? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->prm_jornestu->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.8 ¿Cuánto tiempo lleva sin estudiar? --}}
                    <td>{{ "{$fiDatosBasico->sis_nnaj->fi_formacions->anosines} Año(s) - {$fiDatosBasico->sis_nnaj->fi_formacions->mesinest} Mes(es) - {$fiDatosBasico->sis_nnaj->fi_formacions->diasines} Dia(s)." ?? 'Sin dato' }}</td>
                    {{-- 4.9 ¿Cuál es su último nivel de estudio? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->prm_ultniest->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.10 Último grado, modulo o semestre aprobado --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->prm_ultgrapr->nombre ?? 'Sin dato' }}</td>
                    {{-- 4.11 ¿Tiene certificado del último nivel de estudio alcanzado? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_formacions->prm_cerulniv->nombre ?? 'Sin dato' }}</td>
                @else
                    <td>Sin evaluar</td>
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
