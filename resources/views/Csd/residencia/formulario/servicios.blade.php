<div class="form-row align-items-end">
    
    <div class="form-group col-md-6">
        {{ Form::label('prm_servicio_id', 'Servicio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_servicio_id', $todoxxxx["servicio"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('prm_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_servicio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prm_legalxxx_id', '¿Es Legal?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_legalxxx_id',  $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('prm_legalxxx_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_legalxxx_id') }}
        </div>
        @endif
    </div>
 </div>
