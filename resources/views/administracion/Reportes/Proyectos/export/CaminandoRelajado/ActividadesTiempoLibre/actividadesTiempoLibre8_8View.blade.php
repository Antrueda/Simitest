<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>8.8 Indique sacramentos hechos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if (!is_null($fiDatosBasico->sis_nnaj->fi_actividadestls) && count($fiDatosBasico->sis_nnaj->fi_actividadestls->fi_sacramentos))
                @foreach ($fiDatosBasico->sis_nnaj->fi_actividadestls->fi_sacramentos as $fi_sacramento)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_sacramento->prm_sacrhec))
                            {{-- 8.8 Indique sacramentos hechos --}}
                            <td>
                                {{ $fi_sacramento->prm_sacrhec->nombre ?? 'Sin dato' }}
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
