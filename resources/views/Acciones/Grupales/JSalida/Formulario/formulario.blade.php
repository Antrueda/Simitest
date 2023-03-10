
  
@if(!isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif
<div style="display: none">
{{ Form::number('sis_nnaj_id', null, ['class' => 'form-control form-control-sm','id'=>'sis_nnaj_id',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
</div>
  <div class="form-row align-items-end">
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
      <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm']) }}
      </div>
      <div class="form-group col-md-4">
      {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
      {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
     
</div>

<div class="form-row align-items-end">
    <div class="col-md-4">
        {{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
       {{ Form::number('telefono',  null, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
       @if($errors->has('telefono'))
           <div class="invalid-feedback d-block">
               {{ $errors->first('telefono') }}
           </div>
       @endif
      </div>
<div class="col-md-4">
  {{ Form::label('hora_salida', 'Hora de Salida', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::time('hora_salida',  null, ['class' => $errors->first('hora_salida') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'hora_salida']) }}
 @if($errors->has('hora_salida'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('hora_salida') }}
     </div>
 @endif
</div>


<div class="col-md-4">
  {{ Form::label('razones', 'Motivos de Permiso', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('razones[]', $todoxxxx['condixxx'], null, ['class' => $errors->first('razones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'razones', 'multiple']) }}
 @if($errors->has('razones'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('razones') }}
     </div>
 @endif
</div>

<div class="col-md-4">
  {{ Form::label('responsable_id', 'Representante legal', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('responsable_id', $todoxxxx['compfami'], null, ['class' => $errors->first('responsable_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2',  'id' => 'responsable_id']) }}
 @if($errors->has('responsable_id'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('responsable_id') }}
     </div>
 @endif
</div>

<div class="col-md-4">
  {{ Form::label('autoriza_id', 'Autorización de respuesta', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('autoriza_id', $todoxxxx['autoriza'], null, ['class' => $errors->first('autoriza_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'autoriza_id']) }}
 @if($errors->has('autoriza_id'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('autoriza_id') }}
     </div>
 @endif
</div>

<div class="col-md-4">
  {{ Form::label('retorna_id', '¿Retorna?', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('retorna_id', $todoxxxx['condicio'], null, ['class' => $errors->first('retorna_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'retorna_id','onchange' => 'doc(this.value)']) }}
 @if($errors->has('retorna_id'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('retorna_id') }}
     </div>
 @endif
</div>

<div class="col-md-4">
  {{ Form::label('fecharetorno', 'Posible fecha de retorno', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::date('fecharetorno',  null, ['class' => $errors->first('fecharetorno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'fecharetorno','min'=>$todoxxxx['hoyxxxxx']]) }}
 @if($errors->has('fecharetorno'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('fecharetorno') }}
     </div>
 @endif
</div>

<div class="col-md-4">
  {{ Form::label('horaretorno', 'Posible hora de retorno', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::time('horaretorno',  null, ['class' => $errors->first('horaretorno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'horaretorno']) }}
 @if($errors->has('horaretorno'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('horaretorno') }}
     </div>
 @endif
</div>
<br>
<hr>
</div>
<div class="row">
  <div class="col-md-12">
  {{ Form::label('observacion', 'Observación', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorobservacion">0/4000</p>
      @if($errors->has('observacion'))
    <div class="invalid-feedback d-block">
          {{ $errors->first('observacion') }}
        </div>
    @endif
  </div>
</div>

