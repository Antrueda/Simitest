<div class="row">
  <div class="col-md-6">
    <label for="prm_persona_id" class="control-label col-form-label-sm">

      8.1 ¿Por qué motivo decidió vinvular a {{ $todoxxxx['usuariox']->s_primer_nombre }}
      {{ $todoxxxx['usuariox']->s_segundo_nombre }}
      {{ $todoxxxx['usuariox']->s_primer_apellido }}
      {{ $todoxxxx['usuariox']->s_segundo_apellido }} {{ Form::select('prm_persona_id', $todoxxxx["personax"], null, ['class' => $errors->first('prm_persona_id') ? 'form-control-sm is-invalid' : 'form-control-sm', 'autofocus']) }} al poyecto pedagógico?

    </label>
    @if($errors->has('prm_persona_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_persona_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-6">
    {{ Form::label('motivos', 'Motivos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('motivos[]', $todoxxxx["motivosx"], null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple']) }}
    @if($errors->has('motivos'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('motivos') }}
    </div>
    @endif
  </div>
</div>

