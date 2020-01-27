
<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('d_registro', 'Fecha registro actividad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('d_registro', null, ['class' => 'form-control form-control-sm  d_diligencia','style'=>'height:38px'],'readonly') }}    
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('area_id', 'Area', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["areaxxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_deporigen_id', 'UPI/Dependencia de origen', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_deporigen_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('ag_tema_id', 'Tema general', ['class' => 'control-label col-form-label-sm']) }}
    <a href="#"  propiedad="ag_tema_id"  class="mouseover" title=""><i class="far fa-question-circle"></i></a>
    {{ Form::select('ag_tema_id', $todoxxxx["agtemaxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('ag_taller_id', 'Nombre taller', ['class' => 'control-label col-form-label-sm']) }}
    <a href="#"  propiedad="ag_taller_id"  class="mouseover" title=""><i class="far fa-question-circle"></i></a>
    {{ Form::select('ag_taller_id', $todoxxxx["tallerxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('ag_sttema_id', 'Subtemas', ['class' => 'control-label col-form-label-sm']) }}
    <a href="#"  propiedad="ag_sttema_id"  class="mouseover" title=""><i class="far fa-question-circle"></i></a>
    {{ Form::select('ag_sttema_id', $todoxxxx["subtemax"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('ag_sttran_id', 'Taller y acciones transversales', ['class' => 'control-label col-form-label-sm']) }}
    <a href="#"  propiedad="ag_sttema_id"  class="mouseover" title=""><i class="far fa-question-circle"></i></a>
    {{ Form::select('ag_sttran_id', $todoxxxx["subtemax"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_depdestino_id', 'UPI/Dependencia/Espacios Externos donde se realiza la actividad y/o taller ', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_depdestino_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_lugar_id', 'Lugares/Espacios Externos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_lugar_id', $todoxxxx["lugarxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('s_prm_espac', 'Espacio/lugar donde se llevó a cabo el taller/actividad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_prm_espac', null, ['class' => 'form-control form-control-sm','style'=>'height:38px','readonly']) }}    
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_dirig_id', 'Dirigido a:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_dirig_id', $todoxxxx["dirigido"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_entidad_id', 'Entidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_entidad_id', $todoxxxx["entidadx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>

@if(isset($todoxxxx["actualiz"]))


@component('Acciones.Grupales.Agactividad.Datatable.index', ['todoxxxx'=>$todoxxxx])
        @slot('tableName')
          responsables
        @endslot
        @slot('class')
        @endslot
  @endcomponent




@endif

<div class="form-group row">
 
  
  
  
  
  
  <div class="form-group col-md-6">
    {{ Form::label('s_introduc', 'Introducción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_introduc', null, 
    ['class' => $errors->first('s_introduc') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_introduc', 'maxlength' => '6000','contador'=>'ags_introduccontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_introduccontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_justific', 'Justificación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_justific', null, 
    ['class' => $errors->first('s_justific') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_justific', 'maxlength' => '6000','contador'=>'ags_justificcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_justificcontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_objetivo', 'Objetivo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_objetivo', null, 
    ['class' => $errors->first('s_objetivo') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_objetivo', 'maxlength' => '6000','contador'=>'ags_objetivocontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_objetivocontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_metodolo', 'Metodología', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_metodolo', null, 
    ['class' => $errors->first('s_metodolo') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_metodolo', 'maxlength' => '6000','contador'=>'ags_metodolocontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_metodolocontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_categori', 'Categosría', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_categori', null, 
    ['class' => $errors->first('s_categori') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_categori', 'maxlength' => '6000','contador'=>'ags_categoricontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_categoricontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_contenid', 'Contenido temático', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_contenid', null, 
    ['class' => $errors->first('s_contenid') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_contenid', 'maxlength' => '6000','contador'=>'ags_contenidcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_contenidcontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_estrateg', 'Estrategia de convocatoria (si aplica)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_estrateg', null, 
    ['class' => $errors->first('s_estrateg') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_estrateg', 'maxlength' => '6000','contador'=>'ags_estrategcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_estrategcontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_resultad', 'Resultado y/o productos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_resultad', null, 
    ['class' => $errors->first('s_resultad') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_resultad', 'maxlength' => '6000','contador'=>'ags_resultadcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_resultadcontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_evaluaci', 'Evaluación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_evaluaci', null, 
    ['class' => $errors->first('s_evaluaci') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_evaluaci', 'maxlength' => '6000','contador'=>'ags_evaluacicontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_evaluacicontador">0/6000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_observac', 'Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_observac', null, 
    ['class' => $errors->first('s_observac') ? 'form-control form-control-sm is-invalid contarcaracteres' : 
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 
    'id' => 's_observac', 'maxlength' => '6000','contador'=>'ags_observaccontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
    <p id="ags_observaccontador">0/6000</p>
  </div>
</div>