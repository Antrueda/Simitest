<div class="row">
    <div class="col-md">
        {{ Form::label('prm_aporta_id', '10.1 ¿Quién aporta?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_aporta_id', $familiares, null, ['class' => $errors->first('prm_aporta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_aporta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_aporta_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('mensual', '10.2 Total de Ingresos Mensuales ($)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('mensual', null, ['class' => $errors->first('mensual') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '$', 'min' => '0', 'max' => '99999999']) }}
        @if($errors->has('mensual'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('mensual') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('aporte', '10.3 Aporte que hace al hogar ($)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('aporte', null, ['class' => $errors->first('aporte') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '$', 'min' => '0', 'max' => '99999999']) }}
        @if($errors->has('aporte'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('aporte') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('jornada_entre', '10.4 Jornada en la que se realiza(n) la actividad', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::label('prm_entre_id', 'De', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
            </div>
            <div class="col-md">
                {{ Form::number('jornada_entre', null, ['class' => $errors->first('jornada_entre') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '12']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_entre_id', $ampm, null, ['class' => $errors->first('prm_entre_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                {{ Form::label('jornada_a', 'A', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
                {{ Form::label('prm_a_id', 'A', ['class' => 'control-label col-md-8 col-form-label-sm d-none']) }}
            </div>
            <div class="col-md">
                {{ Form::number('jornada_a', null, ['class' => $errors->first('jornada_a') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '12']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_a_id', $ampm, null, ['class' => $errors->first('prm_a_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
            </div>
        </div>
        @if($errors->has('jornada_entre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('jornada_entre') }}
            </div>
        @endif
        @if($errors->has('prm_entre_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_entre_id') }}
            </div>
        @endif
        @if($errors->has('jornada_a'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('jornada_a') }}
            </div>
        @endif
        @if($errors->has('prm_a_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_a_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('dias', '10.5 Días', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('dias[]', $dias, null, ['class' => $errors->first('dias') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'dias', 'multiple']) }}
        @if($errors->has('dias'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('dias') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @canany(['csdgeningresos-crear', 'csdgeningresos-editar'])
        {{ Form::submit('Agregar', ['class' => 'btn btn-primary']) }}
    @endcanany
</div>