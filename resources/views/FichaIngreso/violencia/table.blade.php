<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('nombre_ambito', 'Ambito', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::label('pregunta121a', 'Física', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::label('pregunta121b', 'Psicológica', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::label('pregunta121c', 'Sexual', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::label('pregunta121d', 'Económica', ['class' => 'control-label col-form-label-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('amb_familiar', 'Familiar', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_familiar_fisica_id', $todoxxxx["condic01"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_familiar_psico_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_familiar_sexual_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_familiar_econo_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('amb_amistades', 'Amistades / Colegio', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_amistad_fisica_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_amistad_psico_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_amistad_sexual_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_amistad_econo_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('amb_pareja', 'Pareja', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_pareja_fisica_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_pareja_psico_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_pareja_sexual_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_pareja_econo_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('amb_comunidad', 'Comunitario / Parches', ['class' => 'control-label col-form-label-sm']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_comunidad_fisica_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_comunidad_psico_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_comunidad_sexual_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-2">
    {{ Form::select('i_prm_comunidad_econo_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>