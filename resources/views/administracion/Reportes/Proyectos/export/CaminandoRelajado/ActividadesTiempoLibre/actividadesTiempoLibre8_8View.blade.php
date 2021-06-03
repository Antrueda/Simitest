<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>8.8 Indique sacramentos hechos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if (!is_null($sisNnaj->fi_actividadestls))
                @foreach ($sisNnaj->fi_actividadestls->fi_sacramentos as $fi_sacramento)
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
