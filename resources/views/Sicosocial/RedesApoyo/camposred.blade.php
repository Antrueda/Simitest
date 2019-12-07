<div class="row">
    <div class="col-md-12">
        <h6>7.2. Antecedentes Institucionales</h6>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('nombre', '7.2.1 Entidad - Persona', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('nombre') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('servicio', '7.2.2 Servicios o beneficios recibidos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('servicio', null, ['class' => $errors->first('servicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('servicio'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('servicio') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('dia', '7.2.3 ¿Durante cuánto tiempo?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días', $vsi->activo == 0 ? 'disabled' : '']) }}
                @if($errors->has('dia'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('dia') }}
                    </div>
                @endif
            </div>
            <div class="col-md">
                {{ Form::label('mes', 'Mes', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Meses', $vsi->activo == 0 ? 'disabled' : '']) }}
                @if($errors->has('mes'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('mes') }}
                    </div>
                @endif
            </div>
            <div class="col-md">
                {{ Form::label('ano', 'Año', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Años', $vsi->activo == 0 ? 'disabled' : '']) }}
                @if($errors->has('ano'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('ano') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md">
        {{ Form::label('ano_prestacion', '7.2.4 Año de prestación de servicios', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('ano_prestacion', null, ['class' => $errors->first('ano_prestacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '2000', 'max' => '2030', 'placeholder' => 'Año de prestación', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('ano_prestacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('ano_prestacion') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md text-right">
        @if ($vsi->activo == 1)
            @canany(['vsiredesapoyo-crear', 'vsiredesapoyo-editar'])
                {{ Form::submit('Agregar', ['class' => 'btn btn-sm btn-primary mt-4']) }}
            @endcanany
        @endif
    </div>
</div>