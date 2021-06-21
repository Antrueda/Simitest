<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>Seleccionar las causas que originaron tal situación</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if(!is_null($fiDatosBasico->sis_nnaj->fi_justrests) && count($fiDatosBasico->sis_nnaj->fi_justrests->fi_jr_causassis))
                @foreach ($fiDatosBasico->sis_nnaj->fi_justrests->fi_jr_causassis as $fi_jr_causassi)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_jr_causassi->prm_situacion))
                            {{-- Seleccionar las causas que originaron tal situación --}}
                            <td>
                                {{ $fi_jr_causassi->prm_situacion->nombre ?? 'Sin dato' }}
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
