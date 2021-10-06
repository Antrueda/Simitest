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
        {!! Form::label('sisnnajx', 'NNAJ', ['class' => 'control-label']) !!}
        {!! Form::select('sisnnajx', $todoxxxx['sisnnajx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'placeholder' => 'Seleccione un NNAJ', 'required']) !!}
        @if($errors->has('sisnnajx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sisnnajx') }}
        </div>
        @endif
    </div>
</div>
