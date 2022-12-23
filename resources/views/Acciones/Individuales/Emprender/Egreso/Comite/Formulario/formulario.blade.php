<div class="row">
      <div class="col-md-5">
        {{ Form::label('fechaegreso', 'Fecha realización del comité de egreso, inactivación y/o retiro', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fechaegreso', null, ['class' => $errors->first('fechaegreso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fechaegreso'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('fechaegreso') }}
        </div>
        @endif
      </div>
      <div class="col-sm-5">
        {{ Form::label('motivo_egreso', 'Motivo de egreso, inactivación y/o retiro', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('motivo_egreso', $todoxxxx['motivoeg'],null, ['class' => $errors->first('motivo_egreso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
        @if($errors->has('motivo_egreso'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('motivo_egreso') }}
        </div>
        @endif
      </div>
      <div class="col-sm-3">
        {{ Form::label('upiegreso_id', 'Unidad de protección integral que realizó el egreso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('upiegreso_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upiegreso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
        @if($errors->has('upiegreso_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('upiegreso_id') }}
        </div>
        @endif
      </div>
    </div>
      <hr>
<div class="row">
      <div class="col-md-4">
        {{ Form::label('fechareunion', 'Reunión Validación De Casos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fechareunion', null, ['class' => $errors->first('fechareunion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fechareunion'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('fechareunion') }}
        </div>
        @endif
      </div>
      <div class="col-sm-3">
        {{ Form::label('numacta', 'N° De Acta', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('numacta', null, ['class' => $errors->first('numacta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'numacta','required']) }}
            @if($errors->has('numacta'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('numacta') }}
              </div>
           @endif
      </div>
    </div>
    <hr>
  <div class="row">
      <div class="col-sm-3">
        {{ Form::label('cierreca_id', 'Motivo De Cierre De Caso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('cierreca_id', $todoxxxx['condicio'],null, ['class' => $errors->first('cierreca_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
            @if($errors->has('cierreca_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('cierreca_id') }}
              </div>
           @endif
      </div>
      <div class="col-md-3">
        {{ Form::label('motivo_id', 'Motivo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('motivo_id', $todoxxxx['condicio'],null, ['class' => $errors->first('motivo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
            @if($errors->has('motivo_id'))
        <div class="invalid-feedback d-block">
                {{ $errors->first('motivo_id') }}
            </div>
        @endif
        </div>
       <div class="col-sm-12">
        {{ Form::label('user_id', 'Funcionario y/o contratista', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('user_id', $todoxxxx['usuarioz'],null, ['class' => $errors->first('user_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
            @if($errors->has('user_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('user_id') }}
              </div>
           @endif
      </div>


</div>


    

<hr>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrousuario')
  @include('layouts.registrofecha')
</div>
