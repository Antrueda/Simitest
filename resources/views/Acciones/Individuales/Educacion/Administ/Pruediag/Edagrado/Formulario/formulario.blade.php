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

</div>
