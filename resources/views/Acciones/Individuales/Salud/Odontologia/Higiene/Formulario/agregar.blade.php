<hr style="border:3px;">
{{-- <button type="button" class="btn btn-primary" id="add_btn">DIAGNOSTICOS <i class="fas fa-plus"></i></button> --}}
<form action="" id="validar" method="post">
<div class="row" id="test">
  
    <div class="col-sm-2">
      {{ Form::label('diente', 'Diente', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('diente', $todoxxxx['dientesx'],null, ['class' => $errors->first('diente') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder'=>'Seleccione','required']) }}
      @if($errors->has('diente'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('diente') }}
      </div>
      @endif
    </div>
    <div class="col-sm-2">
      {{ Form::label('tiposup_id', 'Tipo de Superficie', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('tiposup_id', $todoxxxx['superfic'],null, ['class' => $errors->first('tiposup_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
          @if($errors->has('tiposup_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('tiposup_id') }}
            </div>
         @endif
    </div>
     <div class="col-sm-2">
      {{ Form::label('super_id', 'Superficie', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('super_id', $todoxxxx['superfic'],null, ['class' => $errors->first('super_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
          @if($errors->has('super_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('super_id') }}
            </div>
         @endif
    </div>
    <div class="col-sm-3">
      {{ Form::label('diag_id', 'Diagnóstico', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('diag_id[]', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'diag_id', 'multiple','required', 'data-placeholder'=>'Seleccione']) }}
          @if($errors->has('diag_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('diag_id') }}
            </div>
         @endif
    </div>

  </div>

  <br>
  <div>
    <button type="button" class="btn btn-primary" id="agregar" type="submit">AGREGAR DIENTE</button>
  </div>
</form>


