<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <td>12.1 ¿Presenta algún tipo de violencia?</td>
            <td>12.1 A Ha ejercido algún tipo de presunta violencia durante la actividad en conflicto con la ley?</td>
            <td>12.1.B Que tipo de presuntas lesiones ha cometido durante la actividad?</td>
            <td>12.2 El tipo de violencia referenciado corresponde a violencia basada en ?</td>
            <td>12.3 ¿Qué condición especial presenta?</td>
            <td>12.5 ¿Es cabeza de familia?</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                @if (!is_null($sisNnaj->fi_violencias))
                    {{-- 12.1 ¿Presenta algún tipo de violencia? --}}
                    <td>{{$sisNnaj->fi_violencias->i_prm_presenta_violencia->nombre}}</td>
                    {{-- 12.1 A Ha ejercido algún tipo de presunta violencia durante la actividad en conflicto con la ley? --}}
                    <td>{{$sisNnaj->fi_violencias->prm_ejerviol->nombre}}</td>
                    {{-- 12.3 ¿Qué condición especial presenta? --}}
                    <td>{{$sisNnaj->fi_violencias->i_prm_condicion_presenta->nombre}}</td>
                    {{-- 12.5 ¿Es cabeza de familia? --}}
                    <td>{{$sisNnaj->fi_violencias->prm_cabefami->nombre}}</td>
                @else
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
