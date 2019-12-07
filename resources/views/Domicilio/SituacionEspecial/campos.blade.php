<div class="row">
    <div class="col-md-12">
        {{ Form::label('especiales', '3.1 Situaciones de vulneracion-riesgo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('especiales[]', $situaciones, null, ['class' => $errors->first('especiales') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'id' => 'especiales', 'data-placeholder' => 'Seleccione...', 'multiple']) }}
        @if($errors->has('especiales'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('especiales') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @canany(['csdsituacionespecial-crear', 'csdsituacionespecial-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
</div>