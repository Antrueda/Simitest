<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>8.4 A ¿Por las acciones en las cuales presuntamente está en conflicto con la ley ha actuado en:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if (!is_null($fiDatosBasico->sis_nnaj->fi_actividadestls) && count($fiDatosBasico->sis_nnaj->fi_actividadestls->fi_acciones))
                @foreach ($fiDatosBasico->sis_nnaj->fi_actividadestls->fi_acciones as $fi_accione)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_accione->prm_accione))
                            {{-- 8.4 A ¿Por las acciones en las cuales presuntamente está en conflicto con la ley ha actuado en: --}}
                            <td>
                                {{ $fi_accione->prm_accione->nombre ?? 'Sin dato' }}
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
