<div class="row">
    <div class="col-md">
        {{ Form::label('prm_evento_id', '14.1 ¿En algún momento de su vida le ha ocurrido algún evento sexual negativo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_evento_id', $todoxxxx['sinoxxxx'], null,
            ['class' => $errors->first('prm_evento_id') ? 'form-control form-control-sm is-invalid' :
                'form-control form-control-sm', 'onchange' => 'doc(this.value)',
                'autofocus']) }}
        @if($errors->has('prm_evento_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_evento_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_momento_id', '14.2 Momento en el que se presentó el evento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_momento_id', $todoxxxx['eventoxx'], null, ['class' => $errors->first('prm_momento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
        @if($errors->has('prm_momento_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_momento_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('dia', '14.3 ¿Hace cuánto tiempo fué el 1er. Evento?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99']) }}
                @if($errors->has('dia'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('dia') }}
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('mes', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99']) }}
                @if($errors->has('mes'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('mes') }}
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('ano', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99']) }}
                @if($errors->has('ano'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('ano') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
   
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_persona_id', '14.4 ¿Qué persona se encuentra involucrada en este evento?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_persona_id', $todoxxxx['familiar'], null, ['class' => $errors->first('prm_persona_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_persona_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_persona_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_tipo_id', '14.5 ¿Cuál fué el tipo de evento sexual negativo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipo_id', $todoxxxx['sexualxx'], null, ['class' => $errors->first('prm_tipo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)']) }}
        @if($errors->has('prm_tipo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipo_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('dia_ult', '14.6 ¿Hace cuánto tiempo fué el último evento?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::number('dia_ult', null, ['class' => $errors->first('dia_ult') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99']) }}
                @if($errors->has('dia_ult'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('dia_ult') }}
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('mes_ult', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mes_ult', null, ['class' => $errors->first('mes_ult') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99']) }}
                @if($errors->has('mes_ult'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('mes_ult') }}
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('ano_ult', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('ano_ult', null, ['class' => $errors->first('ano_ult') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99']) }}
                @if($errors->has('anov'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('ano_ult') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_momento_ult_id', '14.7 Momento en el que se presentó el evento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_momento_ult_id', $todoxxxx['eventoxx'], null, ['class' => $errors->first('prm_momento_ult_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_momento_ult_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_momento_ult_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_persona_ult_id', '14.8 ¿Qué persona se encuentra involucrada en este evento?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_persona_ult_id', $todoxxxx['familiar'], null, ['class' => $errors->first('prm_persona_ult_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_persona_ult_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_persona_ult_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_tipo_ult_id', '14.9 ¿Cuál fué el tipo de evento sexual negativo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipo_ult_id', $todoxxxx['sexualxx'], null, ['class' => $errors->first('prm_tipo_ult_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_tipo_ult_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipo_ult_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_convive_id', '14.10 ¿Actualmente convive con el presunto agresor?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_convive_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_convive_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_convive_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_convive_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_presencia_id', '14.11 ¿Hay presencia o cercanía en la vivienda del presunto agresor?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_presencia_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_presencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_presencia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_presencia_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_reconoce_id', '14.12 ¿Existe reconocimiento de la situación por parte de la familia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_reconoce_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_reconoce_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_reconoce_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_reconoce_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_apoyo_id', '14.13 ¿Existe apoyo de la situación por parte de la familia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_apoyo_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_apoyo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_apoyo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_apoyo_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_denuncia_id', '14.14 ¿Se ha presentado denuncia ante las autoridades competentes?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_denuncia_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_denuncia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_denuncia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_denuncia_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_terapia_id', '14.15 ¿Ha recibido apoyo terapéutico?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_terapia_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_terapia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc3(this.value)']) }}
        @if($errors->has('prm_terapia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_terapia_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('prm_estado_id', '14.16 ¿Estado del proceso terapéutico?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_estado_id', $todoxxxx['estadosx'], null, ['class' => $errors->first('prm_estado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_estado_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_estado_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-8">
        {{ Form::label('informacion', '14.17 información relevante que se adicional:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('informacion', null, ['class' => $errors->first('informacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Información relevante que sea adicional', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('informacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('informacion') }}
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
