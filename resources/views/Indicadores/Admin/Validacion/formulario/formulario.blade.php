
<div class="form-group row">
 <div class="form-group col-md-4" style="height: ">
    {{ Form::label('area_id', 'Área', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["areasxxx"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('in_indicador_id', 'Indicador', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('in_indicador_id', $todoxxxx["indicado"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('in_fuente_id', 'Línea Base', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('in_fuente_id', $todoxxxx["linebase"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('in_pregunta_id', 'Pregunta Indicador', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('in_pregunta_id', $todoxxxx["pregindi"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_docfuen_id', 'Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_docfuen_id', $todoxxxx["docufuen"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_tabla_id', 'Tabla', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_tabla_id', $todoxxxx["stablaxx"], null, ['class' => 'form-control form-control-sm select2', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_campo_tabla_id', 'Campo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_campo_tabla_id', $todoxxxx["scampoxx"], null, ['class' => 'form-control form-control-sm select2', $todoxxxx["readonly"]]) }}
  </div>
</div>
<h1>RESPUESTAS</h1>
<div class="form-group row">
  <div class="form-group col-md-4">
    <select name="origen[]" id="origen" multiple="multiple" size="8" class="form-control form-control-sm">
      @foreach ($todoxxxx["respuest"] as $respuest)
          <option value="{{ $respuest['valuexxx'] }}">{{ $respuest['optionxx'] }}</option>
      @endforeach

    </select>
  </div>

<div class="form-group col-md-4">

  <div class="form-group row">
    <div class="form-group col-md-6" style="text-align: right">
  <button type="button" class="btn btn-sm btn-primary pasartodos" style="width: 80px" >Todos  <i class="fas fa-fast-forward"></i></button>
      </div>
    <div class="form-group col-md-6" style="text-align: left">
      <button type="button" class="btn btn-sm btn-primary quitartodos" style="width: 80px" >Todos  <i class="fas fa-fast-backward"></i></button>
    </div>
    <div class="form-group col-md-6" style="text-align: right">
    <button type="button" class="btn btn-sm btn-primary pasar" style="width: 80px" > Pasar  <i class="fas fa-step-forward"></i></button>
    </div>
    <div class="form-group col-md-6" style="text-align: left">
    <button type="button" class="btn btn-sm btn-primary quitar" style="width: 80px" > Quitar  <i class="fas fa-step-backward"></i></button>

    </div>

  </div>
</div>


<div class="form-group col-md-4">
<select name="i_prm_respuesta_id[]" id="i_prm_respuesta_id" multiple="multiple" size="8" class="form-control form-control-sm">
  @isset($todoxxxx["selected"])
    @foreach ($todoxxxx["selected"] as $selected)
      <option selected value="{{ $selected['valuexxx'] }}">{{ $selected['optionxx'] }}</option>
    @endforeach
  @endisset


</select>
</div>
</div>
