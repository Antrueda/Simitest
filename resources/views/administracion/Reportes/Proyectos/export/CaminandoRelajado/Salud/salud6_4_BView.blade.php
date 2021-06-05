<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>6.4.b) ¿La discapacidad fue producida en la comisión de algún acto ilegal?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if(!is_null($fiDatosBasico->sis_nnaj->fi_saluds))
                @foreach ($fiDatosBasico->sis_nnaj->fi_saluds->fi_discausas as $fi_discausa)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_discausa->prm_discausa))
                            {{-- 6.4.b) ¿La discapacidad fue producida en la comisión de algún acto ilegal? --}}
                            <td>
                                {{ $fi_discausa->prm_discausa->nombre ?? 'Sin dato' }}
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
