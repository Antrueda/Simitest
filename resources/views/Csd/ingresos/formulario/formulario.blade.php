@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="row">
    <div class="col-md">
        {{ Form::label('observacion', '10.8 Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Observaciones', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('observacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion') }}
            </div>
        @endif
    </div>
</div>
<h6 class="col-form-label-sm">Datos de quién brinda la información</h6>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_actividad_id', '10.9 ¿Qué actividades realiza para generar ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_actividad_id', $todoxxxx["acgening"], null, ['class' => $errors->first('prm_actividad_id') ? 'form-control form-control-sm is-invalid' : 'form-control float-right form-control-sm', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('prm_actividad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_actividad_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('trabaja', '10.9.1 Mencione en qué trabaja', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('trabaja', null, ['class' => $errors->first('trabaja') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('trabaja'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('trabaja') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_informal_id', '10.9.2 Seleccione', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_informal_id', $todoxxxx["trabinfo"], null, ['class' => $errors->first('prm_informal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_informal_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_informal_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_otra_id', '10.9.3 Seleccione', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_otra_id',  $todoxxxx["otractiv"], null, ['class' => $errors->first('prm_otra_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_otra_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_otra_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_laboral_id', '10.10 ¿Tipo de relación laboral?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_laboral_id', $todoxxxx["tiporela"], null, ['class' => $errors->first('prm_laboral_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_laboral_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_laboral_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_frecuencia_id', '10.11 ¿Con qué frecuencia recibe el ingreso por la actividad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_frecuencia_id', $todoxxxx["frecugen"], null, ['class' => $errors->first('prm_frecuencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_frecuencia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_frecuencia_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('intensidad', '10.12 ¿Con qué intensidad de horas ejerce la(s) actividad(es)?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::number('intensidad', null, ['class' => $errors->first('intensidad') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '24']) }}
            </div>
            <div class="col-md">
                 (horas al día)
            </div>
        </div>
        @if($errors->has('intensidad'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('intensidad') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_dificultad_id', '10.13 ¿Considera que la familia presenta dificultades económicas?', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
        {{ Form::select('prm_dificultad_id', $todoxxxx["condicio"], null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_dificultad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dificultad_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('razon', 'Indique la(s) razón(es)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('razon', null, ['class' => $errors->first('razon') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Indique la(s) Razón(es)', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('razon'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('v') }}
            </div>
        @endif
    </div>
</div>
