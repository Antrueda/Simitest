<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('nombre', 'Entidad', ['class' => 'control-label']) }}
    {{ Form::text('nombre',  null, ['class' => 'form-control form-control-sm','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('servicios', 'Servicios o beneficios recibidos', ['class' => 'control-label']) }}
    {{ Form::text('servicios', null, ['class' => 'form-control form-control-sm','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('prm_unidad_id', '¿Durante cuánto tiempo?', ['class' => 'control-label']) }}
    <div class="input-group">
      {{ Form::number('cantidad', null, ['class' => 'form-control form-control-sm','min' => '0', 'max' => '1000']) }}
      {{ Form::select('prm_unidad_id', $todoxxxx["tipotiem"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('ano', '11.1.4 Año de prestación de servicios', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '2000', 'max' => '2021']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('retiro', '11.1.5 Motivo de retiro', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('retiro', null, ['class' => $errors->first('retiro') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('retiro'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('retiro') }}
    </div>
    @endif
  </div>
</div>


@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
