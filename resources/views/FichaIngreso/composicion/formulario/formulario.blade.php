<a href="{{route('fi.composicion',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary" role="button">Volver a Composición Familiar</a>

<div class="form-row align-items-end">
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
  <div class="form-group col-md-4">
    {{ Form::label('aniosxxx', 'Edad (Años)', ['class' => 'control-label']) }}
    <div id="aniosxxx" class="form-control form-control-sm">{{ $todoxxxx['aniosxxx'] }}</div>
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('prm_documento_id', 'Tipo de Identificación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_documento_id', $todoxxxx["tipodocu"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_documento', 'Número de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm']) }}
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ocupacion_id', 'Ocupación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ocupacion_id', $todoxxxx["ocupacio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_telefono', 'Número de Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_convive_nnaj_id', '¿Convive con el NNAJ?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_convive_nnaj_id', $todoxxxx["convivex"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_vinculado_idipron_id', '¿Estuvo vinculado(a) al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_vinculado_idipron_id', $todoxxxx["convivex"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  
  
</div>