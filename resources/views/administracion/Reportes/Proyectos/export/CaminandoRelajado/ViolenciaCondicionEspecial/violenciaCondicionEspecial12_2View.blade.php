<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>12.2 El tipo de violencia referenciado corresponde a violencia basada en ?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if(!is_null($fiDatosBasico->sis_nnaj->fi_violencias) && count($fiDatosBasico->sis_nnaj->fi_violencias->fi_violbasas))
                @foreach ($fiDatosBasico->sis_nnaj->fi_violencias->fi_violbasas as $fi_violbasa)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_violbasa->prm_violbasa))
                            {{-- 12.2 El tipo de violencia referenciado corresponde a violencia basada en ? --}}
                            <td>
                                {{ $fi_violbasa->prm_violbasa->nombre ?? 'Sin dato' }}
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
