<hr style="border:3px;">
{{-- <button type="button" class="btn btn-primary" id="add_btn">DIAGNOSTICOS <i class="fas fa-plus"></i></button> --}}

<div class="row" id="test">
  
    <div class="col-sm-2">
      {{ Form::label('tipodiag', 'Nombre Diagnóstico', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('tipodiag', $todoxxxx['estadoxx'],null, ['class' => $errors->first('tipodiag') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder'=>'Seleccione',]) }}
      @if($errors->has('tipodiag'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('tipodiag') }}
      </div>
      @endif
    </div>
    <div class="col-sm-3">
      {{ Form::label('diag_id', 'Diagnóstico', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('diag_id', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'diag_id',]) }}
          @if($errors->has('diag_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('diag_id') }}
            </div>
         @endif
    </div>
    <div class="col-sm-2">
      {{ Form::label('codigo', 'C+odigo', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('codigo',null, ['class' => $errors->first('codigo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',]) }}
          @if($errors->has('codigo'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('codigo') }}
            </div>
         @endif
    </div>
     


  </div>

  <br>
  <div>
    <button type="button" class="btn btn-primary" id="agregar" type="submit">AGREGAR DIAGNÓSTICO</button>
  </div>



