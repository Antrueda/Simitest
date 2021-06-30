<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::text('nombre', $todoxxxx['modeloxx']->nombre, ['class' => 'form-control-plaintext','style'=>'height: 28px']) }}
      @else
          {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre del tipo de seguimiento', 'maxlength' => '120', 'autofocus','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
      @endif
      @if($errors->has('nombre'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('nombre') }}
          </div>
      @endif
  </div>


  <div class="form-group col-md-6" >
    {{ Form::label('area_id', 'Area:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::select('area_id', $todoxxxx['fosareas'], $todoxxxx['modeloxx']->area_id, ['class' => 'form-control-plaintext','id'=>'area_id']) }}
      @else
          {{ Form::select('area_id', $todoxxxx['fosareas'], null, ['class' => $errors->first('area_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'area_id']) }}
      @endif
      @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('area_id') }}
        </div>
      @endif
  </div>



  <div class="form-group col-md-12">
    {{ Form::label('fos_tse_id', 'Tipo de Seguimiento:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::select('fos_tse_id', $todoxxxx['tiposegu'], $todoxxxx['modeloxx']->fos_tse_id, ['class' => $errors->first('fos_tse_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
      @else
          {{ Form::select('fos_tse_id', $todoxxxx['tiposegu'], null, ['class' => $errors->first('fos_tse_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
      @endif
  </div>
  @if($errors->has('fos_tse_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('fos_tse_id') }}
      </div>
  @endif


  <div class="form-group col-md-12">
     {{ Form::label('descripcion', 'Descripción:', ['class' => 'control-label col-form-label-sm']) }}
      @if ($todoxxxx['accionxx'] == 'Ver')
          {{ Form::textarea('descripcion', $todoxxxx['modeloxx']->descripcion, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba una descripción para el sub tipo de seguimiento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @else
          {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba una descripción para el sub tipo de seguimiento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @endif
      <p id="contadordescripcion">0/4000</p>
  </div>
  @if($errors->has('descripcion'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('descripcion') }}
      </div>
  @endif
</div>

@if($todoxxxx['modeloxz'] != null)



<div class="form-group row">
  <div class="form-group col-md-12">
      {{ Form::label('estusuario_id','Justificación Estado') }}
      {{ Form::select('estusuario_id',$todoxxxx['motivozx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
      @if($errors->has('estusuario_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('estusuario_id') }}
      </div>
      @endif
  </div>
      @include('layouts.registro')
  </div>
  @endif
