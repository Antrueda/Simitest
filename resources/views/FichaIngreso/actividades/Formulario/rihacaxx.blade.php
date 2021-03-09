<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_horas_permanencia_calle', '8.1 ¿Cuánto tiempo al día permanece en la calle?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_horas_permanencia_calle', null, ['class' => $errors->first('i_horas_permanencia_calle') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Horas', 'min' => '1', 'max' => '24',"onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_dias_permanencia_calle', '8.2 ¿Cuántos días a la semana?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_dias_permanencia_calle', null, ['class' => $errors->first('i_dias_permanencia_calle') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días', 'min' => '1', 'max' => '7',"onkeypress" => "return soloNumeros(event);"]) }}
    </div>

    <div class="form-group col-md-4">
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



    <div class="form-group col-md-4">
        {{ Form::label('i_prm_pertenece_parche_id', '8.4 ¿Pertecene a algún grupo, parche u organización?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_pertenece_parche_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_nombre_parche', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_nombre_parche', null, ['class' => 'form-control form-control-sm',$todoxxxx['readnomb'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_acceso_recreacion_id', '8.5 ¿Tiene acceso a recreación?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_acceso_recreacion_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('i_prm_practica_religiosa_id', '8.6 ¿Tiene prácticas religiosas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_practica_religiosa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_religion_practica_id', '8.7 ¿Cuál religión practica?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_religion_practica_id', $todoxxxx["reliprac"], null, ['class' => 'form-control form-control-sm']) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sacramentos_hechos_id', '8.8 Indique sacramentos hechos', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_sacramentos_hechos_id[]', $todoxxxx['sacramen'], null, ['class' => $errors->first('i_prm_sacramentos_hechos_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'i_prm_sacramentos_hechos_id',
    'data-placeholder' => 'Seleccione los sacramentos hechos']) }}
        @if($errors->has('i_prm_sacramentos_hechos_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_sacramentos_hechos_id') }}
        </div>
        @endif
    </div>
</div>
