
<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('d_registro', 'Fecha registro actividad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('d_registro', null, ['class' => 'form-control-plaintext form-control form-control-sm  d_diligencia','style'=>'height:38px']) }}    
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
    {{ Form::label('sis_depdestino_id', 'UPI/Dependencia donde se realiza la actividad y/o taller ', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_depdestino_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_lugar_id', 'Lugares/Espacios Externos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_lugar_id', $todoxxxx["lugarxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_espac_id', 'Espacio/lugar donde se llevó a cabo el taller/actividad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_espac_id', $todoxxxx["lugarxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
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
    {{ Form::textarea('s_introduc', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_justific', 'Justificación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_justific', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_objetivo', 'Objetivo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_objetivo', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_metodolo', 'Metodología', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_metodolo', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_categori', 'Categosría', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_categori', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_contenid', 'Contenido temático', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_contenid', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_estrateg', 'Estrategia de convocatoria (si aplica)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_estrateg', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_resultad', 'Resultado y/o productos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_resultad', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_evaluaci', 'Evaluación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_evaluaci', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_observac', 'Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_observac', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Nombre del contexto', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>