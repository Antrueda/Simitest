<div class="form-group row {{ $errors->first('nombre') ? ' is-invalid' : '' }}">
  <div class="form-group col-md-6">
    {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::text('nombre', $todoxxxx['modeloxx']->nombre, ['class' => 'form-control-plaintext']) }}
      @else
          {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre del tipo de seguimiento', 'maxlength' => '120', 'autofocus']) }}
      @endif
      @if($errors->has('nombre'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('nombre') }}
          </div>
      @endif
  </div>
  
  
  <div class="form-group col-md-6">
    {{ Form::label('area_id', 'Area:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::select('area_id', $todoxxxx['fosareas'], $todoxxxx['modeloxx']->area_id, ['class' => 'form-control-plaintext']) }}
      @else
          {{ Form::select('area_id', $todoxxxx['fosareas'], null, ['class' => 'form-control select2 form-control-sm']) }}
      @endif
      @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('area_id') }}
        </div>
      @endif
  </div>
 
</div>

