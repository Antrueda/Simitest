<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('estusuario_id', 'Justificación Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('estusuario_id', $todoxxxx["motivoxx"], null, ['class' => $errors->first('estusuario_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
    </div>
</div>

