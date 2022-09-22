<hr style="border:3px;">

<div class="row">
  
    <div class="col-sm-2">
      {{ Form::label('diente', 'Diente', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('diente', $todoxxxx['dientesx'],null, ['class' => $errors->first('diente') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder'=>'Seleccione']) }}
      @if($errors->has('diente'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('diente') }}
      </div>
      @endif
    </div>
    <div class="col-sm-2">
      {{ Form::label('super_id', 'Tipo de Superficie', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('super_id', $todoxxxx['superfic'],null, ['class' => $errors->first('super_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has('super_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('super_id') }}
            </div>
         @endif
    </div>
     <div class="col-sm-2">
      {{ Form::label('consulta_id', 'Superficie', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('consulta_id', $todoxxxx['superfic'],null, ['class' => $errors->first('consulta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has('consulta_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('consulta_id') }}
            </div>
         @endif
    </div>
    <div class="col-sm-3">
      {{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('diag_id', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
          @if($errors->has('diag_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('diag_id') }}
            </div>
         @endif
    </div>
    <div class="col-sm-3">
        {{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('diag_id', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
            @if($errors->has('diag_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('diag_id') }}
              </div>
           @endif
      </div>
      <div class="col-sm-3">
        {{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('diag_id', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
            @if($errors->has('diag_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('diag_id') }}
              </div>
           @endif
      </div>
      <div class="col-sm-3">
        {{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('diag_id', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
            @if($errors->has('diag_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('diag_id') }}
              </div>
           @endif
      </div>
  </div>
  <br>


