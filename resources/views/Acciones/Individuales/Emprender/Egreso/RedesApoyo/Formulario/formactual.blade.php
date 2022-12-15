{!! Form::open(['route' => ['egresoredes.crearedactual',$dato->id],'class' => 'form-horizontal']) !!}
  <div class="form-row align-items-end">

    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tipo_red_id', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_red_id', $tipo, null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_nombre_persona', 'Nombre Persona/Institución', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_nombre_persona', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_servicio', 'Servicios o Beneficios Recibidos', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_servicio', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-sm-4">
      {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('s_telefono', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-sm-4">
      {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
    </div>
  </div>

  {{ Form::submit('Agregar', ['class' => 'btn btn-primary' ]) }}
  {!! Form::close() !!}