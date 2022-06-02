
    <div class="form-group row">
        <div class="form-group col-md-3">
            {{ Form::label('remi_id', 'Remisión:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('remi_id', $todoxxxx['remision'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('remi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('remi_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('reesp_id', 'Especialidad:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('reesp_id', $todoxxxx['remiespe'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('reesp_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('reesp_id') }}
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
    

    