
<div class="form-group row">    
  <div class="form-group col-md-12">
    <h1 style="text-align: center">{{ $todoxxxx["modeloxx"]->s_indicador }}</h1> 
  </div>
  
  <div class="form-group col-md-12">
    {{ Form::label('in_linea_base_id', 'Líneas base del indicador', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('linea_base_select', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,
    'placeholder' => 'Línea Base del Indicador', 'maxlength' => '120', 'autofocus','id'=>'linea_base_select']) }}
    {{ Form::select('in_linea_base_id', $todoxxxx["linebase"], null, ['class' => 'form-control form-control-sm',
    'multiple','style'=>'height:200px', $todoxxxx["readonly"],'id'=>'in_linea_base_id']) }}
  </div> 
</div>
