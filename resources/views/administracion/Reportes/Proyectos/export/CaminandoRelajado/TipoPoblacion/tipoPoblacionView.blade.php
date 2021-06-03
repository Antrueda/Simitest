<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>13.4 ¿Es usted Joven en presunto conflicto con la ley?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($sisNnaj->fi_situacion_especials))
                    {{-- 13.4 ¿Es usted Joven en presunto conflicto con la ley? --}}
                    <td>{{$sisNnaj->fi_situacion_especials ?? 'Sin dato'}}</td>
                @else
                    <td>Sin evaluar</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
