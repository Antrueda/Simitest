<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>9</th>
            <th>9.2</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
            @if (!is_null($sisNnaj->fi_red_apoyo_actuals))
                {{-- 9 --}}
                <td>
                    @foreach ($sisNnaj->fi_red_apoyo_actuals as $fi_red_apoyo_actual)
                        {{ "{$fi_red_apoyo_actual->i_prm_tipo_red->nombre}, " }}
                    @endforeach
                </td>
                {{-- 9.2 --}}
                <td>
                    @foreach ($sisNnaj->fi_red_apoyo_antecedentes as $fi_red_apoyo_antecedente)
                        {{ "{$fi_red_apoyo_antecedente->s_servicio}, " }}
                    @endforeach
                </td>
            @else
                <td>Sin evaluar</td>
                <td>Sin evaluar</td>
            @endif
        @endforeach
    </tbody>
</table>
