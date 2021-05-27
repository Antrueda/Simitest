<style>
  .ui-autocomplete-category {
    font-weight: bold;
    padding: .2em .4em;
    margin: .8em 0 .2em;
    line-height: 1.5;
  }


  .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
  }
  </style>

<div class="form-row">
    <div class="form-group col-md-4" id="export-form">
        {{ Form::label('dateinit', 'Fecha inicial:', ['class' => 'control-label']) }}
        {{ Form::date('dateinit', $todoxxxx['dateinit'], null, ['class' => $errors->first('dateinit') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'required', 'max' =>  $todoxxxx['dateendx']]) }}
        @if($errors->has('dateinit'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('dateinit') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('dateendx', 'Fecha final:', ['class' => 'control-label']) }}
        {{ Form::date('dateendx', $todoxxxx['dateendx'], null, ['class' => $errors->first('dateendx') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'required', 'min' => $todoxxxx['dateinit']]) }}
        @if($errors->has('dateendx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('dateendx') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('upi', 'UPIS', ['class' => 'control-label']) !!}
        {!! Form::select('upi', $todoxxxx['upisxxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una unidad', 'required']) !!}
        @if($errors->has('upi'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('upi') }}
        </div>
        @endif
    </div>
    <div class="col-sm-12 mb-3">
        <div class="col-sm-12">
            <h5><strong>Pestañas</strong></h5>
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 1, null, ['class' => 'custom-control-input', 'id' => 'datos_basicos']) !!}
            {!! Form::label('datos_basicos', 'Datos Basicos', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 2, null, ['class' => 'custom-control-input', 'id' => 'residencia']) !!}
            {!! Form::label('residencia', 'Residencia', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 3, null, ['class' => 'custom-control-input', 'id' => 'escuela']) !!}
            {!! Form::label('escuela', 'Escuela', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 4, null, ['class' => 'custom-control-input', 'id' => 'salud']) !!}
            {!! Form::label('salud', 'Salud', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 5, null, ['class' => 'custom-control-input', 'id' => 'generacion_de_ingreso']) !!}
            {!! Form::label('generacion_de_ingreso', 'Generacion de Ingresos', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 6, null, ['class' => 'custom-control-input', 'id' => 'actividades_de_tiempo_libre']) !!}
            {!! Form::label('actividades_de_tiempo_libre', 'Actividades de Timpo Libre', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 7, null, ['class' => 'custom-control-input', 'id' => 'redes_de_apoyo']) !!}
            {!! Form::label('redes_de_apoyo', 'Redes de Apoyo', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 8, null, ['class' => 'custom-control-input', 'id' => 'justicia_restaurativa']) !!}
            {!! Form::label('justicia_restaurativa', 'Justicia Restaurativa', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 9, null, ['class' => 'custom-control-input', 'id' => 'consumo_spa']) !!}
            {!! Form::label('consumo_spa', 'Consumo de SPA', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 10, null, ['class' => 'custom-control-input', 'id' => 'violencias_condicion_especial']) !!}
            {!! Form::label('violencias_condicion_especial', 'Violencias y condición especial', ['class' => 'custom-control-label']) !!}
        </div>
        <div class="custom-control custom-checkbox mx-2">
            {!! Form::checkbox('pestannas[]', 11, null, ['class' => 'custom-control-input', 'id' => 'poblacion']) !!}
            {!! Form::label('poblacion', 'Tipo de población', ['class' => 'custom-control-label']) !!}
        </div>
    </div>
</div>
