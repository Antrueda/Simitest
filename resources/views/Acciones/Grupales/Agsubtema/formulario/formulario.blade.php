<div class="form-group row">
    <div class="form-group col-md-12">
     {{ Form::label('s_subtema', 'Subtema:', ['class' => 'control-label col-form-label-sm']) }}
      @if ($todoxxxx['accionxx'] == 'Ver')
          {{ Form::text('s_subtema', $todoxxxx['modeloxx']->s_subtema, ['class' => 'form-control form-control-sm  form-control-plaintext',  'maxlength' => '4000', 
          ]) }}
      @else
          {{ Form::text('s_subtema', null, ['class' => $errors->first('s_subtema') ? 'form-control form-control-sm is-invalid' : 
          'form-control form-control-sm', 'placeholder' => 'Escriba subtema', 'maxlength' => '4000', 
          'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @endif
  </div>
  @if($errors->has('s_subtema'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('s_subtema') }}
      </div>
  @endif

  <div class="form-group col-md-12">
    {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
    @if ($todoxxxx['accionxx'] == 'Ver')
    {{ Form::textarea('s_descripcion', $todoxxxx['modeloxx']->s_descripcion, 
  ['class' =>'form-control form-control-sm contarcaracteres  form-control-plaintext', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
  'id' => 's_descripcion', 'maxlength' => '6000','contador'=>'agsubtemacontador',]) }}
    @else
    {{ Form::textarea('s_descripcion', null, 
    ['class' => $errors->first('s_descripcion') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_descripcion', 'maxlength' => '6000','contador'=>'agsubtemacontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    @endif
  <p id="agsubtemacontador">0/6000</p>

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
@if($errors->has('Subtema'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('Subtema') }}
      </div>
  @endif

</div>

