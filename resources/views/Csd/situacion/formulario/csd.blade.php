<div class="row">
    <div class="col-md-12">
        {{ Form::label('especiales', '3.1 Situaciones de vulneraciones', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('especiales[]', $todoxxxx["situacix"], null, ['class' => $errors->first('especiales') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'id' => 'especiales', 'data-placeholder' => 'Seleccione...', 'multiple']) }}
        @if($errors->has('especiales'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('especiales') }}
            </div>
        @endif
    </div>
</div>
