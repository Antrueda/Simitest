<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('prm_actgeing_id', '7.1 ¿Que actividad realiza para generar ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_actgeing_id', $todoxxxx["acgening"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_trabajo_formal', 'A.1 Mencione en qué trabaja', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_trabajo_formal', null, ['class' => 'form-control form-control-sm', $todoxxxx["formalxx"], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_trabinfo_id', 'B.1 (Si Indicó B. TRABAJO INFORMAL):', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_trabinfo_id', $todoxxxx["trabinfo"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
</div>
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('prm_otractiv_id', 'C.1 (Si Indicó C. OTRAS ACTIVIDADES):', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_otractiv_id', $todoxxxx["otractiv"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_razgeing_id', 'D.1 ¿Por qué no genera ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_razgeing_id', $todoxxxx["raznogen"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_dias_buscando_empleo_id', 'D.1(a) ¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('diabuemp', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('diabuemp', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Día(s)',$todoxxxx['readdiax']]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('mesbuemp', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('mesbuemp', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Mes(es)',$todoxxxx['readmesx']]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('anobuemp', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('anobuemp', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Año(s)',$todoxxxx['readanio']]) }}
            </div>
        </div>
    </div>
</div>
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('prm_jorgeing_id', '7.2 ¿En qué jornada genera los ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_jorgeing_id' , $todoxxxx["jorgener"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_hora_inicial', 'De', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::time('s_hora_inicial', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_hora_final', 'a', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::time('s_hora_final', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_diagener_id', '7.3 ¿En qué días?', ['class' => 'control-label']) }}
        {{ Form::select('prm_diagener_id[]', $todoxxxx['diaseman'], null, ['class' => $errors->first('prm_diagener_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple', 'id'=>'prm_diagener_id',
    'data-placeholder' => 'Seleccione los motivos de vinculación']) }}
        @if($errors->has('prm_diagener_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_diagener_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_frecingr_id', '7.4 ¿Con qué frecuencia recibe el ingreso por la actividad?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::select('prm_frecingr_id', $todoxxxx["frecugen"], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('totinmen', '$', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('totinmen', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => '$']) }}
            </div>
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tiprelab_id', '7.5 ¿Tipo de relación laboral?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tiprelab_id', $todoxxxx["tiporela"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
</div>
