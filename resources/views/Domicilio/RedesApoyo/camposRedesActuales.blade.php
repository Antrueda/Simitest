<div class="row">
    <div class="col-md-4">
        {{ Form::label('prm_tipo_id', '11.2.1 Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipo_id', $tipoRed, null, ['class' => $errors->first('prm_tipo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_tipo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipo_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('nombre', '11.2.2 Nombre persona / Intitución', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('nombre') }}
            </div>
        @endif
    </div>
    <div class="col-md-8">
        {{ Form::label('servicios', '11.2.3 Servicios o beneficios', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('servicios', null, ['class' => $errors->first('servicios') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('servicios'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('servicios') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('telefono', '11.2.4 Datos de Contacto', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('telefono', null, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'maxlength' => '10']) }}
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
<div class="row">
    <div class="col-md text-right">
        @canany(['csdredesapoyo-crear', 'csdredesapoyo-editar'])
            {{ Form::submit('Agregar', ['class' => 'btn btn-sm btn-primary mt-4']) }}
        @endcanany
    </div>
</div>