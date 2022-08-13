
    <div class="form-group row">
        <div class="form-group col-md-3">
            {{ Form::label('tipo_id', 'TIPO:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('tipo_id', $todoxxxx['seguixxx'], null, ['class' => $errors->first('tipo_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('tipo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('tipo_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('tema_id', 'TEMA:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('tema_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('tema_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('tema_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('tema_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('segui_id', 'SEGUIMIENTO:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('segui_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('segui_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('segui_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('segui_id') }}
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
    

    