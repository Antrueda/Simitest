<div class="row">
    <div class="col-md">
        {{ Form::label('prm_tipo_id', '7.1.10 Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipo_id', $todoxxxx['tiporedx'], null, ['class' => $errors->first('prm_tipo_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_tipo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipo_id') }}
        </div>
        @endif
        {{ Form::label('nombre', '7.1.11 Nombre persona / Intitución', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('servicio', '7.1.12 Servicios o beneficios', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textArea('servicio', null, ['class' => $errors->first('servicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="contadorservicio">0/4000</p>
        @if($errors->has('servicio'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('servicio') }}
        </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('telefono', '7.1.13 Datos de Contacto', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('telefono', null, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfonos', 'maxlength' => '10',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('telefono'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('telefono') }}
        </div>
        @endif
        {{ Form::label('direccion', 'direccion', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('direccion', null, ['class' => $errors->first('direccion') ? 'form-control form-control-sm is-invalid mt-2' : 'form-control form-control-sm mt-2', 'placeholder' => 'Dirección', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('direccion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('direccion') }}
        </div>
        @endif
    </div>
  </div>

<div class="form-group row">
    @include('layouts.registro')
</div>
