<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>11.3 Ha consumido el último mes?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if (!is_null($sisNnaj->fi_consumo_spas))
                @foreach ($sisNnaj->fi_consumo_spas->fi_sustancia_consumidas as $fi_sustancia_consumida)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if (!is_null($fi_sustancia_consumida->i_prm_consume))
                            {{-- 11.3 Ha consumido el último mes? --}}
                            <td>
                                {{ $fi_sustancia_consumida->i_prm_consume->nombre ?? 'Sin dato' }}
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
