<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_tema', 'Nombre Tema', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_tema', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
  </div>
  <div class="form-group col-md-6" style="height: ">
    {{ Form::label('area_id', 'Área', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["areasxxx"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-12">
    {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_descripcion', null,
    ['class' => $errors->first('s_descripcion') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_descripcion', 'maxlength' => '6000','contador'=>'agtemacontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="agtemacontador">0/6000</p>
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
</div>
