<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>Seleccionar las causas que pueden llegar a materializar el riesgo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if(!is_null($sisNnaj->fi_justrests))
                @foreach ($sisNnaj->fi_justrests->fi_jr_causasmos as $fi_jr_causasmo)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_jr_causasmo->prm_riesgo))
                            {{-- Seleccionar las causas que pueden llegar a materializar el riesgo --}}
                            <td>
                                {{ $fi_jr_causasmo->prm_riesgo->nombre }}
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
