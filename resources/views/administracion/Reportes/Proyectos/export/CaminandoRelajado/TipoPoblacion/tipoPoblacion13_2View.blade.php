<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>13.2 Víctima ESCNNA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if(!is_null($sisNnaj->fi_situacion_especials))
                @foreach ($sisNnaj->fi_situacion_especials->fi_victima_escnnas as $fi_victima_escnna)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_victima_escnna->i_prm_victima_escnna))
                            {{-- 13.2 Víctima ESCNNA --}}
                            <td>
                                {{ $fi_victima_escnna->i_prm_victima_escnna->nombre }}
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



