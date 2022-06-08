<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre del área', 'maxlength' => '120','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', 'autofocus','style'=>'height: 28px']) }}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prm_principal', 'Principal:', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::select('prm_principal', $todoxxxx['condixxx'], null, ['class' => $errors->first('prm_principal') ? 'form-control  is-invalid' : 'form-control']) }}
        @if($errors->has('prm_principal'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_principal') }}
        </div>
        @endif
    </div>
    @include('administracion.Areas.Area.Formulario.motivoestado')
    @include('layouts.registro')
</div>
