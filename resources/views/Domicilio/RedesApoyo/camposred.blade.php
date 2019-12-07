<div class="row">
    <div class="col-md-4">
        {{ Form::label('nombre', '11.1.1 Entidad - Persona', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    <div class="col-md-8">
        {{ Form::label('servicios', '11.1.2 Servicios o beneficios recibidos', ['class' => 'control-label col-form-label-sm']) }}
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
        {{ Form::label('cantidad', '11.1.3 ¿Durante cuánto tiempo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::label('prm_unidad_id', 'tiempo', ['class' => 'control-label col-form-label-sm d-none']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::number('cantidad', null, ['class' => $errors->first('cantidad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', 'max' => '99']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_unidad_id', $tiempo, null, ['class' => $errors->first('prm_unidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </div>
        </div>
        @if($errors->has('cantidad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('cantidad') }}
        </div>
        @endif
        @if($errors->has('prm_unidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_unidad_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('ano', '11.1.4 Año de prestación de servicios', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '2000', 'max' => '2030']) }}
        @if($errors->has('ano'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ano') }}
        </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('retiro', '11.1.5 Motivo de retiro', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('retiro', null, ['class' => $errors->first('retiro') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('retiro'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('retiro') }}
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