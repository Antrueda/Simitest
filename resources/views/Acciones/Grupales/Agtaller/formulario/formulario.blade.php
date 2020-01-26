
<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_taller', 'Nombre taller', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_taller', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-12">
    {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_descripcion', null, 
    ['class' => $errors->first('s_descripcion') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_descripcion', 'maxlength' => '6000','contador'=>'agtallercontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="agtallercontador">0/6000</p>
  </div>
</div>
