<div class="form-row align-items-end ">

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_lee_id', '4.1 ¿Sabe leer?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_lee_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_lee_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_escribe_id', '4.2 ¿Sabe escribir?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_escribe_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_escribe_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_operacio_id', '4.3 ¿Sabe operaciones básicas matemáticas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_operacio_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_operacio_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_estudia_id', '4.4 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], null, ['class' => 'form-control form-control-sm select2',]) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_estudia_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_jornestu_id', '4.5 ¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_jornestu_id', $todoxxxx["jornestu"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_jornestu_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_natuenti_id', '4.6 ¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_natuenti_id', $todoxxxx["natuenti"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_natuenti_id') }}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('s_institucion_edu', '4.7 Nombre de la Institución', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_institucion_edu', null, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();", $todoxxxx['readinst']]) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_institucion_edu') }}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('tiemposinestudio', '4.8 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('diasines', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('diasines', null, ['class' => 'form-control form-control-sm', $todoxxxx['readdiax'], 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('mesinest', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mesinest', null, ['class' => 'form-control form-control-sm', $todoxxxx['readmesx'], 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('anosines', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('anosines', null, ['class' => 'form-control form-control-sm', $todoxxxx['readanox'], 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_ultniest_id', '4.9 ¿Cuál es su último nivel de estudio?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ultniest_id', $todoxxxx["ulnivest"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_ultniest_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_ultgrapr_id', '4.10 Último grado, modulo o semestre aprobado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ultgrapr_id', $todoxxxx["ulgradap"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_ultgrapr_id') }}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_cerulniv_id', '4.11 ¿Tiene certificado del último nivel de estudio alcanzado?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_cerulniv_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_cerulniv_id') }}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('prm_motivinc_id', '4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?', ['class' => 'control-label']) }}
        {{ Form::select('prm_motivinc_id[]', $todoxxxx['motvincu'], null, ['class' => $errors->first('prm_motivinc_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione los motivos de vinculación']) }}
        @if($errors->has('prm_motivinc_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_motivinc_id') }}
        </div>
        @endif
    </div>
</div>
