
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
        {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm','id'=>'fecha']) !!}
        @if(isset($errors) && $errors->has('fecha'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fecha') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('area_id', 'Contexto/área/ dependencia que remite:', ['class' => 'control-labl']) !!}
        {!! Form::select('area_id', $todoxxxx['fosareas'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('area_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('upi_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        {!! Form::select('upi_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('upi_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('tipo_id', 'Se remite como:', ['class' => 'control-labl']) !!}
        {!! Form::select('tipo_id', $todoxxxx['tipofor'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('tipo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipo_id') }}
        </div>
        @endif
    </div>

 </div>
    <hr>
    <h6>DATOS BÁSICOS</h6>
    @if(!isset($todoxxxx["modeloxx"]->id))
    @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    @endif
    <div style="display: none">
        {{ Form::label('sis_nnaj_id', '1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('sis_nnaj_id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
    </div>
            <div class="form-row align-items-end">
                    <div class="form-group col-md-3">
                        {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
                        {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
                        {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);","onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
                        {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);","onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
                        {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);","onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
                    </div>
                <div class="form-group col-md-3">
                    {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid text-uppercase' : 'form-control form-control-sm text-uppercase',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('apodo', 'Apodo', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('apodo', null, ['class' => $errors->first('apodo') ? 'form-control form-control-sm is-invalid text-uppercase' : 'form-control form-control-sm text-uppercase',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('prm_tipodocu_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('prm_tipodocu_id', $todoxxxx['tipodocu'] , null, ['class' => 'form-control form-control-sm']) }}
                </div>
            <div class="form-group col-md-3">
                {{ Form::label('s_documento', 'Número del documento', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm']) }}
            </div>

            <div class="form-group col-md-2">
                {{ Form::label('sis_pai_id', 'País De Expedición', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('sis_pai_id', $todoxxxx['paisxxxx'] , null, ['class' => 'form-control sispaisx form-control-sm listarxx select2','id'=>'sis_pai_id']) }}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('sis_departam_id', 'Departamento De Expedición', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('sis_departam_id', $todoxxxx['departam'] , null, ['class' => 'form-control departam form-control-sm listarxx select2','id'=>'sis_departam_id']) }}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('sis_municipio_id', 'Municipio De Expedición', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('sis_municipio_id', $todoxxxx['municipi'] , null, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
                {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-2" id="edadxxxx" style="display: none">
                {{ Form::label('aniosxxx', 'Edad', ['class' => 'control-label']) }}
                {{ Form::text('aniosxxx', null, ['class' => 'form-control form-control-sm','id'=>'aniosxxx', 'readonly']) }}
            </div>
                
            </div>
<hr>
<div class="form-row align-items-end">            
    <div class="form-group col-md-4">
        {!! Form::label('prm_sexo_id', '¿Cuál es su sexo de nacimiento?:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_sexo_id', $todoxxxx['sexoxxxx'] , null, ['class' => 'form-control form-control-sm','id' => 'prm_sexo_id']) !!}
        @if($errors->has('prm_sexo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_sexo_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('prm_identidad_genero_id', '¿Cuál es su identidad de género?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_identidad_genero_id', $todoxxxx['generoxx'] , null, ['class' => 'form-control form-control-sm ']) !!}
        @if($errors->has('prm_identidad_genero_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_identidad_genero_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('prm_orientacion_sexual_id', '¿Cuál es su orientación sexual?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_orientacion_sexual_id', $todoxxxx['orientax'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('prm_orientacion_sexual_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_orientacion_sexual_id') }}
        </div>
        @endif
    </div>
</div>
<div class="form-row align-items-end">   
    <div class="form-group col-md-3">
        {!! Form::label('prm_etnia_id', '¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_etnia_id', $todoxxxx['grupetni'], null, ['class' => 'form-control form-control-sm ']) !!}
        @if($errors->has('prm_etnia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_etnia_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('prm_poblacion_etnia_id', 'Población:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_poblacion_etnia_id', $todoxxxx['grupindi'], null, ['class' => 'form-control form-control-sm ']) !!}
        @if($errors->has('prm_poblacion_etnia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_poblacion_etnia_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('prm_cuentadisc_id', '¿Tiene algún tipo de discapacidad?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_cuentadisc_id', $todoxxxx['condicio'], null, ['class' => 'form-control form-control-sm ', 'onchange' => 'doc2(this.value)']) !!}
        @if($errors->has('prm_cuentadisc_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_cuentadisc_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3" id="discap_div">
        {!! Form::label('prm_discapacidad_id', 'Indicar Tipo:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_discapacidad_id', $todoxxxx['discapac'], null, ['class' => 'form-control form-control-sm ']) !!}
        @if($errors->has('prm_discapacidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_discapacidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('prm_condicion_id', '¿Qué condición especial presenta?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_condicion_id', $todoxxxx['condixxx'], null, ['class' => 'form-control form-control-sm ']) !!}
        @if($errors->has('prm_condicion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_condicion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('departamento_cond_id', 'Departamento de condición', ['class' => 'control-label']) !!}
        {!! Form::select('departamento_cond_id', $todoxxxx['departxx'], null, ['class' => 'form-control form-control-sm ']) !!}
        
        @if($errors->has('departamento_cond_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('departamento_cond_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3" >
        {!! Form::label('municipio_cond_id', 'Municipio de condición', ['class' => 'control-label']) !!}
        {!! Form::select('municipio_cond_id', $todoxxxx['municexp'], null, ['class' => 'form-control form-control-sm']) !!}
        
        @if($errors->has('municipio_cond_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('municipio_cond_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3" id="certifica_div" >
        {!! Form::label('prm_certifica_id', '¿Cuenta con certificado?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_certifica_id', $todoxxxx['condicio'], null, ['class' => 'form-control form-control-sm ', 'onchange' => 'doc4(this.value)']) !!}
        @if($errors->has('prm_certifica_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_certifica_id') }}
        </div>
        @endif
    </div>


    <div class="form-group col-md-3" id="departcert_div">
        {!! Form::label('departamento_cert_id', 'Departamento de certificado', ['class' => 'control-label']) !!}
        {!! Form::select('departamento_cert_id', $todoxxxx['departxx'], null, ['class' => 'form-control form-control-sm ']) !!}
        
        @if($errors->has('departamento_cert_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('departamento_cert_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3" id="municipiocert_div">
        {!! Form::label('municipio_cert_id', 'Municipio de certificado', ['class' => 'control-label']) !!}
        {!! Form::select('municipio_cert_id', $todoxxxx['municexp'], null, ['class' => 'form-control form-control-sm']) !!}
        
        @if($errors->has('municipio_cert_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('municipio_cert_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('prm_cabeza_id', '¿Es cabeza de familia?', ['class' => 'control-label']) !!}
        {!! Form::select('prm_cabeza_id', $todoxxxx['condicio'], null, ['class' => 'form-control form-control-sm']) !!}
        
        @if($errors->has('prm_cabeza_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_cabeza_id') }}
        </div>
        @endif
    </div>
</div>
<hr>
    <div class="form-group col-md-12">
        {!! Form::label('justificacion', 'Justificación de la solicitud  (Relacioné  las  condiciones o  razones adicionales a  la información registrada anteriormente en el formato)', ['class' => 'control-label']) !!}
        {!! Form::textarea('justificacion', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        <p id="justificacion_char_counter" class="text-right">0/4000</p>
        @if($errors->has('justificacion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('justificacion') }}
        </div>
        @endif
    </div>
 <hr>  
 <div class="form-row align-items-end">      
    <div class="form-group col-md-6">
        {!! Form::label('prm_tipoenti_id', 'Tipo de atención', ['class' => 'control-label']) !!}
        {!! Form::select('prm_tipoenti_id', $todoxxxx['atencion'], null, ['class' => 'form-control form-control-sm','onchange' => 'doc3(this.value)']) !!}
        @if($errors->has('prm_tipoenti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipoenti_id') }}
        </div>
        @endif
    </div>
</div>
<div class="form-row align-items-end">       
    <div class="form-group col-md-3" id="intra_div">
        {!! Form::label('intra_id', 'Intrainstitucional:', ['class' => 'control-label']) !!}
        {!! Form::select('intra_id', $todoxxxx['intraxxx'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('intra_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('intra_id') }}
        </div>
        @endif
    </div>
</div> 
<br>   
<hr>
<div class="form-row align-items-end" id="inter_div" >       
    <div class="form-group col-md-3" >
        {!! Form::label('inter_id', 'Interinstitucional (Tipo de entidad  donde se remite)', ['class' => 'control-label']) !!}
        {{ Form::select('inter_id', $todoxxxx['sectorxx'], null, ['class' => 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('inter_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('inter_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3" id="nombre_div" >
        {!! Form::label('nombre_entidad', 'Nombre de Entidad', ['class' => 'control-label']) !!}
        {!! Form::text('nombre_entidad',  null, ['class' => 'form-control form-control-sm ',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);", 'max']) !!}
        @if($errors->has('nombre_entidad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre_entidad') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3" id="entidad_div">
        {!! Form::label('sis_entidad_id', 'Nombre Entidad Publica:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_entidad_id', $todoxxxx['entidades'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_entidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_entidad_id') }}
        </div>
        @endif
    </div>  
        <div class="form-group col-md-6" id="programa_div">
            {!! Form::label('ent_servicio_id', 'En el programa o la ruta de atención:', ['class' => 'control-label']) !!}
            {!! Form::select('ent_servicio_id', $todoxxxx['sis_servicios'], null, ['class' => 'form-control form-control-sm']) !!}
            @if($errors->has('ent_servicio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('ent_servicio_id') }}
            </div>
            @endif
        </div>
 </div>    
<hr>
@if(isset($todoxxxx["modeloxx"]->id)&&$todoxxxx["modeloxx"]->sis_nnaj_id!=null&&$todoxxxx["fechminx"]<=17)
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.familia')


<div class="form-row align-items-end">   
    <div class="form-row align-items-end">
        <div class="form-group col-md-2">
            {{ Form::label('primer_apellidoaco', '1er. Apellido Acompañante', ['class' => 'control-label']) }}
            {{ Form::text('primer_apellidoaco', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
        </div>
        <div class="form-group col-md-2">
            {{ Form::label('segundo_apellidoaco', '2do. Apellido Acompañante', ['class' => 'control-label']) }}
            {{ Form::text('segundo_apellidoaco', null, ['class' => 'form-control form-control-sm' ,
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);","onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
        </div>
        <div class="form-group col-md-2">
            {{ Form::label('primer_nombreaco', '1er. Nombre Acompañante', ['class' => 'control-label']) }}
            {{ Form::text('primer_nombreaco', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);","onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
        </div>
        <div class="form-group col-md-2">
            {{ Form::label('segundo_nombreaco', '2do. Nombre Acompañante', ['class' => 'control-label']) }}
            {{ Form::text('segundo_nombreaco', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);","onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
        </div>

    <div class="form-group col-md-2">
        {{ Form::label('prm_docuaco_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_docuaco_id', $todoxxxx['tipodocr'], null, ['class' => 'form-control form-control-sm','id'=>'prm_docuaco_id']) }}
    </div>
    <div class="form-group col-md-2">
        {{ Form::label('documentoaco', 'Número del documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('documentoaco', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    </div>
</div>
@endif
<div class="form-group col-md-6">
    {!! Form::label('seguimiento_id', '¿Se requiere realizar seguimiento?   :', ['class' => 'control-label']) !!}
    {!! Form::select('seguimiento_id', $todoxxxx['condicio'], null, ['class' => 'form-control form-control-sm']) !!}
    @if($errors->has('seguimiento_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('seguimiento_id') }}
    </div>
    @endif
</div>

<div class="form-row align-items-end">   
    <div class="form-group col-md-6">
        {!! Form::label('userd_doc', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('userd_doc', $todoxxxx['primresp'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('userd_doc'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('userd_doc') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6" id="idipron_div">
        {!! Form::label('userr_doc', 'PERSONA QUIEN RECIBE:', ['class' => 'control-label']) !!}
        {!! Form::select('userr_doc', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('userr_doc'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('userr_doc') }}
        </div>
        @endif
    </div>
</div>
<hr>

<div class="form-row align-items-end" id="recibe_div" > 
    <div class="form-group col-md-12"> 
    <h6>PERSONA QUIEN RECIBE</h6>
    </div>  
    <br>
    <div class="form-group col-md-3">
        {!! Form::label('nombreinter', 'Nombres y Apellidos:', ['class' => 'control-label']) !!}
        {!! Form::text('nombreinter',  null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'maxlength' => '200' ]) !!}
        @if($errors->has('nombreinter'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombreinter') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('no_docinter', 'No. de Documento:', ['class' => 'control-label']) !!}
        {!! Form::text('no_docinter', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'minlength' => '6','maxlength' => '10']) !!}
        @if($errors->has('no_docinter'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('no_docinter') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('intercargo', 'Cargo o Nivel y dependencia:', ['class' => 'control-label']) !!}
        {!! Form::text('intercargo', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'maxlength' => '200']) !!}
        @if($errors->has('intercargo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('intercargo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('telefonointer', 'Teléfono:', ['class' => 'control-label']) !!}
        {!! Form::text('telefonointer', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);",'minlength' => '7', 'maxlength' => '10']) !!}
        @if($errors->has('telefonointer'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('telefonointer') }}
        </div>
        @endif
    </div>
</div>
<br><br>

