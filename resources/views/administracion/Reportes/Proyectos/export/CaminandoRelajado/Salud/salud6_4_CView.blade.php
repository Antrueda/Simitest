<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>6.4 c) ¿Ha sido víctima de ataques con:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if(!is_null($fiDatosBasico->sis_nnaj->fi_saluds) && count($fiDatosBasico->sis_nnaj->fi_saluds))
                @foreach ($fiDatosBasico->sis_nnaj->fi_saluds->fi_victataqs as $fi_victataq)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_victataq->prm_victataq))
                            {{-- 6.4 c) ¿Ha sido víctima de ataques con: --}}
                            <td>
                                {{ $fi_victataq->prm_victataq->nombre ?? 'Sin dato' }}
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


