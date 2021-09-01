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
        {{ Form::label('Ano', 'Año:', ['class' => 'control-label']) }}
        {{ Form::number('Ano', null, ['class' => $errors->first('Ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' =>  '2020', 'max'=>$todoxxxx['anofinal'],"onkeypress" => "return soloNumeros(event);",'required']) }}
        @if($errors->has('Ano'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('Ano') }}
        </div>
        @endif
    </div>
    
      <div class="form-group col-md-4">
          {{ Form::label('Mes', 'Mes:', ['class' => 'control-label']) }}
          {{ Form::number('Mes', null, ['class' => $errors->first('Mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => 1, 'max'=>12, "onkeypress" => "return soloNumeros(event);", 'required']) }}
          @if($errors->has('Mes'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('Mes') }}
          </div>
          @endif
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('Meta', 'Meta:', ['class' => 'control-label']) }}
        {{ Form::select('Meta', $todoxxxx['metaxxxx'], null, ['class' => $errors->first('Meta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);",'required']) }}
        @if($errors->has('Meta'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('Meta') }}
        </div>
        @endif
    </div>

      

      

  
  

</div>
<script>
   function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>