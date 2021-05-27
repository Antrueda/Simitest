<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @if(!is_null($sisNnaj->fi_formacions))
                @foreach ($sisNnaj->fi_formacions->fi_motivo_vinculacions as $fi_motivo_vinculacion)
                    <tr>
                        @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                        @if(!is_null($fi_motivo_vinculacion->prm_motivinc))
                            {{-- 4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON? --}}
                            <td>
                                {{ $fi_motivo_vinculacion->prm_motivinc->nombre }}
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
