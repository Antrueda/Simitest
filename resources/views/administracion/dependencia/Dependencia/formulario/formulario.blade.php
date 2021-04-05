<div class="form-group row">
    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"],'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_cvital_id', 'Ciclo Vital', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_cvital_id', $todoxxxx["i_prm_cvital_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tdependen_id', 'Tipo de Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tdependen_id', $todoxxxx["i_prm_tdependen_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sexo_id', 'Sexo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sexo_id', $todoxxxx["i_prm_sexo_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"],'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_departam_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_departam_id', $todoxxxx["sis_departam_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_municipio_id', 'Municipio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx["sis_municipio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_localidad_id', 'Localidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_localidad_id', $todoxxxx["sis_localidad_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_upz_id', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_upz_id', $todoxxxx["sis_upz_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_upzbarri_id', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_upzbarri_id', $todoxxxx["sis_barrio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('s_telefono', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_correo', 'Correo electrónico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_correo', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-row">
        <div class="form-group col-md-12 tooltipx" tabindex="0" data-toggle="tooltip" title="Código de la tabla sis_multivalores
        ">
            {{ Form::label('simianti_id', 'Código Antiguo', ['class' => 'control-label']) }}
            {{ Form::text('simianti_id', null, ['class' => $errors->first('simianti_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                      "onkeyup" => "javascript:this.value=this.value.toUpperCase();"])}}
            @if($errors->has('simianti_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('simianti_id') }}
            </div>
            @endif
        </div>
    </div>
    @include('administracion.dependencia.Dependencia.formulario.motivoestado')
    @include('layouts.tiempos')
    @include('layouts.registro')
</div>

