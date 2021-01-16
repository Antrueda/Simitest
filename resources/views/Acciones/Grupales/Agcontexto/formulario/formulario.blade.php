
<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_contexto', 'Nombre contexto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_contexto', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textArea('s_descripcion', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
  </div>
</div>
<div class="form-group col-md-6">
  {{ Form::label('sis_esta_id','Estado') }}
  {{ Form::select('sis_esta_id',$todoxxxx['estadoxx'], null,['class'=> $errors->first('sis_esta_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
  @if($errors->has('sis_esta_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('sis_esta_id') }}
  </div>
  @endif
</div>

<div class="form-group col-md-6">
  {{ Form::label('estusuario_id','Justificación Estado') }}
  {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
  @if($errors->has('estusuario_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('estusuario_id') }}
  </div>
  @endif
</div>
