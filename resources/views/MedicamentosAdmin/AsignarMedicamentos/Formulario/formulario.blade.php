
    <div class="form-group row">
        <div class="form-group col-md-3">
            {{ Form::label('diag_id', 'UPI:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('diag_id', $todoxxxx['seguixxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('diag_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('diag_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('enfe_id', 'Servicio:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('enfe_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('enfe_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('enfe_id') }}
            </div>
            @endif
        </div>
    
    
        <div class="form-group col-md-3">
            {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
            'form-control is-invalid' : 'form-control','data-placeholder' => 'Seleccione un estado']) }}
            @if($errors->has('sis_esta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_esta_id') }}
            </div>
            @endif
        </div>
    </div>
    

    