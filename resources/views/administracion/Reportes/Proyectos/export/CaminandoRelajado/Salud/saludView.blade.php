<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>6.1 Estado de afiliación en Salud</th>
            <th>6.3 Puntaje Sisben</th>
            <th>6.4 ¿Tiene algún tipo de discapacidad?</th>
            <th>6.4 a) Indicar tipo</th>
            <th>6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas?</th>
            <th>6.9 ¿Presenta algún problema de salud?</th>
            <th>6.11 ¿Tiene hijos?</th>
            <th>6.13 ¿Tiene conocimiento sobre métodos anticonceptivos?</th>
            <th>6.14 ¿Usa métodos anticonceptivos?</th>
            <th>6.15 ¿Cuál método?</th>
            <th>6.16 ¿Lo usa voluntariamente?</th>
            {{-- <th>6.17</th> --}}
            <th>6.18 ¿Cuántas comidas en promedio consume al día?</th>
            <th>6.19 ¿Por qué no consumió las 5 comidas diarias?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($fiDatosBasico->sis_nnaj->fi_saluds))
                    {{-- 6.1 Estado de afiliación en Salud --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_regisalu->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.3 Puntaje Sisben --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->d_puntaje_sisben ?? 'Sin dato' }}</td>
                    {{-- 6.4 ¿Tiene algún tipo de discapacidad? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_tiendisc->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.4 a) Indicar tipo --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_tipodisca->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_dispeind->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.9 ¿Presenta algún problema de salud? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_probsalu->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.11 ¿Tiene hijos? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_tienhijo->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.13 ¿Tiene conocimiento sobre métodos anticonceptivos? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_conometo->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.14 ¿Usa métodos anticonceptivos? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_usametod->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.15 ¿Cuál método? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_cualmeto->nombre ?? 'Sin dato' }}</td>
                    {{-- 6.16 ¿Lo usa voluntariamente? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_usovolun->nombre ?? 'Sin dato' }}</td>
                    {{--  --}}
                    {{-- 6.18 ¿Cuántas comidas en promedio consume al día? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->i_comidas_diarias ?? 'Sin dato' }}</td>
                    {{-- 6.19 ¿Por qué no consumió las 5 comidas diarias? --}}
                    <td>{{ $fiDatosBasico->sis_nnaj->fi_saluds->prm_razcicom->nombre ?? 'Sin dato' }}</td>
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
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
