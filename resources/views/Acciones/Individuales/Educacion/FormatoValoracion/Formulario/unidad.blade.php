<hr style="border:3px;">

<div class="row mt-3">
  <div class="col-md-12">
    <hr style="border:3px;">
    <h6><b>Por favor ingresar valores del 1 al 10</b></h6>
    <hr>
    <hr style="border:3px;">
  </div>
</div>
<div class="row">
 
  <div class="col-md-3">
    {{ Form::label('conocimiento', 'Conocimiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('conocimiento',null, ['class' => $errors->first('conocimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", "min"=> 1,"max"=>10,"maxlength"=>2]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-2">
    {{ Form::label('conoci', '(20%)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('conoci',null, ['class' => $errors->first('conocimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'readonly']) }}
  </div>
   <div class="col-md-3">
    {{ Form::label('desempeno', 'Desempeño', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('desempeno',null, ['class' => $errors->first('desempeno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);","min"=> 1,"max"=>10]) }}
        @if($errors->has('desempeno'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('desempeno') }}
          </div>
       @endif
  </div>
  <div class="col-md-2">
    {{ Form::label('desemp', '(60%)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('desemp',null, ['class' => $errors->first('conocimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'readonly']) }}
  </div>
  <div class="col-md-3">
    {{ Form::label('producto', 'Producto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('producto',null, ['class' => $errors->first('producto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);","min"=> 1,"max"=>10]) }}
        @if($errors->has('producto'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('producto') }}
          </div>
       @endif
  </div>
  <div class="col-md-2">
    {{ Form::label('product', '(20%)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('product',null, ['class' => $errors->first('conocimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'readonly']) }}
  </div>
</div>
<div class="row">
<div class="col-md-6">
  {{ Form::label('concepto', 'Concepto', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('concepto',null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('concepto'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('concepto') }}4
        </div>
     @endif
</div>
</div>
<br>
<hr>

