<div class="form-row align-items-end">
    <div class="form-group col-md-6">
        {{ Form::label('s_cursos', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_cursos', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid ' :
            'form-control form-control-sm', 'placeholder' => 'Nombre del Curso', 'maxlength' => '120',
            'autofocus',"onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase']) }}
        @if($errors->has('s_cursos'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_cursos') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('descripcion', 'Descripción:', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid contarcaracteres' :
            'form-control form-control-sm contarcaracteres', 'placeholder' => 'Escriba una descripción para el Motivo de Egreso',
            'contador'=>'ags_descripcion',
            'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="ags_descripcion">0/4000</p>
        @if($errors->has('descripcion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('descripcion') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('grado_reque_id', 'Grado Requerido', ['class' => 'control-label']) }}
        {{ Form::select('grado_reque_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('grado_reque_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione el grado requerido para el curso']) }}
        @if($errors->has('grado_reque_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('grado_reque_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('tipo_curso_id', 'Tipo de Curso', ['class' => 'control-label']) }}
        {{ Form::select('tipo_curso_id', $todoxxxx['cursoxxx'], null, ['class' => $errors->first('tipo_curso_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione el tipo de curso']) }}
        @if($errors->has('tipo_curso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipo_curso_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('estusuario_id','Justificación Estado') }}
        {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
    </div>
</div>
