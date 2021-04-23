<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('sis_localidad_id', 'Localidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_localidad_id', $todoxxxx["localida"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_upz_id', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_upz_id', $todoxxxx["upzsxxxx"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
</div>
