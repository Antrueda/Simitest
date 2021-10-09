<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('in_lineabase_nnaj_id', 'LINEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('in_lineabase_nnaj_id', $todoxxxx['lineabas'], $todoxxxx['modeloxx']->in_lineabase_nnaj_id, ['class' => 'form-control-plaintext','id'=>'in_lineabase_nnaj_id']) }}
    @else
    {{ Form::select('in_lineabase_nnaj_id', $todoxxxx['lineabas'], null, ['class' => $errors->first('in_lineabase_nnaj_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'in_lineabase_nnaj_id']) }}
    @endif
    @if($errors->has('in_lineabase_nnaj_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('in_lineabase_nnaj_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_avance_id', 'AVANCE:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('i_prm_avance_id', $todoxxxx['avancexx'], $todoxxxx['modeloxx']->i_prm_avance_id, ['class' => 'form-control-plaintext','id'=>'i_prm_avance_id']) }}
    @else
    {{ Form::select('i_prm_avance_id', $todoxxxx['avancexx'], null, ['class' => $errors->first('i_prm_avance_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'i_prm_avance_id']) }}
    @endif
    @if($errors->has('i_prm_avance_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_avance_id') }}
    </div>
    @endif
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('i_prm_nivel_id', 'NIVEL:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('i_prm_nivel_id', $todoxxxx['nivelxxx'], $todoxxxx['modeloxx']->i_prm_nivel_id, ['class' => 'form-control-plaintext','id'=>'i_prm_nivel_id']) }}
    @else
    {{ Form::select('i_prm_nivel_id', $todoxxxx['nivelxxx'], null, ['class' => $errors->first('i_prm_nivel_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'i_prm_nivel_id']) }}
    @endif
    @if($errors->has('i_prm_nivel_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_nivel_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_categoria_id', 'CATEGORÍA:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('i_prm_categoria_id', $todoxxxx['categori'], $todoxxxx['modeloxx']->i_prm_categoria_id, ['class' => 'form-control-plaintext','id'=>'i_prm_categoria_id']) }}
    @else
    {{ Form::select('i_prm_categoria_id', $todoxxxx['categori'], null, ['class' => $errors->first('i_prm_categoria_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'i_prm_categoria_id']) }}
    @endif
    @if($errors->has('i_prm_categoria_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_categoria_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_cactual_id', 'CATEGORÍA ACTUAL:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('i_prm_cactual_id', $todoxxxx['cateactu'], $todoxxxx['modeloxx']->i_prm_cactual_id, ['class' => 'form-control-plaintext','id'=>'i_prm_cactual_id']) }}
    @else
    {{ Form::select('i_prm_cactual_id', $todoxxxx['cateactu'], null, ['class' => $errors->first('i_prm_cactual_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'i_prm_cactual_id']) }}
    @endif
    @if($errors->has('i_prm_cactual_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_cactual_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_esta_id', 'ESTADO:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], $todoxxxx['modeloxx']->sis_esta_id, ['class' => 'form-control-plaintext','id'=>'sis_esta_id']) }}
    @else
    {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'sis_esta_id']) }}
    @endif
    @if($errors->has('sis_esta_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_esta_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-12">
    {{ Form::label('s_valoracion', 'Valoracion', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::textArea('s_valoracion', $todoxxxx['modeloxx']->s_valoracion, ['class' => 'form-control form-control-sm form-control-plaintext']) }}

    @else
    {{ Form::textArea('s_valoracion', null, ['class' => $errors->first('s_valoracion') ? 
          'form-control  is-invalid' : 'form-control form-control-sm']) }}

    @endif
    @if($errors->has('s_valoracion'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('s_valoracion') }}
    </div>
    @endif
  </div>
 

</div>