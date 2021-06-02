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
        @foreach ($sisNnajs as $sisNnaj)
        <tr>
            {{dd($sisNnaj)}}
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
            @if (!is_null($sisNnaj->FiResidencia))
                {{-- 3.1 ¿Tiene lugar de residencia en dónde dormir? --}}
                <td>{{ $sisNnaj->FiResidencia->i_prm_tiene_dormir->nombre  }}</td>
                {{-- 3.2 Tipo de residencia o lugar donde duerme --}}
                <td>{{ $sisNnaj->FiResidencia->i_prm_tipo_duerme->nombre }}</td>
                {{-- 3.3 La residencia es: --}}
                <td>{{ $sisNnaj->FiResidencia->i_prm_tipo_tenencia->nombre }}</td>
                {{-- 3.5 Estrato socioeconómico --}}
                <td>{{ $sisNnaj->FiResidencia->i_prm_estrato->nombre }}</td>
                {{-- 3.6 Espacio donde parcha --}}
                <td>{{ $sisNnaj->FiResidencia->i_prm_espacio_parcha->nombre }}</td>
                {{-- 3.6A Nombre del espacio --}}
                <td>{{ $sisNnaj->FiResidencia->s_nombre_espacio_parcha }}</td>
                {{-- 3.8 Localidad --}}
                <td>{{ $sisNnaj->FiResidencia->sis_barrio->sis_localupz->sis_localidad->s_localidad }}</td>
                {{-- 3.11 Barrio --}}
                <td>{{ $sisNnaj->FiResidencia->sis_barrio->sis_barrio->s_barrio }}</td>
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
