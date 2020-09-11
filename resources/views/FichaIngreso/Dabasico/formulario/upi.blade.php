<div class="form-row align-items-end">
    

    <div class="form-group col-md-6">
        {{ Form::label('sis_depen_id', 'UPI', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
  
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
