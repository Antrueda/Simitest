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
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($sisNnaj->fi_saluds))
                    {{-- 6.1 Estado de afiliación en Salud --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_regisalu->nombre }}</td>
                    {{-- 6.3 Puntaje Sisben --}}
                    <td>{{ $sisNnaj->fi_saluds->d_puntaje_sisben }}</td>
                    {{-- 6.4 ¿Tiene algún tipo de discapacidad? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_tiendisc->nombre }}</td>
                    {{-- 6.4 a) Indicar tipo --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_tipodisca->nombre }}</td>
                    {{-- 6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_dispeind->nombre }}</td>
                    {{-- 6.9 ¿Presenta algún problema de salud? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_probsalu->nombre }}</td>
                    {{-- 6.11 ¿Tiene hijos? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_tienhijo->nombre }}</td>
                    {{-- 6.13 ¿Tiene conocimiento sobre métodos anticonceptivos? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_conometo->nombre }}</td>
                    {{-- 6.14 ¿Usa métodos anticonceptivos? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_usametod->nombre }}</td>
                    {{-- 6.15 ¿Cuál método? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_cualmeto->nombre }}</td>
                    {{-- 6.16 ¿Lo usa voluntariamente? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_usovolun->nombre }}</td>
                    {{--  --}}
                    {{-- 6.18 ¿Cuántas comidas en promedio consume al día? --}}
                    <td>{{ $sisNnaj->fi_saluds->i_comidas_diarias }}</td>
                    {{-- 6.19 ¿Por qué no consumió las 5 comidas diarias? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_razcicom->nombre }}</td>
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
