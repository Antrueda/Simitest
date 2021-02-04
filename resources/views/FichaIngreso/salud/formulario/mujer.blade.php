<div class="form-group col-md-4">
        {{ Form::label('prm_estagest_id', '6.7 ¿Se encuentra en estado de gestación?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_estagest_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_numero_semanas', 'Número de semanas', ['class' => 'control-label col-form-label-sm']) }}
        {{-- {{ Form::text('i_numero_semanas', null, ['class' => 'form-control form-control-sm', $todoxxxx['readgest'], "onkeypress" => "return soloNumeros(event);"]) }} --}}
        {{ Form::number('i_numero_semanas', null, ['class' => $errors->first('i_numero_semanas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $todoxxxx['readgest'], 'placeholder' => 'Número de semanas', 'min' => '1', 'max' => '42']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_estalact_id', '6.8 ¿Se encuentra lactando?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_estalact_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_numero_meses', 'Número de meses', ['class' => 'control-label col-form-label-sm']) }}
        {{-- {{ Form::text('i_numero_meses', null, ['class' => 'form-control form-control-sm', $todoxxxx['readlact'], "onkeypress" => "return soloNumeros(event);"]) }} --}}
        {{ Form::number('i_numero_meses', null, ['class' => $errors->first('i_numero_meses') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $todoxxxx['readlact'], 'placeholder' => 'Número de meses', 'min' => '1', 'max' => '60']) }}
    </div>
