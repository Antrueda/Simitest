<div class="form-group row">
    <div class="form-group col-md-6" style="height:32px ">
        {{ Form::label('prm_trecurso_id', 'Tipo de Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_trecurso_id', $todoxxxx["trecurso"], null, ['class' => $errors->first('prm_trecurso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_trecurso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_trecurso_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_recurso', 'Nombre del Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_recurso', null, ['class' => $errors->first('s_recurso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm' ,
            'placeholder' => 'Nombre del recurso', 'maxlength' => '120', 'autofocus',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;height:33px']) }}
            @if($errors->has('s_recurso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_recurso') }}
        </div>
        @endif
        </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_umedida_id', 'Unidad de medida', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_umedida_id', $todoxxxx["umedidax"], null, ['class' => $errors->first('i_prm_umedida_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_umedida_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_umedida_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('estusuario_id', 'Justificación Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('estusuario_id', $todoxxxx["motivoxx"], null, ['class' => $errors->first('estusuario_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
    </div>
</div>
