<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('in_indicador_id', 'Area:', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-control">
      {{ $todoxxxx['padrexxx']->area->nombre }}
    </div>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('in_indicador_id', 'INDICADOR:', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-control">
      {{ $todoxxxx['padrexxx']->inIndicado-> s_indicador}}
    </div>
  </div>
  <div class="form-group col-md-12">
    {{ Form::label('in_linea_base_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}

    {{ Form::select('in_linea_base_id', $todoxxxx['linebase'], null, ['class' => $errors->first('in_linea_base_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_linea_base_id']) }}

    @if($errors->has('in_linea_base_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('in_linea_base_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('prm_nivelxxx_id', 'Nivel:', ['class' => 'control-label col-form-label-sm']) }}

    {{ Form::select('prm_nivelxxx_id', $todoxxxx['nivelesx'], null, ['class' => $errors->first('prm_nivelxxx_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'prm_nivelxxx_id']) }}

    @if($errors->has('prm_nivelxxx_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_nivelxxx_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('prm_categori_id', 'Catería:', ['class' => 'control-label col-form-label-sm']) }}

    {{ Form::select('prm_categori_id', $todoxxxx['categori'], null, ['class' => $errors->first('prm_categori_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'prm_categori_id']) }}

    @if($errors->has('prm_categori_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_categori_id') }}
    </div>
    @endif
  </div>
</div>