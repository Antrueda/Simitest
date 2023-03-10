<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('s_espaluga', Tr::getTitulo(29,1).':', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::text('s_espaluga', $todoxxxx['modeloxx']->s_espaluga, ['class' => 'form-control-plaintext','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @else
          {{ Form::text('s_espaluga', null, ['class' => $errors->first('s_espaluga') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => Tr::getTitulo(29,1), 'maxlength' => '120', 'autofocus','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @endif
      @if($errors->has('s_espaluga'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_espaluga') }}
          </div>
      @endif
  </div>

<div class="form-group col-md-3">
    {{ Form::label('sis_esta_id','Estado') }}
    {{ Form::select('sis_esta_id',$todoxxxx['estadoxx'], null,['class'=> $errors->first('sis_esta_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
    @if($errors->has('sis_esta_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('sis_esta_id') }}
    </div>
    @endif
  </div>
  
  <div class="form-group col-md-3">
    {{ Form::label('estusuario_id','Justificación Estado') }}
    {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
    @if($errors->has('estusuario_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('estusuario_id') }}
    </div>
    @endif
  </div>
</div>
