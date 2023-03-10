
<div class="row">
  <div class="col-md-4">
    {{ Form::label('diag_id', 'Diagnóstico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('diag_id', $todoxxxx['cursosxx'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
        @if($errors->has('diag_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('diag_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-2">
    {{ Form::label('codigo', 'Código', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('codigo', null, ['class' => $errors->first('codigo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('codigo'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('codigo') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('esta_id', $todoxxxx['estadoxx'],null, ['class' => $errors->first('esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('esta_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('esta_id') }}
          </div>
       @endif
  </div>

</div>
<hr style="border:3px;">
<div class="row">
<div class="col-md-12">
  {{ Form::label('concepto', 'Conducta y Evolución', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('concepto',null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','autocomplete'=>"off"]) }}
  <p id="contadorconcepto">0/4000</p>
      @if($errors->has('concepto'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('concepto') }}4
        </div>
     @endif
</div>
</div>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>

