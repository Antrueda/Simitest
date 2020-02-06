<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_taller', 'Taller:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::text('s_taller', $todoxxxx['modeloxx']->s_taller, ['class' => 'form-control-plaintext','style'=>'height: 28px']) }}
      @else
          {{ Form::text('s_taller', null, ['class' => $errors->first('s_taller') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre del taller', 'maxlength' => '120', 'autofocus','style'=>'height: 28px']) }}
      @endif
      @if($errors->has('s_taller'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_taller') }}
          </div>
      @endif
  </div>
 

 
  <div class="form-group col-md-12">
     {{ Form::label('s_descripcion', 'Descripción:', ['class' => 'control-label col-form-label-sm']) }}
      @if ($todoxxxx['accionxx'] == 'Ver')
          {{ Form::textarea('s_descripcion', $todoxxxx['modeloxx']->s_descripcion, ['class' => 'form-control form-control-sm', 'placeholder' => 'Escriba una descripción para el sub tipo de seguimiento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @else
          {{ Form::textarea('s_descripcion', null, ['class' => $errors->first('s_descripcion') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
          'form-control form-control-sm contarcaracteres', 
          'placeholder' => 'Escriba una descripción para el taller', 'maxlength' => '4000',
          'contador'=>'agtallercontador', 
          'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @endif
      <p id="agtallercontador">0/4000</p>
  </div>
  @if($errors->has('s_descripcion'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('s_descripcion') }}
      </div>
  @endif
</div>
