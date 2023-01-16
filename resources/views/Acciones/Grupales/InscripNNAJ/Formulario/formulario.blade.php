
  
@if(!isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif
<div style="display: none">
    {{ Form::label('sis_nnaj_id', '1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('sis_nnaj_id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        {{ Form::label('sis_nnaj_id', '1er. asfasfas', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}

</div>
  <div class="form-row align-items-end">
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly', 'style' => 'text-transform:uppercase;']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly', 'style' => 'text-transform:uppercase;']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly','style' => 'text-transform:uppercase;']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly','style' => 'text-transform:uppercase;']) }}
        </div>
      <div class="form-group col-md-4">
        {{ Form::label('tipodocu', 'Tipo de documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('tipodocu', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-4">
      {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
      {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly','style' => 'text-transform:uppercase;']) }}
      </div>
     
</div>

<br>
<hr>
<div class="row">
  <div class="col-md-4">
        {{ Form::label('etapa_id', 'Etapa', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('etapa_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('etapa_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm']) }}
        @if ($errors->has('etapa_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('etapa_id') }}
            </div>
        @endif
    </div>

  <div class="col-md-4">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
        'form-control is-invalid' : 'form-control','data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
      <div class="col-md-4">
        {{ Form::label('modalidad_id', 'Modalidad Etapa Productiva', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('modalidad_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('modalidad_id') ?
        'form-control is-invalid' : 'form-control','data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('modalidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('modalidad_id') }}
        </div>
        @endif
    </div>

    <div class="col-md-4">
        {{ Form::label('fecha_inicio', 'Fecha de Inicio de Etapa Productiva  ', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha_inicio', null, ['class' => $errors->first('fecha_inicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
        @if ($errors->has('fecha_inicio'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha_inicio') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha_final', 'Fecha Final de Etapa Productiva', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha_final', null, ['class' => $errors->first('fecha_final') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => $todoxxxx['hoyxxxxx']]) }}
        @if ($errors->has('fecha_final'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha_final') }}
            </div>
        @endif
    </div>
    <div class="col-md-4"> 
        {{ Form::label('novedad_id', 'Novedad Inactivación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('novedad_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('novedad_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if ($errors->has('novedad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('novedad_id') }}
            </div>
        @endif
    </div>
        <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
        @if ($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
</div>

<br>
<hr>
<div class="row">
  <div class="col-md-12">
  {{ Form::label('observaciones', 'Observación', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Diligenciar documentación pendiente, cambio requeridos, compromiso para la UPI o cualquier novedad que tenga relevancia y afectación en la matrícula. Ejemplo: (Motivo del traslado o reasignación de taller): Motivo por el cual se realiza el traslado o se reasigna de taller al NNAJ', 'maxlength' => '500', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorobservaciones">0/1000</p>
      @if($errors->has('observaciones'))
    <div class="invalid-feedback d-block">
          {{ $errors->first('observaciones') }}
        </div>
    @endif
  </div>
</div>








