<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?</td>
            <td>¿Actualmente se encuentra vinculado al SRPA?</td>
            <td>¿Hace cuánto?</td>
            <td>Motivo de la vinculación al SRPA</td>
            <td>¿Qué sanción pedagógica se encuentra cumpliendo?</td>
            <td>10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?</td>
            <td>¿Actualmente se encuentra en conflicto con la ley - SPOA?</td>
            <td>¿Hace cuánto?</td>
            <td>Motivo de la vinculación al SPOA</td>
            <td>¿En qué modalidad de cumplimiento de la pena se encuentra?</td>
            <td>10.3A ¿Ha estado privado de la libertad?</td>
            <td>10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?</td>
            <td>10.5 ¿Se cuentra en riesgo de participar en actos delictivos?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($sisNnaj->fi_justrests))
                    {{-- 10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_srpas->i_prm_ha_estado_srpa->nombre ?? 'Sin dato'}}</td>
                    {{-- ¿Actualmente se encuentra vinculado al SRPA? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_srpas->i_prm_actualmente_srpa->nombre ?? 'Sin dato'}}</td>
                    {{-- ¿Hace cuánto? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_srpas->i_cuanto_srpa ?? 'Sin dato'}} - {{$sisNnaj->fi_justrests->fi_proceso_srpas->i_prm_tipo_tiempo_srpa->nombre ?? 'Sin dato'}}</td>
                    {{-- Motivo de la vinculación al SRPA --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_srpas->i_prm_motivo_srpa->nombre ?? 'Sin dato'}}</td>
                    {{-- ¿Qué sanción pedagógica se encuentra cumpliendo? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_srpas->i_prm_sancion_srpa->nombre ?? 'Sin dato'}}</td>
                    {{-- 10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_spoas->i_prm_ha_estado_spoa->nombre ?? 'Sin dato'}}</td>
                    {{-- ¿Actualmente se encuentra en conflicto con la ley - SPOA? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_spoas->i_prm_actualmente_spoa->nombre ?? 'Sin dato'}}</td>
                    {{-- ¿Hace cuánto? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_spoas->i_cuanto_spoa ?? 'Sin dato'}} - {{$sisNnaj->fi_justrests->fi_proceso_spoas->i_prm_tipo_tiempo_spoa->nombre ?? 'Sin dato'}}</td>
                    {{-- Motivo de la vinculación al SPOA --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_spoas->i_prm_motivo_spoa->nombre ?? 'Sin dato'}}</td>
                    {{-- ¿En qué modalidad de cumplimiento de la pena se encuentra? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_spoas->i_prm_mod_cumple_pena->nombre ?? 'Sin dato'}}</td>
                    {{-- 10.3A ¿Ha estado privado de la libertad? --}}
                    <td>{{$sisNnaj->fi_justrests->fi_proceso_spoas->i_prm_ha_estado_preso->nombre ?? 'Sin dato'}}</td>
                    {{-- 10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia? --}}
                    <td>{{$sisNnaj->fi_justrests->i_prm_vinculado_violencia->nombre ?? 'Sin dato'}}</td>
                    {{-- 10.5 ¿Se cuentra en riesgo de participar en actos delictivos? --}}
                    <td>{{$sisNnaj->fi_justrests->i_prm_riesgo_participar->nombre ?? 'Sin dato'}}</td>
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
