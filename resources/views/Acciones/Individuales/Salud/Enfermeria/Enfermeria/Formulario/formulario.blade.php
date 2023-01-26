<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

input[type="checkbox"]:checked {
    box-shadow: 0 0 2px #0069d9, 0 0 10px #0069d9, 0 0 15px #0069d9;
}

input[type="checkbox"]:hover {
    box-shadow: 0 0 2px #A9A9A9, 0 0 10px #A9A9A9, 0 0 15px #A9A9A9;
}
.perfilvocacional .lista{
    height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}

table, th, td {
  border: 2px solid black;
}
</style>


<div class="row">

<div class="form-group col-md-6">
        {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label col-form-label-sm']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('sis_serv_id', 'TIPO DE SERVICIO:', ['class' => 'control-label col-form-label-sm']) !!}
        {!! Form::select('sis_serv_id', $todoxxxx['sis_servicios'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('sis_serv_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_serv_id') }}
        </div>
        @endif
    </div>


        <div class="form-group col-md-6">
        {{ Form::label('fecha', 'Fecha de diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
        </div>

        <div class="form-group col-md-12">
            {!! Form::label('sintoma', 'Sintoma:', ['class' => 'control-label']) !!}
            {!! Form::textarea('sintoma', null, ['class' => 'form-control form-control-sm text-uppercase','maxlength' => '500','onkeyup' => 'countCharts("sintoma")' ]) !!}
            <p id="sintoma_char_counter" class="text-right">0/4000</p>
            @if($errors->has('sintoma'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sintoma') }}
            </div>
            @endif
        </div>


       


        <style>
            .has-error .select2-selection {
            border-color: rgb(185, 74, 72) !important;
        }
        </style>
        <div class="form-row">
        
            
            <div class="form-group col-md-6" {{$errors->first('prm_actividad_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_actividad_id', ' MOTIVO DE ATENCIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_actividad_id', $todoxxxx['prm_acti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
                @if($errors->has('prm_actividad_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_actividad_id') }}
                </div>
                @endif
            </div>


            <div id="tipo_curso_box" class="d-none form-group col-md-6 {{$errors->first('prm_tipo_curso') ? 'has-error' : ''}}">
                {!! Form::label('prm_tipo_curso', 'TIPO DE ATENCIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_tipo_curso', $todoxxxx['tpcursos'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_tipo_curso'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_tipo_curso') }}
                </div>
                @endif
            </div>

            <div id="prm_especial_fiel" class="d-none form-group col-md-6 {{$errors->first('prm_especial_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_especial_id', 'ESPECIALIDAD:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_especial_id', $todoxxxx['prm_especial'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_especial_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_especial_id') }}
                </div>
                @endif
            </div>

        
            <div id="prm_especiales" class="d-none form-group col-md-6 {{$errors->first('prm_especiales_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_especiales_id', 'ESPECIALIDAD:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_especiales_id', $todoxxxx['prm_especialidad'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_especiales_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_especiales_id') }}
                </div>
                @endif
            </div>

            <div id="prm_especialidades1" class="d-none form-group col-md-6 {{$errors->first('prm_especialidades_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_especialidades_id', 'ESPECIALIDAD:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_especialidades_id', $todoxxxx['prm_especialidades'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_especialidades_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_especialidades_id') }}
                </div>
                @endif
            </div>


            <div id="prm_modalidad" class="d-none form-group col-md-6 {{$errors->first('prm_modalidades_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_modalidades_id', 'MODALIDAD DE ATENCIÓN :', ['class' => 'control-label']) !!}
                {!! Form::select('prm_modalidades_id', $todoxxxx['prm_modalidades'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_modalidades_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_modalidades_id') }}
                </div>
                @endif
            </div>

            <div id="tipoacti_id_field" class="d-none form-group col-md-6 {{$errors->first('tipoacti_id') ? 'has-error' : ''}}">
                {!! Form::label('tipo_vacunas_id', 'Tipo de Vacuna:', ['class' => 'control-label']) !!}
                {!! Form::select('tipo_vacunas_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
                @if($errors->has('tipo_vacunas_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipo_vacunas_id') }}
                </div>
                @endif
            </div> 
            
            <div id="actividade_id_field" class="d-none form-group col-md-6 {{$errors->first('actividade_id') ? 'has-error' : ''}}">
                {!! Form::label('vacuna_id', 'Vacuna:', ['class' => 'control-label']) !!}
                {!! Form::select('vacuna_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('vacuna_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('vacuna_id') }}
                </div>
                @endif
            </div>
        

            
            <div id="tipo_aten" class="d-none form-group col-md-6 {{$errors->first('prm_tipo_aten') ? 'has-error' : ''}}">
                {!! Form::label('prm_tipo_aten', 'TIPO DE ATENCIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_tipo_aten', $todoxxxx['tipoaten'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_tipo_aten'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_tipo_aten') }}
                </div>
                @endif
            </div>

            <div id="prm_espe_ap" class="d-none form-group col-md-6 {{$errors->first('prm_especialidad_ap') ? 'has-error' : ''}}">
                {!! Form::label('prm_especialidad_ap', 'ESPECIALIDAD AP:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_especialidad_ap', $todoxxxx['apespeci'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_especialidad_ap'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_especialidad_ap') }}
                </div>
                @endif
            </div>

            <div id="prm_prueba_tamizajes" class="d-none form-group col-md-6 {{$errors->first('prm_prueba_tamizaje') ? 'has-error' : ''}}">
                {!! Form::label('prm_prueba_tamizaje', 'PRUEBAS DE TAMIZAJE:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_prueba_tamizaje', $todoxxxx['tptamizaje'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_prueba_tamizaje'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_prueba_tamizaje') }}
                </div>
                @endif
            </div>


            <div id="prm_novedads" class="d-none form-group col-md-6 {{$errors->first('prm_novedad') ? 'has-error' : ''}}">
                {!! Form::label('prm_novedad', 'TIPO DE NOVEDAD:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_novedad', $todoxxxx['novedadx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_novedad'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_novedad') }}
                </div>
                @endif
            </div>

            <div id="prm_proced" class="d-none form-group col-md-6 {{$errors->first('prm_procedimiento') ? 'has-error' : ''}}">
                {!! Form::label('prm_procedimiento', 'TIPO DE PROCEDIMIENTO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_procedimiento', $todoxxxx['procedix'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_procedimiento'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_procedimiento') }}
                </div>
                @endif
            </div>

            <div id="prm_formula" class="d-none form-group col-md-6 {{$errors->first('prm_formulacion') ? 'has-error' : ''}}">
                {!! Form::label('prm_formulacion', 'TIPO DE FORMULACION:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_formulacion', $todoxxxx['tipfomulacion'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_formulacion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_formulacion') }}
                </div>
                @endif
            </div>

            <div id="prm_convenio_id_field" class="d-none form-group col-md-6 {{$errors->first('prm_convenio_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_convenio_id', 'CONVENIO /PROGRAMA:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_convenio_id',$todoxxxx['convenios_progs'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_convenio_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_convenio_id') }}
                </div>
                @endif
            </div>
       

            <div id="prm_tipyd" class="d-none form-group col-md-6 {{$errors->first('prm_promocion') ? 'has-error' : ''}}">
                {!! Form::label('prm_promocion', 'TIPO DE PROMOCION Y DETECCION:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_promocion', $todoxxxx['tippyd'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_promocion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_promocion') }}
                </div>
                @endif
            </div>
     

            <div id="prm_chindividuals" class="d-none form-group col-md-6 {{$errors->first('prm_chindividual') ? 'has-error' : ''}}">
                {!! Form::label('prm_chindividual', 'CHARLA INDIVIDUAL:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_chindividual', $todoxxxx['chindividual'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_chindividual'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_chindividual') }}
                </div>
                @endif
            </div>


            <div id="prm_tztamizaje" class="d-none form-group col-md-6 {{$errors->first('prm_tamizaje') ? 'has-error' : ''}}">
                {!! Form::label('prm_tamizaje', 'TZ TAMIZAJE:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_tamizaje', $todoxxxx['tamizaje'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_tamizaje'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_tamizaje') }}
                </div>
                @endif
            </div>

            <div id="prm_afiliacions" class="d-none form-group col-md-6 {{$errors->first('prm_afiliacion') ? 'has-error' : ''}}">
                {!! Form::label('prm_afiliacion', 'TRAMITE DE AFILIACIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_afiliacion', $todoxxxx['tramitex'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_afiliacion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_afiliacion') }}
                </div>
                @endif
            </div>


            <div id="prm_tramepsx" class="d-none form-group col-md-6 {{$errors->first('prm_trameps') ? 'has-error' : ''}}">
                {!! Form::label('prm_trameps', 'TRAMITE DE EPS:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_trameps', $todoxxxx['tramitex'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_trameps'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_trameps') }}
                </div>
                @endif
            </div>

        
         

            <div id="prm_afilicionx" class="d-none form-group col-md-6 {{$errors->first('prm_afilicion') ? 'has-error' : ''}}">
                {!! Form::label('prm_afilicion', 'ESTADO DE AFILIACIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_afilicion', $todoxxxx['cambioeps'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_afilicion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_afilicion') }}
                </div>
                @endif
            </div>

            <div id="prm_estafili" class="d-none form-group col-md-6 {{$errors->first('prm_estafilicion') ? 'has-error' : ''}}">
                {!! Form::label('prm_estafilicion', 'ESTADO DE AFILIACIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_estafilicion', $todoxxxx['afiliacion'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_estafilicion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_estafilicion') }}
                </div>
                @endif
            </div>

            <div id="prm_estactivo" class="d-none form-group col-md-6 {{$errors->first('prm_estafilicionx') ? 'has-error' : ''}}">
                {!! Form::label('prm_estafilicionx', 'ESTADO DE AFILIACIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_estafilicionx', $todoxxxx['afiliacions'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_estafilicionx'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_estafilicionx') }}
                </div>
                @endif
            </div>


            <div id="prm_condicionx" class="d-none form-group col-md-6 {{$errors->first('prm_condicion') ? 'has-error' : ''}}">
                {!! Form::label('prm_condicion', 'ESTADO DE AFILIACIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_condicion', $todoxxxx['condicion'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_condicion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_condicion') }}
                </div>
                @endif
            </div>

            <div id="prm_entidadx" class="d-none form-group col-md-4 {{$errors->first('prm_entidad') ? 'has-error' : ''}}">
                {!! Form::label('prm_entidad', 'ENTIDAD PROMOTORA DE SALUD:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_entidad', $todoxxxx['entidad'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_entidad'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_entidad') }}
                </div>
                @endif
            </div>
 


            <div id="prm_regimenespx" class="d-none form-group col-md-6 {{$errors->first('prm_regimenesp') ? 'has-error' : ''}}">
                {!! Form::label('prm_regimenesp', 'CSD - RÉGIMEN ESPECIAL EN SALUD:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_regimenesp', $todoxxxx['entidad'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_regimenesp'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_regimenesp') }}
                </div>
                @endif
            </div>

            <div id="prm_vinculadox" class="d-none form-group col-md-6 {{$errors->first('prm_vinculado') ? 'has-error' : ''}}">
                {!! Form::label('prm_vinculado', 'CSD - RÉGIMEN VINCULADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_vinculado', $todoxxxx['vinculado'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_vinculado'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_vinculado') }}
                </div>
                @endif
            </div>

            <div id="prm_sisbenx" class="d-none form-group col-md-6 {{$errors->first('prm_sisben') ? 'has-error' : ''}}">
                {!! Form::label('prm_sisben', 'CSD - RÉGIMEN VINCULADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_sisben', $todoxxxx['sisben'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_sisben'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_sisben') }}
                </div>
                @endif
            </div>


 

 <div id="d_puntaje" class="d-none form-group col-md-4 {{$errors->first('d_puntaje_sisben') ? 'has-error' : ''}}">
    {!! Form::label('d_puntaje_sisben', 'Puntaje SISBEN:', ['class' => 'control-label ']) !!}
    {{ Form::text('d_puntaje_sisben', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'maxlength'=>3]) }}

    @if($errors->has('d_puntaje_sisben'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('d_puntaje_sisben') }}
    </div>
    @endif
</div>


<div id="prm_tienesisben" class="d-none form-group col-md-4 {{$errors->first('prm_tiensisb_id') ? 'has-error' : ''}}">
    {!! Form::label('prm_tiensisb_id', 'Tiene SISBEN:', ['class' => 'control-label']) !!}
    {!! Form::select('prm_tiensisb_id', $todoxxxx['sisben'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
    @if($errors->has('prm_tiensisb_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('prm_tiensisb_id') }}
    </div>
    @endif
</div>

            <div id="observaciones" class="d-none form-group col-md-12 {{$errors->first('observacion') ? 'has-error' : ''}}">
                {!! Form::label('observacion', 'OBSERVACIONES:', ['class' => 'control-label']) !!}
                {!! Form::textarea('observacion', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('observacion')"]) !!}
                <p id="observacion_char_counter" class="text-right">0/4000</p>
                @if($errors->has('observacion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('observacion') }}
                </div>
                @endif
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el registro:', ['class' => 'control-label']) !!}
                {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
                @if($errors->has('user_fun_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('user_fun_id') }}
                </div>
                @endif
            </div>
        </div>
        
    
   
