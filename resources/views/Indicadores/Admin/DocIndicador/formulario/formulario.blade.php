
<div class="form-group row">  
  <div class="form-group col-md-12">
    <h1 style="text-align: center">{{ $todoxxxx["modeloxx"]->sis_documento_fuente->nombre }}</h1> 
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sis_tabla_id', 'Tabla', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_tabla_id', $todoxxxx["tablaxxx"], null, ['class' => 'form-control form-control-sm',
     $todoxxxx["readonly"],'id'=>'sis_tabla_id']) }}
  </div> 
  <div class="form-group col-md-6">
    {{ Form::label('sis_campo_id', 'Campo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_campo_id', $todoxxxx["campoxxx"], null, ['class' => 'form-control form-control-sm',
     $todoxxxx["readonly"],'id'=>'sis_campo_id']) }}
  </div>
  <div class="form-group col-md-12">
     {{ Form::label('in_pregunta_id', 'Preguntas', ['class' => 'control-label col-form-label-sm']) }}
     {{ Form::text('pregunta_select', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,
    'placeholder' => 'pregunta del documento', 'maxlength' => '120', 'autofocus','id'=>'pregunta_select']) }}
    @component('Indicadores.Admin.DocIndicador.Datatable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
      docupreg
      @endslot
      @slot('class')
      @endslot
    @endcomponent 
  </div> 
</div>
