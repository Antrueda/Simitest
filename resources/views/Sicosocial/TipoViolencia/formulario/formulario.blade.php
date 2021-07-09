<div class="row">
    <div class="col-md-6">
        {{ Form::label('tipo_id', 'Tipo de Violencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('tipo_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('tipo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('tipo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipo_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('forma_id', 'Forma de Violencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('forma_id', $todoxxxx['separaci'], null, ['class' => $errors->first('forma_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('forma_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('forma_id') }}
        </div>
        @endif
    </div>
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
