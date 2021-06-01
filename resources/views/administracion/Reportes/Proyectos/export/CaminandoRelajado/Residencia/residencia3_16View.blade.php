{{-- {{dd($sisNnajs[0]->FiResidencia)}} --}}
<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>3.16 Condiciones del ambiente y riesgo cerca de la vivienda / lugar de focalización (Para CHC)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if(!is_null($sisNnaj->FiResidencia) && count($sisNnaj->FiResidencia))
                @foreach ($sisNnaj->FiResidencia->fi_condicion_ambientes as $fi_condicion_ambiente)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_condicion_ambiente->i_prm_condicion_amb))
                            {{-- 3.16 Condiciones del ambiente y riesgo cerca de la vivienda / lugar de focalización (Para CHC) --}}
                            <td>
                                {{ $fi_condicion_ambiente->i_prm_condicion_amb->nombre }}
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

