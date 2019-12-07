<div class="row">
  <div class="col-md-6">
    <label for="prm_persona_id" class="control-label col-form-label-sm">
      8.1 ¿Porqué motivo decidió vinvular al {{ Form::select('prm_persona_id', $personas, null, ['class' => $errors->first('prm_persona_id') ? 'form-control-sm is-invalid' : 'form-control-sm', 'autofocus']) }} al poyecto pedagógico?
    </label>
    @if($errors->has('prm_persona_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_persona_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-6">
    {{ Form::label('motivos', 'Motivos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('motivos[]', $motivos, null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple']) }}
    @if($errors->has('motivos'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('motivos') }}
    </div>
    @endif
  </div>
</div>

<div class="row mt-3">
  @canany(['csdbienvenida-crear', 'csdbienvenida-editar'])
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
  @endcanany
  <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
</div>