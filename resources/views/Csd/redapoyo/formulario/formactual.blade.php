  <div class="form-row align-items-end">

    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tipo_red_id', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_red_id', $todoxxxx["tiporedx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_nombre_persona', 'Nombre Persona/Institución', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_nombre_persona', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_servicio', 'Servicios o Beneficios Recibidos', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_servicio', null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-sm-4">
      {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-sm-4">
      {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')