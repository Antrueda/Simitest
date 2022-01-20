<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre del área', 'maxlength' => '120','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', 'autofocus','style'=>'height: 28px']) }}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    @include('administracion.Areas.Area.Formulario.motivoestado')
    @include('layouts.registro')
</div>
