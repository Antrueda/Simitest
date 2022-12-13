<hr style="border:3px;">
<div class="row">
  
 
    <hr style="border:3px;">
      <div class="col-md-4">
        {{ Form::label('afili_id', 'Estado de Afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('afili_id', $todoxxxx['estafili'],$todoxxxx['usuariox']->sis_nnaj->fi_saluds->prm_regisalu_id, ['class' => $errors->first('afili_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('afili_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('afili_id') }}
              </div>
           @endif
      </div>
      <div class="col-md-4">
        {{ Form::label('entidad_id', 'Entidad/Regimen', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('entidad_id', $todoxxxx['entid_id'],$todoxxxx['usuariox']->sis_nnaj->fi_saluds->sis_entidad_salud_id, ['class' => $errors->first('entidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('entidad_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('entidad_id') }}
              </div>
           @endif
      </div>

</div>
<hr>


@if($todoxxxx['usuariox']->sis_nnaj->FiResidencia != null)
<div class="row">
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_estudia_id', '4.4 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], null, ['class' => 'form-control form-control-sm select2',]) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_estudia_id') }}
        </div>
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('prm_jornestu_id', '4.5 ¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_jornestu_id', $todoxxxx["jornestu"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_jornestu_id') }}
        </div>
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('prm_natuenti_id', '4.6 ¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_natuenti_id', $todoxxxx["natuenti"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_natuenti_id') }}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('s_institucion_edu', '4.7 Nombre de la Institución', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_institucion_edu', null, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();", $todoxxxx['readinst']]) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_institucion_edu') }}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('tiemposinestudio', '4.8 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('diasines', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('diasines', null, ['class' => 'form-control form-control-sm', $todoxxxx['readdiax'], 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('mesinest', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mesinest', null, ['class' => 'form-control form-control-sm', $todoxxxx['readmesx'], 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('anosines', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('anosines', null, ['class' => 'form-control form-control-sm', $todoxxxx['readanox'], 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_estudia_id', '4.4 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], null, ['class' => 'form-control form-control-sm select2',]) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_estudia_id') }}
        </div>
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('prm_jornestu_id', '4.5 ¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_jornestu_id', $todoxxxx["jornestu"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_jornestu_id') }}
        </div>
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('prm_natuenti_id', '4.6 ¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_natuenti_id', $todoxxxx["natuenti"], null, ['class' => 'form-control form-control-sm select2']) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_natuenti_id') }}
        </div>
      </div>

      <div class="form-group col-md-4">
        {{ Form::label('s_institucion_edu', '4.7 Nombre de la Institución', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_institucion_edu', null, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();", $todoxxxx['readinst']]) }}
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_institucion_edu') }}
        </div>
      </div>

      <div class="form-group col-md-4">
        {{ Form::label('tiemposinestudio', '4.8 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('diasines', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('diasines', null, ['class' => 'form-control form-control-sm', $todoxxxx['readdiax'], 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('mesinest', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mesinest', null, ['class' => 'form-control form-control-sm', $todoxxxx['readmesx'], 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-4">
                {{ Form::label('anosines', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('anosines', null, ['class' => 'form-control form-control-sm', $todoxxxx['readanox'], 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
        </div>
      </div>
</div>
@endif
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
{{ Form::text('cursado', $todoxxxx['usuariox']->sis_nnaj->fi_formacions->prm_ultgrapr->nombre, ['class' => $errors->first('cursado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);",'readonly']) }}
   @if($errors->has('cursado'))
     <div class="invalid-feedback d-block">
       {{ $errors->first('cursado') }}
     </div>
  @endif
</div>
@endif

</div>
@if($todoxxxx['usuariox']->nnaj_nacimi->Edad<18)
<hr style="border:3px;">
<div class="row mt-3">
<div class="col-md-12">
<h5>INFORMACIÓN BÁSICA DEL REPRESENTANTE LEGAL</h5>
</div>
</div>
<hr style="border:3px;">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
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
  {{ Form::text('telefonopare', $todoxxxx['parentes'], null, ['class' => $errors->first('telefonopare') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
  @if($errors->has('telefonopare'))
   <div class="invalid-feedback d-block">
     {{ $errors->first('telefonopare') }}
   </div>
  @endif
  </div>
</div>
@endif
<hr>
<br>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>Datos de residencia y de notificación</h5>
    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Dirección:</b>
        <a class="float">{{$todoxxxx['residenc']->getDireccionAttribute()}} </a>
      </li>
      <li class="list-group-item">
        <b>Teléfono:</b>
        <a class="float">{{$todoxxxx['residenc']->getTelefonosAttribute()}} </a>
      </li>
    </ul>
  </div>
</div>
<hr>
<hr style="border:3px;">
<div class="row">
  <input type="checkbox" name='checkbox1' id="checkbox1" checked/>  Editar Residencia 
  {{ Form::hidden('checki', null, ['class' => $errors->first('ape1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'checki', 'style' => 'text-transform:uppercase;']) }} 
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
