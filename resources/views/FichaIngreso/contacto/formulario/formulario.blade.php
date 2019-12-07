<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_tipo_contacto_id', '14.1 Indique la manera como IDIPRON lo/la contactó o como hizo para ponerse en contacto con IDIPRON', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tipo_contacto_id', $todoxxxx["tipocont"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_contacto_condicion', 'Por condición', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_contacto_condicion', null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_contacto_opcion_id', 'Por opción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_contacto_opcion_id', $todoxxxx["contopci"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('s_entidad_remite', 'Por Protección, entidad que remitió', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_entidad_remite', null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('d_fecha_remite_id', 'Fecha de remisión', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('d_fecha_remite_id', \Carbon\Carbon::now(), ['class' => 'form-control form-control-sm',$todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_motivo_contacto_id', 'Motivo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_motivo_contacto_id', $todoxxxx["contprot"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    {{ Form::label('i_prm_aut_tratamiento_id', '14.2 Autorizo al IDIPRON de manera libre, plena, expresa y voluntaria el tratamiento de mis datos personales recolectados en el presente formato y/o en la ficha de caracterización familiar, conforme a lo establecido en la Ley Estatutaria 1581 del 2012 (Art. 8° y 9°) y el Decreto reglamentario 1377 del 2013', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_aut_tratamiento_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>