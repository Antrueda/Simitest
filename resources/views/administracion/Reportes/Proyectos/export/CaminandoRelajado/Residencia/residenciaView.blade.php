<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>3.1 ¿Tiene lugar de residencia en dónde dormir?</th>
            <th>3.2 Tipo de residencia o lugar donde duerme</th>
            <th>3.3 La residencia es:</th>
            <th>3.5 Estrato socioeconómico</th>
            <th>3.6 Espacio donde parcha</th>
            <th>3.6A Nombre del espacio</th>
            <th>3.8 Localidad</th>
            <th>3.11 Barrio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
        <tr>
            {{-- {{dd($sisNnaj)}} --}}
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
            @if (!is_null($fiDatosBasico->sis_nnaj->FiResidencia))
                {{-- 3.1 ¿Tiene lugar de residencia en dónde dormir? --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->i_prm_tiene_dormir->nombre ?? 'Sin dato'  }}</td>
                {{-- 3.2 Tipo de residencia o lugar donde duerme --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->i_prm_tipo_duerme->nombre ?? 'Sin dato' }}</td>
                {{-- 3.3 La residencia es: --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->i_prm_tipo_tenencia->nombre ?? 'Sin dato' }}</td>
                {{-- 3.5 Estrato socioeconómico --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->i_prm_estrato->nombre ?? 'Sin dato' }}</td>
                {{-- 3.6 Espacio donde parcha --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->i_prm_espacio_parcha->nombre ?? 'Sin dato' }}</td>
                {{-- 3.6A Nombre del espacio --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->s_nombre_espacio_parcha ?? 'Sin dato' }}</td>
                {{-- 3.8 Localidad --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->sis_barrio->sis_localupz->sis_localidad->s_localidad ?? 'Sin dato' }}</td>
                {{-- 3.11 Barrio --}}
                <td>{{ $fiDatosBasico->sis_nnaj->FiResidencia->sis_barrio->sis_barrio->s_barrio ?? 'Sin dato' }}</td>
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
