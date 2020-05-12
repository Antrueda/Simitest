<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::text('nombre', $todoxxxx['modeloxx']->nombre, ['class' => 'form-control-plaintext','style'=>'height: 28px']) }}
      @else
          {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre del área', 'maxlength' => '120', 'autofocus','style'=>'height: 28px']) }}
      @endif
      @if($errors->has('nombre'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('nombre') }}
          </div>
      @endif
  </div>
</div>
