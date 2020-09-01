<div class="form-row align-items-end">
  <div class="form-group col-md-12">
        {{ Form::label('i_prm_actividad_tl_id', '8.3 ¿Qué actividades realiza en su tiempo libre?', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_actividad_tl_id[]', $todoxxxx['activlib'], null, ['class' => $errors->first('i_prm_actividad_tl_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione las actividades que realiza']) }}
        @if($errors->has('i_prm_actividad_tl_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_actividad_tl_id') }}
        </div>
        @endif
    </div>
</div>

