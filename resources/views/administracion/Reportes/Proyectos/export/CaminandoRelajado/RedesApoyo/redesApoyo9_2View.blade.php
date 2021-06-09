<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>9.2</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            @if(!is_null($fiDatosBasico->sis_nnaj->fi_red_apoyo_actuals) && count($fiDatosBasico->sis_nnaj->fi_red_apoyo_actuals))
                @foreach ($fiDatosBasico->sis_nnaj->fi_red_apoyo_antecedentes as $fi_red_apoyo_antecedente)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_red_apoyo_antecedente->s_servicio))
                            {{-- 9.2 --}}
                            <td>
                                {{ $fi_red_apoyo_antecedente->s_servicio ?? 'Sin dato' }}
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
