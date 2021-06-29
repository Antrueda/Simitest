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
<div class="form-group col-md-6" id="export-form">
        {{ Form::label('yearxxxx', 'Año', ['class' => 'control-label']) }}
        {{ Form::select('yearxxxx', $todoxxxx['aniosxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('yearxxxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('yearxxxx') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('monthxxx', 'Mes', ['class' => 'control-label']) }}
        {{ Form::select('monthxxx', $todoxxxx['mesesxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('monthxxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('monthxxx') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('sis_tabla_id', 'Tablas', ['class' => 'control-label']) !!}
        {!! Form::select('sis_tabla_id[]', $todoxxxx['tablesxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple', 'id' => 'sis_tabla_id']) !!}
        @if($errors->has('sis_tabla_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_tabla_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_tcampo_id', 'Campos', ['class' => 'control-label']) !!}
        {!! Form::select('sis_tcampo_id[]', $todoxxxx['camposxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple', 'id' => 'sis_tcampo_id']) !!}
        @if($errors->has('sis_tcampo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_tcampo_id') }}
        </div>
        @endif
    </div>

    <!-- <div class="col-12 col-sm-3 d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-sm btn-primary mx-2" onclick="buildTables()">Seleccionar</button>
        <button type="button" class="btn btn-sm btn-primary mx-2" onclick="destroyTables()">Limpiar</button>
    </div>
    <div id="tables" class="row col-sm-12">
    </div>
    <div class="col-md-6 p-2">
        {!! Form::label('', 'Campos Seleccionados', ['class' => 'control-label']) !!}
        <div class="border rounded p-2" id="fieldsSelected"></div>
        <input type="hidden" name="fieldsSelected">
    </div>
    <div class="col-md-6 p-2">
        {!! Form::label('', 'Relaciones Seleccionadas', ['class' => 'control-label']) !!}
        <div class="border rounded p-2" id="relationsSelected"></div>
        <input type="hidden" name="relationsSelected">
    </div> -->
</div>
