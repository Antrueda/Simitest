
    <div class="form-group row">
        <div class="form-group col-md-3">
            {{ Form::label('sis_depen_id', 'UPI:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('sis_servicio_id', 'Servicio:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('sis_servicio_id', $todoxxxx['sis_servicios'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
            @if($errors->has('sis_servicio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_servicio_id') }}
            </div>
            @endif
        </div>
    
        <div class="form-group col-md-3">
            {{ Form::label('grupo_matricula_id', 'Grupo:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('grupo_matricula_id', $todoxxxx['grupoxxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control','id'=>'grupo_matricula_id']) }}
            @if($errors->has('grupo_matricula_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('grupo_matricula_id') }}
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
    

    