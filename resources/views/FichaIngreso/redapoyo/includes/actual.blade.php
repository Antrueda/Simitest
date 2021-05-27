@component('bootstrap::modal')
  @slot('id')
    addActual
  @endslot
  @slot('title')
    Agregar Red de Apoyo Actual
  @endslot
  <div class="form-row align-items-end">
    {{--Crear switch para que se muestre el formulario según la elección --}}
    {{--Opción 1 --}}
    <div class="form-group col-md-3">
      {{ Form::label('i_prm_tipo_red_id', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_red_id', $todoxxxx["endidadx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
    <div class="form-group col-md-9">
      {{ Form::label('s_nombre_persona', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_nombre_persona', null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
    {{-- @include('fichaIngreso.redapoyo.includes.redPersona') --}}
    {{-- Opción 2 --}}
    {{-- @include('fichaIngreso.redapoyo.includes.redInstitucion') --}}

    <div class="form-group col-md-6">
      {{ Form::label('sis_entidad_id', 'Entidad', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_entidad_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('i_prm_tiempo_id', '¿Durante cuánzzto tiempo?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="input-group">
        {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
        {{ Form::select('i_prm_tiempo_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
      </div>
    </div>
    <div class="form-group col-auto">
      {{ Form::label('i_prm_anio_prestacion_id', 'Año de prestación del servicio', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_anio_prestacion_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>

    <div class="form-group col-auto">
      {{ Form::label('sis_servicio_id', 'Servicios o Beneficios Recibidos', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_servicio_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-sm-3">
      {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-sm-9">
      {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>

  @slot('footer')
  {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
  @endslot
@endcomponent
