<hr>

@include($todoxxxx['rutacarp'].'Remision.Formulario.agregar')

<hr>
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<hr><br>

<div class="row">

    <div class="col-md-12">
        {{ Form::label('evolucion', 'Evolución:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('evolucion', null, ['class' => $errors->first('evolucion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'evolucion', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <span id="evolu"></span>
            @if($errors->has('evolucion'))
        <div class="invalid-feedback d-block">
                {{ $errors->first('evolucion') }}
            </div>
        @endif
        </div>
      </div>
      <hr>
<div class="row">
    <div class="col-sm-3">
        {{ Form::label('remigen_id', 'Remisión Intrainstitucional', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('remigen_id', $todoxxxx['areaxxxx'],null, ['class' => $errors->first('remigen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
        @if($errors->has('remigen_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('remigen_id') }}
        </div>
        @endif
      </div>
      <div class="col-sm-3">
        {{ Form::label('remisal_id', 'Especialidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('remisal_id', $todoxxxx['remision'],null, ['class' => $errors->first('remisal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'remisal_id','required']) }}
            @if($errors->has('remisal_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('remisal_id') }}
              </div>
           @endif
      </div>
      <div class="col-sm-3">
        {{ Form::label('remiint_id', 'Remisión Interinstitucional', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('remiint_id', $todoxxxx['intersti'],null, ['class' => $errors->first('remiint_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required']) }}
            @if($errors->has('remiint_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('remiint_id') }}
              </div>
           @endif
      </div>
      <div class="col-md-12">
        {{ Form::label('observacion', 'Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'observacion', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <span id="observa"></span>
            @if($errors->has('observacion'))
        <div class="invalid-feedback d-block">
                {{ $errors->first('observacion') }}
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
