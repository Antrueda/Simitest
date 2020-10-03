<div class="row">
    <div class="col-md">
        {{ Form::label('prm_actividad_id', '9.1 ¿Qué actividades realiza para generar ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_actividad_id', $todoxxxx['activida'], null, ['class' => $errors->first('prm_actividad_id') ? 'form-control form-control-sm is-invalid' : 'form-control float-right form-control-sm', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('prm_actividad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_actividad_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('trabaja', '9.2 ¿Mencione en qué trabaja?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('trabaja', null, ['class' => $errors->first('trabaja') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();",'maxlenght' => '120']) }}
        @if($errors->has('trabaja'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('trabaja') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_informal_id', '9.3. Seleccione', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_informal_id', $todoxxxx['informal'], null, ['class' => $errors->first('prm_informal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_informal_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_informal_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div>
            {{ Form::label('prm_otra_id', '9.4. Seleccione', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('prm_otra_id', $todoxxxx['otrosxxx'], null, ['class' => $errors->first('prm_otra_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('prm_otra_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_otra_id') }}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md">
        {{ Form::label('prm_no_id', '9.5 ¿Por qué no genera ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_no_id', $todoxxxx['ningunax'], null, ['class' => $errors->first('prm_no_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc1(this.value)' ]) }}
        @if($errors->has('prm_no_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_no_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('cuanto', 'Hace cuánto', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::label('prm_periodo_id', 'tiempo', ['class' => 'control-label col-form-label-sm d-none']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::number('cuanto', null, ['class' => $errors->first('cuanto') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '99',$todoxxxx['cuantoxx']]) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_periodo_id', $todoxxxx['tiempoxx'], null, ['class' => $errors->first('prm_periodo_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
            </div>
        </div>
        @if($errors->has('cuanto'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('cuanto') }}
            </div>
        @endif
        @if($errors->has('prm_periodo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_periodo_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('jornada_entre', '9.6. ¿En qué jornada genera los ingresos?', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
        <div class="row">
            {{ Form::select('prm_jornada_id' , $todoxxxx["jorgener"], null, ['class' => 'form-control form-control-sm','id'=>'prm_jornada_id']) }}
        </div>
        <div class="row">
            <div class="col-md">
                {{ Form::label('prm_jor_entre_id', 'Entre', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
            </div>
            <div class="col-md">
                {{ Form::number('jornada_entre', null, ['class' => $errors->first('jornada_entre') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '12']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_jor_entre_id', $todoxxxx['ampmxxxx'], null, ['class' => $errors->first('prm_jor_entre_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                {{ Form::label('jornada_a', 'A', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
                {{ Form::label('prm_jor_a_id', 'A', ['class' => 'control-label col-md-8 col-form-label-sm d-none']) }}
            </div>
            <div class="col-md">
                {{ Form::number('jornada_a', null, ['class' => $errors->first('jornada_a') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '12']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_jor_a_id', $todoxxxx['ampmxxxx'], null, ['class' => $errors->first('prm_jor_a_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
            </div>
        </div>
        @if($errors->has('jornada_entre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('jornada_entre') }}
            </div>
        @endif
        @if($errors->has('prm_jor_entre_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_jor_entre_id') }}
            </div>
        @endif
        @if($errors->has('jornada_a'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('jornada_a') }}
            </div>
        @endif
        @if($errors->has('prm_jor_a_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_jor_a_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('dias', '9.7 ¿En qué días?', ['class' => 'control-label col-form-label-sm']) }}
        <div id="dias_div">
            {{ Form::select('dias[]', $todoxxxx['semanaxx'], null, ['class' => $errors->first('dias') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'dias', 'multiple']) }}
        </div>
        @if($errors->has('dias'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('dias') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_frecuencia_id', '9.8. ¿Con qué frecuencia recibe el ingreso por la actividad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_frecuencia_id', $todoxxxx['frecuenc'], null, ['class' => $errors->first('prm_frecuencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' => 'prm_frecuencia_id']) }}
        @if($errors->has('prm_frecuencia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_frecuencia_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    
    <div class="col-md">
        {{ Form::label('aporte', '9.9. Total de aportes mensuales al hogar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('aporte', null, ['class' => $errors->first('aporte') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0','id' => 'aporte']) }}
        @if($errors->has('aporte'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('aporte') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_laboral_id', '9.10. ¿Tipo de relación laboral?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_laboral_id', $todoxxxx['laboralx'], null, ['class' => $errors->first('prm_laboral_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' => 'prm_laboral_id']) }}
        @if($errors->has('prm_laboral_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_laboral_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_aporta_id', '9.11. ¿En el hogar usted realiza algún aporte mensual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_aporta_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_aporta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)','id' => 'prm_aporta_id']) }}
        @if($errors->has('prm_aporta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_aporta_id') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('porque', '¿Porqué?:', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' => 'porque', 'placeholder' => 'Porqué', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
                @if($errors->has('porque'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('porque') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('cuanto_aporta', '¿Cuánto?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('cuanto_aporta', null, ['class' => $errors->first('cuanto_aporta') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0','id' => 'cuanto_aporta']) }}
                @if($errors->has('cuanto_aporta'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('cuanto_aporta') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('expectativa', '9.12. Describa las expectativas de el/la Joven a nivel laboral y/o económico:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('expectativa', null, ['class' => $errors->first('expectativa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' => 'expectativa', 'placeholder' => 'Expectativas', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('expectativa'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('expectativa') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('quienes', '9.13. ¿Quién (es) aporta(n)?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('quienes[]', $todoxxxx['parentes'], null, ['class' => $errors->first('quienes') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'quienes', 'multiple']) }}
        @if($errors->has('quienes'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('quienes') }}
            </div>
        @endif
        {{ Form::label('labores', '9.14. Labor que desempeña para conseguir los ingresos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('labores[]', $todoxxxx['actividx'], null, ['class' => $errors->first('labores') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'labores', 'multiple']) }}
        @if($errors->has('labores'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('labores') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('descripcion', '9.15. Descripción:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'descripcion','placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('descripcion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion') }}
            </div>
        @endif
    </div>
</div>
<div class="row">

   <div class="col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
