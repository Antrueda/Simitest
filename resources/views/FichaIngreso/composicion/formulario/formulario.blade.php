@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

<div class="form-row align-items-end">
<input type="hidden" id="tablaselect" value="NO">
    <div class="form-group col-md-4">
        {{ Form::label('s_primer_apellido', '1.1 1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_parentesco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_parentesco_id', $todoxxxx["parentes"], null, ['class' => 'form-control form-control-sm']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('d_nacimiento', '1.4 Fecha de Nacimiento', ['class' => 'control-label']) }}
        {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
    </div>
    <div class="form-group col-md-4" id="edadxxxx">
        {{ Form::label('aniosxxx', '1.5 Edad (Años)'.$todoxxxx['aniosxxx'], ['class' => 'control-label']) }}
        {{ Form::number('aniosxxx', null, ['class' => $errors->first('aniosxxx') ?
    'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', 'max' => '100','id'=>'aniosxxx']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('prm_tipodocu_id', 'Tipo de Documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipodocu_id', $todoxxxx["tipodocu"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'No. de Documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm','minlength' => '6', 'maxlength' => '11']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_pai_id', 'País de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_pai_id', $todoxxxx['pais_idx'], null, ['class' => $errors->first('sis_pai_id') ? 'form-control sispaisx form-control-sm is-invalid listarxx' : 'form-control sispaisx form-control-sm listarxx']) }}
        @if($errors->has('sis_pai_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_pai_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_departamento_id', 'Departamento de Expedición', ['class' => 'control-label ']) }}
        {{ Form::select('sis_departamento_id', $todoxxxx['departam'], null, ['class' => $errors->first('sis_departamento_id') ? 'form-control departam form-control-sm is-invalid listarxx' : 'form-control departam form-control-sm listarxx']) }}
        @if($errors->has('sis_departamento_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_departamento_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_municipio_id', 'Ciudad/Municipio de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx['municipi'], null, ['class' => $errors->first('sis_municipio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('sis_municipio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_municipio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_ocupacion_id', 'Ocupación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_ocupacion_id', $todoxxxx["ocupacio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('s_telefono', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_convive_nnaj_id', '¿Convive con el NNAJ?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_convive_nnaj_id', $todoxxxx["convivex"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_vinculado_idipron_id', '¿Estuvo vinculado(a) al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_vinculado_idipron_id', $todoxxxx["convivex"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_reprlega_id', '¿Es el representante legal?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_reprlega_id', $todoxxxx["reprlega"], null, ['class' => 'form-control form-control-sm']) }}
    </div>


</div>
