
<div class="form-group row">
    <div class="form-group col-md-6">
      {{ Form::label('ag_taller_id', 'Taller', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('ag_taller_id', $todoxxxx["tallerxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('s_subtema', 'Subtema', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_subtema', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus']) }}
    </div>
    <div class="form-group col-md-12">
      {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('s_descripcion', null, 
    ['class' => $errors->first('s_descripcion') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_descripcion', 'maxlength' => '6000','contador'=>'agsubtemacontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="agsubtemacontador">0/6000</p>
  </div>
</div>
