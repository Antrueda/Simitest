<hr style="border:3px;">
<div class="row">
  
  <div class="col-md-4">
    {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upi_id', 'UPI De atención', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
   <div class="col-md-4">
    {{ Form::label('consulta_id', 'Clase de Consulta', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('consulta_id', $todoxxxx['consulta'],null, ['class' => $errors->first('consulta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('consulta_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('consulta_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('valora_id', 'Tipo De Valoración', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('valora_id', $todoxxxx['modalxxx'],null, ['class' => $errors->first('valora_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('valora_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('valora_id') }}
          </div>
       @endif
  </div>
</div>
  
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
