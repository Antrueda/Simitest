<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>13.4 ¿Es usted Joven en presunto conflicto con la ley?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($fiDatosBasicos as $fiDatosBasico)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($fiDatosBasico->sis_nnaj->fi_situacion_especials))
                    {{-- 13.4 ¿Es usted Joven en presunto conflicto con la ley? --}}
                    <td>{{$fiDatosBasico->sis_nnaj->fi_situacion_especials->prm_presconf->nombre ?? 'Sin dato'}}</td>
                @else
                    <td>Sin evaluar</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
