@component('bootstrap::table')
    @slot('class')
        table-sm table-hover table-responsive-sm my-2
    @endslot
    <thead class="text-center">
        <th colspan="2">3.1 Tipo de droga</th>
        <th>Consumo</th>
        <th>Edad de inicio</th>
        <th>Frecuencia de uso</th>
        <th>Dosis</th>
        <th>Tiempo sin consumo</th>
        <th>Edad en que se dejó de consumirla</th>
    </thead>
    <tbody>
        <tr>
            <td colspan="2">
                {{ Form::label('marihuana', 'Marihuana', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_mari_sino_id', $sinoc, null, ['class' => $errors->first('prm_mari_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mari_sino_id', 'onchange' => 'doc1(this.value)']) }}
            </td>
            <td>
                {{ Form::number('mari_edad', null, ['class' => $errors->first('mari_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'mari_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_mari_frec_id', $frecuencia, null, ['class' => $errors->first('prm_mari_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_mari_frec_id']) }}
            </td>
            <td>
                {{ Form::number('mari_dosis', null, ['class' => $errors->first('mari_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'mari_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('mari_dia', null, ['class' => $errors->first('mari_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'mari_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('mari_mes', null, ['class' => $errors->first('mari_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'mari_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('mari_anio', null, ['class' => $errors->first('mari_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'mari_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('mari_dejo', null, ['class' => $errors->first('mari_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'mari_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('tabaco', 'Tabaco', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_tabaco_sino_id', $sinoc, null, ['class' => $errors->first('prm_tabaco_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_tabaco_sino_id', 'onchange' => 'doc2(this.value)']) }}
            </td>
            <td>
                {{ Form::number('tabaco_edad', null, ['class' => $errors->first('tabaco_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'tabaco_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_tabaco_frec_id', $frecuencia, null, ['class' => $errors->first('prm_tabaco_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_tabaco_frec_id']) }}
            </td>
            <td>
                {{ Form::number('tabaco_dosis', null, ['class' => $errors->first('tabaco_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'tabaco_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('tabaco_dia', null, ['class' => $errors->first('tabaco_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'tabaco_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('tabaco_mes', null, ['class' => $errors->first('tabaco_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'tabaco_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('tabaco_anio', null, ['class' => $errors->first('tabaco_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'tabaco_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('tabaco_dejo', null, ['class' => $errors->first('tabaco_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'tabaco_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('alcohol', 'Alcohol', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_alcohol_sino_id', $sinoc, null, ['class' => $errors->first('prm_alcohol_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_alcohol_sino_id', 'onchange' => 'doc3(this.value)']) }}
            </td>
            <td>
                {{ Form::number('alcohol_edad', null, ['class' => $errors->first('alcohol_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'alcohol_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_alcohol_frec_id', $frecuencia, null, ['class' => $errors->first('prm_alcohol_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_alcohol_frec_id']) }}
            </td>
            <td>
                {{ Form::number('alcohol_dosis', null, ['class' => $errors->first('alcohol_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'alcohol_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('alcohol_dia', null, ['class' => $errors->first('alcohol_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'alcohol_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('alcohol_mes', null, ['class' => $errors->first('alcohol_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'alcohol_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('alcohol_anio', null, ['class' => $errors->first('alcohol_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'alcohol_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('alcohol_dejo', null, ['class' => $errors->first('alcohol_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'alcohol_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('tran', 'Tranquilizantes', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_tran_sino_id', $sinoc, null, ['class' => $errors->first('prm_tran_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_tran_sino_id', 'onchange' => 'doc4(this.value)']) }}
            </td>
            <td>
                {{ Form::number('tran_edad', null, ['class' => $errors->first('tran_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'tran_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_tran_frec_id', $frecuencia, null, ['class' => $errors->first('prm_tran_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_tran_frec_id']) }}
            </td>
            <td>
                {{ Form::number('tran_dosis', null, ['class' => $errors->first('tran_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'tran_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('tran_dia', null, ['class' => $errors->first('tran_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'tran_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('tran_mes', null, ['class' => $errors->first('tran_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'tran_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('tran_anio', null, ['class' => $errors->first('tran_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'tran_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('tran_dejo', null, ['class' => $errors->first('tran_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'tran_dejo']) }}
            </td>
        </tr>
        <tr>
            <td rowspan="3"><strong>Inhalantes</strong></td>
            <td>
                {{ Form::label('pegante', 'Pegante', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_pegante_sino_id', $sinoc, null, ['class' => $errors->first('prm_pegante_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_pegante_sino_id', 'onchange' => 'doc5(this.value)']) }}
            </td>
            <td>
                {{ Form::number('pegante_edad', null, ['class' => $errors->first('pegante_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'pegante_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_pegante_frec_id', $frecuencia, null, ['class' => $errors->first('prm_pegante_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_pegante_frec_id']) }}
            </td>
            <td>
                {{ Form::number('pegante_dosis', null, ['class' => $errors->first('pegante_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'pegante_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('pegante_dia', null, ['class' => $errors->first('pegante_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'pegante_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('pegante_mes', null, ['class' => $errors->first('pegante_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'pegante_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('pegante_anio', null, ['class' => $errors->first('pegante_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'pegante_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('pegante_dejo', null, ['class' => $errors->first('pegante_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'pegante_dejo']) }}
            </td>
        </tr>
        <tr>
            <td>
                {{ Form::label('popper', 'Popper', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_popper_sino_id', $sinoc, null, ['class' => $errors->first('prm_popper_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_popper_sino_id', 'onchange' => 'doc6(this.value)']) }}
            </td>
            <td>
                {{ Form::number('popper_edad', null, ['class' => $errors->first('popper_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'popper_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_popper_frec_id', $frecuencia, null, ['class' => $errors->first('prm_popper_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_popper_frec_id']) }}
            </td>
            <td>
                {{ Form::number('popper_dosis', null, ['class' => $errors->first('popper_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'popper_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('popper_dia', null, ['class' => $errors->first('popper_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'popper_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('popper_mes', null, ['class' => $errors->first('popper_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'popper_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('popper_anio', null, ['class' => $errors->first('popper_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'popper_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('popper_dejo', null, ['class' => $errors->first('popper_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'popper_dejo']) }}
            </td>
        </tr>
        <tr>
            <td>
                {{ Form::label('dick', 'Dick', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_dick_sino_id', $sinoc, null, ['class' => $errors->first('prm_dick_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_dick_sino_id', 'onchange' => 'doc7(this.value)']) }}
            </td>
            <td>
                {{ Form::number('dick_edad', null, ['class' => $errors->first('dick_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'dick_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_dick_frec_id', $frecuencia, null, ['class' => $errors->first('prm_dick_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_dick_frec_id']) }}
            </td>
            <td>
                {{ Form::number('dick_dosis', null, ['class' => $errors->first('dick_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'dick_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('dick_dia', null, ['class' => $errors->first('dick_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'dick_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('dick_mes', null, ['class' => $errors->first('dick_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'dick_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('dick_anio', null, ['class' => $errors->first('dick_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'dick_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('dick_dejo', null, ['class' => $errors->first('dick_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'dick_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('basuco', 'Basuco', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_basuco_sino_id', $sinoc, null, ['class' => $errors->first('prm_basuco_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_basuco_sino_id', 'onchange' => 'doc8(this.value)']) }}
            </td>
            <td>
                {{ Form::number('basuco_edad', null, ['class' => $errors->first('basuco_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'basuco_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_basuco_frec_id', $frecuencia, null, ['class' => $errors->first('prm_basuco_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_basuco_frec_id']) }}
            </td>
            <td>
                {{ Form::number('basuco_dosis', null, ['class' => $errors->first('basuco_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'basuco_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('basuco_dia', null, ['class' => $errors->first('basuco_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'basuco_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('basuco_mes', null, ['class' => $errors->first('basuco_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'basuco_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('basuco_anio', null, ['class' => $errors->first('basuco_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'basuco_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('basuco_dejo', null, ['class' => $errors->first('basuco_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'basuco_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('cocaina', 'Cocaína', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_cocaina_sino_id', $sinoc, null, ['class' => $errors->first('prm_cocaina_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_cocaina_sino_id', 'onchange' => 'doc9(this.value)']) }}
            </td>
            <td>
                {{ Form::number('cocaina_edad', null, ['class' => $errors->first('cocaina_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'cocaina_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_cocaina_frec_id', $frecuencia, null, ['class' => $errors->first('prm_cocaina_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_cocaina_frec_id']) }}
            </td>
            <td>
                {{ Form::number('cocaina_dosis', null, ['class' => $errors->first('cocaina_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'cocaina_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('cocaina_dia', null, ['class' => $errors->first('cocaina_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'cocaina_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('cocaina_mes', null, ['class' => $errors->first('cocaina_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'cocaina_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('cocaina_anio', null, ['class' => $errors->first('cocaina_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'cocaina_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('cocaina_dejo', null, ['class' => $errors->first('cocaina_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'cocaina_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('heroina', 'Heroína y Opiaceos', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_heroina_sino_id', $sinoc, null, ['class' => $errors->first('prm_heroina_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_heroina_sino_id', 'onchange' => 'doc10(this.value)']) }}
            </td>
            <td>
                {{ Form::number('heroina_edad', null, ['class' => $errors->first('heroina_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'heroina_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_heroina_frec_id', $frecuencia, null, ['class' => $errors->first('prm_heroina_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_heroina_frec_id']) }}
            </td>
            <td>
                {{ Form::number('heroina_dosis', null, ['class' => $errors->first('heroina_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'heroina_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('heroina_dia', null, ['class' => $errors->first('heroina_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'heroina_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('heroina_mes', null, ['class' => $errors->first('heroina_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'heroina_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('heroina_anio', null, ['class' => $errors->first('heroina_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'heroina_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('heroina_dejo', null, ['class' => $errors->first('heroina_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'heroina_dejo']) }}
            </td>
        </tr>
        <tr>
            <td rowspan="2"><strong>Sintéticos</strong></td>
            <td>
                {{ Form::label('2cb', '2CB', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_doscb_sino_id', $sinoc, null, ['class' => $errors->first('prm_doscb_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_doscb_sino_id', 'onchange' => 'doc11(this.value)']) }}
            </td>
            <td>
                {{ Form::number('doscb_edad', null, ['class' => $errors->first('doscb_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'doscb_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_doscb_frec_id', $frecuencia, null, ['class' => $errors->first('prm_doscb_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_doscb_frec_id']) }}
            </td>
            <td>
                {{ Form::number('doscb_dosis', null, ['class' => $errors->first('doscb_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'doscb_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('doscb_dia', null, ['class' => $errors->first('doscb_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'doscb_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('doscb_mes', null, ['class' => $errors->first('doscb_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'doscb_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('doscb_anio', null, ['class' => $errors->first('doscb_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'doscb_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('doscb_dejo', null, ['class' => $errors->first('doscb_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'doscb_dejo']) }}
            </td>
        </tr>
        <tr>
            <td>
                {{ Form::label('acidos', 'Ácidos', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_acidos_sino_id', $sinoc, null, ['class' => $errors->first('prm_acidos_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_acidos_sino_id', 'onchange' => 'doc12(this.value)']) }}
            </td>
            <td>
                {{ Form::number('acidos_edad', null, ['class' => $errors->first('acidos_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'acidos_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_acidos_frec_id', $frecuencia, null, ['class' => $errors->first('prm_acidos_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_acidos_frec_id']) }}
            </td>
            <td>
                {{ Form::number('acidos_dosis', null, ['class' => $errors->first('acidos_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'acidos_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('acidos_dia', null, ['class' => $errors->first('acidos_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'acidos_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('acidos_mes', null, ['class' => $errors->first('acidos_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'acidos_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('acidos_anio', null, ['class' => $errors->first('acidos_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'acidos_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('acidos_dejo', null, ['class' => $errors->first('acidos_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'acidos_dejo']) }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{ Form::label('lsd', 'Alucinógeno', ['class' => 'control-label col-form-label-sm']) }}
            </td>
            <td>
                {{ Form::select('prm_lsd_sino_id', $sinoc, null, ['class' => $errors->first('prm_lsd_sino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_lsd_sino_id', 'onchange' => 'doc13(this.value)']) }}
            </td>
            <td>
                {{ Form::number('lsd_edad', null, ['class' => $errors->first('lsd_edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'lsd_edad']) }}
            </td>
            <td>
                {{ Form::select('prm_lsd_frec_id', $frecuencia, null, ['class' => $errors->first('prm_lsd_frec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_lsd_frec_id']) }}
            </td>
            <td>
                {{ Form::number('lsd_dosis', null, ['class' => $errors->first('lsd_dosis') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'lsd_dosis']) }}
            </td>
            <td>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::number('lsd_dia', null, ['class' => $errors->first('lsd_dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30', 'id' => 'lsd_dia']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('lsd_mes', null, ['class' => $errors->first('lsd_mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11', 'id' => 'lsd_mes']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::number('lsd_anio', null, ['class' => $errors->first('lsd_anio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'lsd_anio']) }}
                    </div>
                </div>
            </td>
            <td>
                {{ Form::number('lsd_dejo', null, ['class' => $errors->first('lsd_dejo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', 'id' => 'lsd_dejo']) }}
            </td>
        </tr>
    </tbody>
@endcomponent
