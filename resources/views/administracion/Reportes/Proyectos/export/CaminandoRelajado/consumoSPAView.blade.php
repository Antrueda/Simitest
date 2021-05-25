<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>Sustancia</td>
            <td>Edad uso por primera vez</td>
            <td>Ha consumido el último mes?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
            @if (!is_null($sisNnaj->fi_consumo_spas))
                {{-- Sustancia --}}
                <td>
                    @foreach ($sisNnaj->fi_consumo_spas->fi_sustancia_consumidas as $fi_sustancia_consumida)
                        {{ "{$fi_sustancia_consumida->->i_prm_sustancia->nombre}, " }}
                    @endforeach
                </td>
                {{-- Edad uso por primera vez --}}
                <td>
                    @foreach ($sisNnaj->fi_consumo_spas->fi_sustancia_consumidas as $fi_sustancia_consumida)
                        {{ "{$fi_sustancia_consumida->->i_edad_uso}, " }}
                    @endforeach
                </td>
                {{-- Ha consumido el último mes? --}}
                <td>
                    @foreach ($sisNnaj->fi_consumo_spas->fi_sustancia_consumidas as $fi_sustancia_consumida)
                        {{ "{$fi_sustancia_consumida->i_prm_consume->nombre}, " }}
                    @endforeach
                </td>
            @else
                <td>Sin evaluar</td>
                <td>Sin evaluar</td>
                <td>Sin evaluar</td>
            @endif
        @endforeach
    </tbody>
</table>
