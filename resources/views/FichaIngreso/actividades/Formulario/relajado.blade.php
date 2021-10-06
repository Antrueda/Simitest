<div class="form-row align-items-end">
    <div class="form-group col-md-6">
        {{ Form::label('i_horas_permanencia_calle', '8.1 ¿Cuánto tiempo al día permanece en la calle?', ['class' => 'control-label']) }}
        {{ Form::number('i_horas_permanencia_calle', null, ['class' => $errors->first('i_horas_permanencia_calle') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Horas', 'min' => '1', 'max' => '24',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('i_horas_permanencia_calle'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_horas_permanencia_calle') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_dias_permanencia_calle', '8.2 ¿Cuántos días a la semana?', ['class' => 'control-label']) }}
        {{ Form::number('i_dias_permanencia_calle', null, ['class' => $errors->first('i_dias_permanencia_calle') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días', 'min' => '1', 'max' => '7',"onkeypress" => "return soloNumeros(event);"]) }}

        @if($errors->has('i_dias_permanencia_calle'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_dias_permanencia_calle') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('i_prm_actividad_tl_id', '8.3 ¿Qué actividades realiza en su tiempo libre?', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_actividad_tl_id[]', $todoxxxx['activlib'], null, ['class' => $errors->first('i_prm_actividad_tl_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione las actividades que realiza']) }}
        @if($errors->has('i_prm_actividad_tl_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_actividad_tl_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_pertenece_parche_id', '8.4 ¿Pertenece a algún grupo, parche u organización?', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_pertenece_parche_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_pertenece_parche_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_pertenece_parche_id') }}
        </div>
        @endif

    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_nombre_parche', 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_nombre_parche', null, ['class' => 'form-control form-control-sm',$todoxxxx['readnomb'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        @if($errors->has('s_nombre_parche'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_nombre_parche') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prm_accione_id', '8.4 A ¿Por las acciones en las cuales presuntamente está en conflicto con la ley  ha actuado en:', ['class' => 'control-label']) }}
        {{ Form::select('prm_accione_id[]', $todoxxxx['acciones'], null, ['class' => $errors->first('prm_accione_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione las acciones en conflicto']) }}
        @if($errors->has('prm_accione_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_accione_id') }}
        </div>
        @endif
    </div>
</div>