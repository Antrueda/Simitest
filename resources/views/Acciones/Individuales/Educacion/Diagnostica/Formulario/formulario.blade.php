<div class="row mt-3">
  <div class="col-md-12">
    <h6>DATOS BÁSICOS</h6>
  </div>
</div>
<hr>

<div class="form-row align-items-end">
  <div class="form-group col-md-3">
    {{ Form::label('primnombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primnombre',  $todoxxxx['usuariox']->s_primer_nombre, ['class' => $errors->first('primnombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('segunnombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segunnombre',  $todoxxxx['usuariox']->s_segundo_nombre, ['class' => $errors->first('segunnombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('primapellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primapellido',  $todoxxxx['usuariox']->s_primer_apellido, ['class' => $errors->first('primapellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('segunapellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segunapellido',  $todoxxxx['usuariox']->s_segundo_apellido, ['class' => $errors->first('segunapellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>

  <div class="form-group col-md-3">
    {{ Form::label('nombreidentitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombreidentitario',  $todoxxxx['usuariox']->nnaj_sexo->s_nombre_identitario, ['class' => $errors->first('nombreidentitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>

   <div class="form-group col-md-3">
    {{ Form::label('tipodocumento', 'Tipo de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('tipodocumento',  $todoxxxx['usuariox']->nnaj_docu->tipoDocumento->nombre, ['class' => $errors->first('tipodocumento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>

   <div class="form-group col-md-3">
    {{ Form::label('nodocumento', 'No. De Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nodocumento',  $todoxxxx['usuariox']->nnaj_docu->s_documento, ['class' => $errors->first('tipodocumento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>
</div>
<hr>




<div class="row mt-3">
  <div class="col-md-12">
    <h6>-</h6>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h6>LUGAR Y FECHA DE DILIGENCIAMIENTO </h6>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('fecha_diligenciamiento', 'Fecha de diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha_diligenciamiento', null, ['class' => $errors->first('fecha_diligenciamiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha_diligenciamiento'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha_diligenciamiento') }}
    </div>
    @endif
  </div>



  <div class="col-md-4">
    {{ Form::label('prm_upi_id', 'UPI/Área/Dependencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_upi_id',$todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_upi_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_upi_id') }}
      </div>
    @endif
  </div>
  </div>
<br>
<div class="row">
  <div class="col-md-12">
    <b><h6>PRESABER</h6></b>
  </div>
</div>
<hr>



<div class="row">
  <div class="col-md-12">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
</div>
</div>


<hr>
<div class="row">
  <div class="col-md">
    <span><strong>Firma obligatoria para radicar la denuncia</strong></span><br>
    {{ Form::label('user_doc1_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
    <span>PERSONA QUE EVIDENCIO LA EVASIÓN (Tutor de vivienda, convivencia, Facilitador, Docente o tallerista, enfermero(a) etc.)</span>
    {{ Form::select('user_doc1_id',$todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc1_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc1_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    <span><strong>Firma secundaria, obligatoria para el cargue en SIMI</strong></span><br>
    {{ Form::label('user_doc2_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
    <span>Profesional del equipo psicosocial</span>
    {{ Form::select('user_doc2_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc2_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('responsable_id', 'Responsable de la UPI', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('responsable_id', $todoxxxx['respoupi'], null, ['class' => $errors->first('responsable_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('responsable_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('responsable_id') }}
      </div>
    @endif
  </div>
</div>







