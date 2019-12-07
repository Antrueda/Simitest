
<div class="form-group row">    
  <div class="form-group col-md-12">
    <h1 style="text-align: center">{{ $todoxxxx["modeloxx"]->in_linea_base->s_linea_base }}</h1> 
  </div>
  
  <div class="form-group col-md-12">
    {{ Form::label('in_linea_base_id', 'Preguntas', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('sis_documento_fuente_select', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,
    'placeholder' => 'Documento de la línea base', 'maxlength' => '120', 'autofocus','id'=>'sis_documento_fuente_select']) }}
    {{ Form::select('sis_documento_fuente_id', $todoxxxx["linebase"], null, ['class' => 'form-control form-control-sm',
    'multiple','style'=>'height:200px', $todoxxxx["readonly"],'id'=>'sis_documento_fuente_id']) }}
  </div> 
</div>
