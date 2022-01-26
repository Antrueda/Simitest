
<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_indicador', 'Nombre Indicador', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_indicador', null, ['class' =>'form-control col-form-label-sm' ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus','style '=> "text-transform:uppercase;"]) }}
  </div>
</div>
