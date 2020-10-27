<div class="row">
    <div class="col-md">
        {{ Form::label('nombre', '7.2.1 Entidad - Persona', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('nombre') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('servicio', '7.2.2 Servicios o beneficios recibidos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('servicio', null, ['class' => $errors->first('servicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
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
                {{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días','min'=>'0','max'=>'99']) }}
                @if($errors->has('dia'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('dia') }}
                    </div>
                @endif
            </div>
            <div class="col-md">
                {{ Form::label('mes', 'Mes', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Meses','min'=>'0','max'=>'99']) }}
                @if($errors->has('mes'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('mes') }}
                    </div>
                @endif
            </div>
            <div class="col-md">
                {{ Form::label('ano', 'Año', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Años','min'=>'0','max'=>'99']) }}
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
        {{ Form::number('ano_prestacion', null, ['class' => $errors->first('ano_prestacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1980', 'max' => '2030', 'placeholder' => 'Año de prestación']) }}
        @if($errors->has('ano_prestacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('ano_prestacion') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
