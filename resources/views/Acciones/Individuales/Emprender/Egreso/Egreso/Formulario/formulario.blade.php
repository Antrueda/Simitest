<hr style="border:3px;">
<div class="row">
  
  <div class="col-md-4">
    {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upi_id', 'UPI De atención', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
</div>
<hr>
<h5>Datos Básicos</h5>
<hr>
<div class="row">
@if($todoxxxx['usuariox']->sis_nnaj->FiResidencia != null)
        <div class="form-group col-md-4">
          {{ Form::label('s_primer_apellido', '1.1 1er. Apellido', ['class' => 'control-label']) }}
          {{ Form::text('s_primer_apellido', $todoxxxx['usuariox']->s_primer_apellido, ['class' => $errors->first('s_primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;','readonly',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
            }}
          @if($errors->has('s_primer_apellido'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_primer_apellido') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
          {{ Form::text('s_segundo_apellido', $todoxxxx['usuariox']->s_segundo_apellido, ['class' => $errors->first('s_segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;','readonly',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
          }}
          @if($errors->has('s_segundo_apellido'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_segundo_apellido') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
          {{ Form::text('s_primer_nombre', $todoxxxx['usuariox']->s_primer_nombre, ['class' => $errors->first('s_primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;','readonly',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
        }}
          @if($errors->has('s_primer_nombre'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_primer_nombre') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
          {{ Form::text('s_segundo_nombre', $todoxxxx['usuariox']->s_segundo_nombre, ['class' => $errors->first('s_segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;','readonly',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
        }}
          @if($errors->has('s_segundo_nombre'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_segundo_nombre') }}
          </div>
          @endif
        </div>

        <div class="form-group col-md-4">
          {{ Form::label('s_nombre_identitario', '1.2 Nombre Identitario', ['class' => 'control-label']) }}
          {{ Form::text('s_nombre_identitario', $todoxxxx['usuariox']->s_nombre_identitario, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;','readonly',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
        }}
          @if($errors->has('s_nombre_identitario'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_nombre_identitario') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('s_apodo', '1.3 Apodo', ['class' => 'control-label']) }}
          {{ Form::text('s_apodo', $todoxxxx['usuariox']->s_apodo, ['class' => $errors->first('s_apodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;','readonly',
                    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
        }}
          @if($errors->has('s_apodo'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('s_apodo') }}
          </div>
          @endif
        </div>

        <div class="form-group col-md-4">
          {{ Form::label('d_nacimiento', '1.4 Fecha de Nacimiento', ['class' => 'control-label']) }}
          {{ Form::date('d_nacimiento', $todoxxxx['usuariox']->nnaj_nacimi->d_nacimiento, ['class' => 'form-control form-control-sm','readonly','autocomplete'=>"off"]) }}
          @if($errors->has('d_nacimiento'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('d_nacimiento') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4" id="edadxxxx">
          {{ Form::label('aniosxxx', '1.5 Edad (Años)', ['class' => 'control-label']) }}
          {{ Form::number('aniosxxx', isset($todoxxxx['usuariox'])?$todoxxxx['usuariox']->nnaj_nacimi->Edad:null, ['class' => $errors->first('aniosxxx') ?
        'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '6', 'max' => '100','id'=>'aniosxxx']) }}
        </div>


        <div class="form-group col-md-4">
          {{ Form::label('sis_pai_id', '1.6 País de Nacimiento', ['class' => 'control-label']) }}
          {{ Form::select('sis_pai_id', $todoxxxx['pais_idx'], $todoxxxx['usuariox']->nnaj_nacimi->sis_municipio->sis_departam->sis_pai_id, ['class' => $errors->first('sis_pai_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm select2', 'readonly']) }}
          @if($errors->has('sis_pai_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('sis_pai_id') }}
          </div>
          @endif
      </div>
      <div class="form-group col-md-4">
          {{ Form::label('sis_departam_id', '1.6(a) Departamento de Nacimiento', ['class' => 'control-label']) }}
          {{ Form::select('sis_departam_id', $todoxxxx['departam'],  $todoxxxx['usuariox']->nnaj_nacimi->sis_municipio->sis_departam_id, ['class' => $errors->first('sis_departam_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm select2', 'readonly']) }}
          @if($errors->has('sis_departam_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('sis_departam_id') }}
          </div>
          @endif
      </div>
      <div class="form-group col-md-4">
          {{ Form::label('sis_municipio_id', '1.6(b) Ciudad/Municipio de Nacimiento', ['class' => 'control-label']) }}
          {{ Form::select('sis_municipio_id', $todoxxxx['municipi'], $todoxxxx['usuariox']->nnaj_nacimi->sis_municipio_id, ['class' => $errors->first('sis_municipio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'readonly']) }}
          @if($errors->has('sis_municipio_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('sis_municipio_id') }}
          </div>
          @endif
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('prm_tipodocu_id', '1.11 Documento con el cual se identifica', ['class' => 'control-label']) }}
        {{ Form::select('prm_tipodocu_id', $todoxxxx['tipodocu'], $todoxxxx['usuariox']->nnaj_docu->prm_tipodocu_id, ['class' => $errors->first('prm_tipodocu_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'readonly']) }}
        @if($errors->has('prm_tipodocu_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipodocu_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_documento', '1.13 No. de Documento', ['class' => 'control-label']) }}
      {{ Form::number('s_documento', $todoxxxx['usuariox']->nnaj_docu->s_documento, ['class' => $errors->first('s_documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);", 'minlength' => '6', 'maxlength' => '15', 'readonly']) }}
      @if($errors->has('s_documento'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('s_documento') }}
      </div>
      @endif
  </div>
      <div class="form-group col-md-4">
        {{ Form::label('prm_gsanguino_id', '1.10 Grupo Sanguíneo', ['class' => 'control-label']) }}
        {{ Form::select('prm_gsanguino_id', $todoxxxx['grupsang'], $todoxxxx['usuariox']->nnaj_fi_csd->prm_gsanguino_id, ['class' => $errors->first('prm_gsanguino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'readonly']) }}
        @if($errors->has('prm_gsanguino_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_gsanguino_id') }}
        </div>
        @endif
    </div>

        <div class="form-group col-md-4">
          {{ Form::label('prm_factor_rh_id', 'RH', ['class' => 'control-label']) }}
          {{ Form::select('prm_factor_rh_id', $todoxxxx['factorrh'], $todoxxxx['usuariox']->nnaj_fi_csd->prm_factor_rh_id, ['class' => $errors->first('prm_factor_rh_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'readonly']) }}
          @if($errors->has('prm_factor_rh_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_factor_rh_id') }}
          </div>
          @endif
      </div>
     
      @if($todoxxxx['usuariox']->sis_nnaj->iMatriculaNnajs->count()>0)   
      <div class="col-md-2">
        {{ Form::label('grado', 'Grado de escolaridad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('grado', $todoxxxx['usuariox']->sis_nnaj->Matricula, ['class' => $errors->first('grado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);",'readonly']) }}
            @if($errors->has('grado'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('grado') }}
              </div>
           @endif
      </div>
      @endif
      @if($todoxxxx['usuariox']->sis_nnaj->fi_formacions != null)   
         <div class="col-md-2">
        {{ Form::label('cursado', 'Último año cursado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('cursado', $todoxxxx['ulgradap'],$todoxxxx['usuariox']->sis_nnaj->fi_formacions->prm_ultgrapr->id, ['class' => $errors->first('cursado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',]) }}
            @if($errors->has('cursado'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('cursado') }}
              </div>
           @endif
      </div>
      @else
      <div class="col-md-2">
        {{ Form::label('cursado', 'Último año cursado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('cursado', $todoxxxx['ulgradap'],null, ['class' => $errors->first('cursado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('cursado'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('cursado') }}
              </div>
           @endif
      </div>
      @endif

<div class="col-md-4">
{{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('telefono', $todoxxxx['usuariox']->sis_nnaj->FiResidencia->s_telefono_uno, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','maxlength'=>'10', "onkeypress" => "return soloNumeros(event);"]) }}
   @if($errors->has('telefono'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('telefono') }}
     </div>
  @endif
</div>
<div class="col-md-4">
{{ Form::label('cursado', 'Celular 1', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('celular', $todoxxxx['usuariox']->sis_nnaj->FiResidencia->s_telefono_dos, ['class' => $errors->first('celular') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','maxlength'=>'10',"onkeypress" => "return soloNumeros(event);"]) }}
   @if($errors->has('celular'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('celular') }}
     </div>
  @endif
</div>
<div class="col-md-4">
{{ Form::label('celular2', 'Celular 2', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('celular2', $todoxxxx['usuariox']->sis_nnaj->FiResidencia->s_telefono_tres, ['class' => $errors->first('celular2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','maxlength'=>'10',"onkeypress" => "return soloNumeros(event);"]) }}
   @if($errors->has('celular2'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('celular2') }}
     </div>
  @endif
</div>
@else
<div class="col-md-4">
{{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('telefono',null, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
   @if($errors->has('telefono'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('telefono') }}
     </div>
  @endif
</div>
<div class="col-md-4">
{{ Form::label('celular', 'Celular 1', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('celular', null, ['class' => $errors->first('celular') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
   @if($errors->has('celular'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('celular') }}
     </div>
  @endif
</div>
<div class="col-md-4">
{{ Form::label('celular2', 'Celular 2', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('celular2', null, ['class' => $errors->first('celular2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
   @if($errors->has('celular2'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('celular2') }}
     </div>
  @endif
</div>
@endif



</div>
@if($todoxxxx['usuariox']->nnaj_nacimi->Edad<18)
<hr>
<div class="row mt-3">
<div class="col-md-12">
<h5>INFORMACIÓN BÁSICA DEL REPRESENTANTE LEGAL</h5>
</div>
</div>
<hr>
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<hr>
<div class="row">
<div class="col-md-3">
{{ Form::label('ape1_autorizado', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('ape1_autorizado', null, ['class' => $errors->first('ape1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
@if($errors->has('ape1_autorizado'))
<div class="invalid-feedback d-block">
 {{ $errors->first('ape1_autorizado') }}
</div>
@endif
</div>
<div class="col-md-3">
{{ Form::label('ape2_autorizado', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('ape2_autorizado', null, ['class' => $errors->first('ape2_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
@if($errors->has('ape2_autorizado'))
<div class="invalid-feedback d-block">
 {{ $errors->first('ape2_autorizado') }}
</div>
@endif
</div>
<div class="col-md-3">
{{ Form::label('nom1_autorizado', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('nom1_autorizado', null, ['class' => $errors->first('nom1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
@if($errors->has('nom1_autorizado'))
<div class="invalid-feedback d-block">
 {{ $errors->first('nom1_autorizado') }}
</div>
@endif
</div>
<div class="col-md-3">
{{ Form::label('nom2_autorizado', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::text('nom2_autorizado', null, ['class' => $errors->first('nom2_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
@if($errors->has('nom2_autorizado'))
<div class="invalid-feedback d-block">
 {{ $errors->first('nom2_autorizado') }}
</div>
@endif
</div>
</div>
<div class="row">
<div class="col-md-3">
{{ Form::label('parent_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
{{ Form::select('parent_id', $todoxxxx['parentes'], null, ['class' => $errors->first('parent_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
@if($errors->has('parent_id'))
 <div class="invalid-feedback d-block">
   {{ $errors->first('parent_id') }}
 </div>
@endif
</div>
<div class="col-md-3">
  {{ Form::label('telefonopare', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('telefonopare',  null, ['class' => $errors->first('telefonopare') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
  @if($errors->has('telefonopare'))
   <div class="invalid-feedback d-block">
     {{ $errors->first('telefonopare') }}
   </div>
  @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('custo_id', 'Acta de Custodia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('custo_id', $todoxxxx['parentes'], null, ['class' => $errors->first('custo_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('custo_id'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('custo_id') }}
     </div>
    @endif
    </div>
</div>
@endif
<hr>
<br>
<hr>
<div class="row mt-3">
  <div class="col-md-12">
    <h5>Datos de residencia y de notificación</h5>
   
  </div>
</div>
<hr>
<div class="row">
  <div id="autoUpdate" class="autoUpdate">
    <div class="card">
      <div class="card-body">
      @include($todoxxxx['rutacarp'].'Egreso.Formulario.residencia')
    </div>
  </div>
</div>
</div>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
