@component('bootstrap::table')
    @slot('class')
        table-sm table-hover table-responsive-sm my-2
    @endslot
    <thead class="text-center">
        <th></th>
        <th>D. Inicio</th>
        <th>D2</th>
        <th>D3</th>
        <th>D4</th>
        <th>D5</th>
        <th>D6</th>
        <th>D7</th>
        <th>DMI</th>
    </thead>
    <tbody>
        <tr>
            <th>Tipo de Droga</th>
            <td>
                {{ Form::select('prm_droga_ini_id', $sustancia, null, ['class' => $errors->first('prm_droga_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_ini_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_dos_id', $sustancia, null, ['class' => $errors->first('prm_droga_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_dos_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_tres_id', $sustancia, null, ['class' => $errors->first('prm_droga_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_tres_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_cuatro_id', $sustancia, null, ['class' => $errors->first('prm_droga_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_cuatro_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_cinco_id', $sustancia, null, ['class' => $errors->first('prm_droga_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_cinco_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_seis_id', $sustancia, null, ['class' => $errors->first('prm_droga_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_seis_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_siete_id', $sustancia, null, ['class' => $errors->first('prm_droga_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_siete_id']) }}
            </td>
            <td>
                {{ Form::select('prm_droga_dmi_id', $sustancia, null, ['class' => $errors->first('prm_droga_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_droga_dmi_id']) }}
            </td>
        </tr>
        <tr>
            <th>Frecuencia de uso</th>
            <td>
                {{ Form::select('prm_fre_ini_id', $frecuencia, null, ['class' => $errors->first('prm_fre_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_ini_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_dos_id', $frecuencia, null, ['class' => $errors->first('prm_fre_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_dos_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_tres_id', $frecuencia, null, ['class' => $errors->first('prm_fre_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_tres_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_cuatro_id', $frecuencia, null, ['class' => $errors->first('prm_fre_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_cuatro_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_cinco_id', $frecuencia, null, ['class' => $errors->first('prm_fre_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_cinco_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_seis_id', $frecuencia, null, ['class' => $errors->first('prm_fre_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_seis_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_siete_id', $frecuencia, null, ['class' => $errors->first('prm_fre_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_siete_id']) }}
            </td>
            <td>
                {{ Form::select('prm_fre_dmi_id', $frecuencia, null, ['class' => $errors->first('prm_fre_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_dmi_id']) }}
            </td>
        </tr>
        <tr>
            <th>Vía de administración más frecuente</th>
            <td>
                {{ Form::select('prm_via_ini_id', $via, null, ['class' => $errors->first('prm_via_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_ini_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_dos_id', $via, null, ['class' => $errors->first('prm_via_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_dos_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_tres_id', $via, null, ['class' => $errors->first('prm_via_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_tres_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_cuatro_id', $via, null, ['class' => $errors->first('prm_via_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_cuatro_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_cinco_id', $via, null, ['class' => $errors->first('prm_via_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_cinco_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_seis_id', $via, null, ['class' => $errors->first('prm_via_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_seis_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_siete_id', $via, null, ['class' => $errors->first('prm_via_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_via_siete_id']) }}
            </td>
            <td>
                {{ Form::select('prm_via_dmi_id', $via, null, ['class' => $errors->first('prm_via_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_fre_dmi_id']) }}
            </td>
        </tr>
        <tr>
            <th>Edad en la cual la usó por primera vez</th>
            <td>
                {{ Form::number('primera_ini', null, ['class' => $errors->first('primera_ini') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_dos', null, ['class' => $errors->first('primera_dos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_tres', null, ['class' => $errors->first('primera_tres') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_cuatro', null, ['class' => $errors->first('primera_cuatro') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_cinco', null, ['class' => $errors->first('primera_cinco') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_seis', null, ['class' => $errors->first('primera_seis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_siete', null, ['class' => $errors->first('primera_siete') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('primera_dmi', null, ['class' => $errors->first('primera_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
        </tr>
        <tr>
            <th>¿Ha consumido la sustancia durante el último mes?</th>
            <td>
                {{ Form::select('prm_mes_ini_id', $sino, null, ['class' => $errors->first('prm_mes_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_ini_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_dos_id', $sino, null, ['class' => $errors->first('prm_mes_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_dos_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_tres_id', $sino, null, ['class' => $errors->first('prm_mes_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_tres_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_cuatro_id', $sino, null, ['class' => $errors->first('prm_mes_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_cuatro_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_cinco_id', $sino, null, ['class' => $errors->first('primera_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_cinco_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_seis_id', $sino, null, ['class' => $errors->first('prm_mes_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_seis_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_siete_id', $sino, null, ['class' => $errors->first('prm_mes_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_siete_id']) }}
            </td>
            <td>
                {{ Form::select('prm_mes_dmi_id', $sino, null, ['class' => $errors->first('prm_mes_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mes_dmi_id']) }}
            </td>
        </tr>
        <tr>
            <th>¿Ha consumido la sustancia durante el último año?</th>
            <td>
                {{ Form::select('prm_anio_ini_id', $sino, null, ['class' => $errors->first('prm_anio_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_ini_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_dos_id', $sino, null, ['class' => $errors->first('prm_anio_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_dos_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_tres_id', $sino, null, ['class' => $errors->first('prm_anio_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_tres_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_cuatro_id', $sino, null, ['class' => $errors->first('prm_anio_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_cuatro_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_cinco_id', $sino, null, ['class' => $errors->first('prm_anio_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_cinco_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_seis_id', $sino, null, ['class' => $errors->first('prm_anio_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_seis_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_siete_id', $sino, null, ['class' => $errors->first('prm_anio_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_siete_id']) }}
            </td>
            <td>
                {{ Form::select('prm_anio_dmi_id', $sino, null, ['class' => $errors->first('prm_anio_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_anio_dmi_id']) }}
            </td>
        </tr>
        <tr>
            <th>Edad en la que dejó de consumirla</th>
            <td>
                {{ Form::number('ultima_ini', null, ['class' => $errors->first('ultima_ini') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_dos', null, ['class' => $errors->first('ultima_dos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_tres', null, ['class' => $errors->first('ultima_tres') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_cuatro', null, ['class' => $errors->first('ultima_cuatro') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_cinco', null, ['class' => $errors->first('ultima_cinco') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_seis', null, ['class' => $errors->first('ultima_seis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_siete', null, ['class' => $errors->first('ultima_siete') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
            <td>
                {{ Form::number('ultima_dmi', null, ['class' => $errors->first('ultima_dmi') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
            </td>
        </tr>
        <tr>
            <th>Califique de 1 a 10 el impacto negativo que ha tenido esta droga en su vida</th>
            <td>
                {{ Form::select('prm_imp_ini_id', $impacto, null, ['class' => $errors->first('prm_imp_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_ini_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_dos_id', $impacto, null, ['class' => $errors->first('prm_imp_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_dos_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_tres_id', $impacto, null, ['class' => $errors->first('prm_imp_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_tres_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_cuatro_id', $impacto, null, ['class' => $errors->first('prm_imp_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_cuatro_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_cinco_id', $impacto, null, ['class' => $errors->first('prm_imp_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_cinco_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_seis_id', $impacto, null, ['class' => $errors->first('prm_imp_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_seis_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_siete_id', $impacto, null, ['class' => $errors->first('prm_imp_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_siete_id']) }}
            </td>
            <td>
                {{ Form::select('prm_imp_dmi_id', $impacto, null, ['class' => $errors->first('prm_imp_dmi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_imp_dmi_id']) }}
            </td>
        </tr>
    </tbody>
@endcomponent