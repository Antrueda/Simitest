<div class="row">
    <div class="col-md-3">
        {{ Form::label('facilitas', '6.1 ¿En qué contextos se le facilita interactuar con otras personas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('facilitas[]', $todoxxxx['contexto'], null, ['class' => $errors->first('facilitas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'facilitas', 'multiple', 'autofocus']) }}
        @if($errors->has('facilitas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('facilitas') }}
            </div>
        @endif
    </div>
    <div class="col-md-9">
        {{ Form::label('descripcion', '6.2 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('descripcion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        {{ Form::label('dificultades', '6.3 ¿En qué contextos se le dificulta interactuar con otras personas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('dificultades[]', $todoxxxx['contextx'], null, ['class' => $errors->first('dificultades') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'dificultadex', 'onchange' => 'doc(this.value)', 'multiple']) }}
        @if($errors->has('dificultades'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('dificultades') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_dificultad_id', '6.4 ¿Cuál es la dificultad para lograr la interacción?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dificultad_id', $todoxxxx['dificult'], null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_dificultad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dificultad_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('completa', '6.5 Realice una descripción completa de sí mismo en todos los aspectos (cualidades, aspectos a mejorar y expectativas a corto, mediano y largo plazo):', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('completa', null, ['class' => $errors->first('completa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción completa', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('completa'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('completa') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
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
