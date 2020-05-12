
<div class="form-group row">
  <div class="form-group col-md-12">
    <h1 style="text-align: center">{{ $todoxxxx["modeloxx"]->in_pregunta->s_pregunta }}</h1> 
  </div>
  
  <div class="form-group col-md-12"> 
    {{ Form::label('in_respuesta_id', 'Respuestas', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('respuesta_select', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,
    'placeholder' => 'respuesta del documento', 'maxlength' => '120', 'autofocus','id'=>'respuesta_select']) }}
    {{ Form::select('in_respuesta_id', $todoxxxx["respuest"], null, ['class' => 'form-control form-control-sm',
    'multiple','style'=>'height:200px', $todoxxxx["readonly"],'id'=>'in_respuesta_id']) }}
  </div> 
</div>
