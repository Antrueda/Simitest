<hr style="border:3px;">
{{-- <button type="button" class="btn btn-primary" id="add_btn">DIAGNOSTICOS <i class="fas fa-plus"></i></button> --}}

<div class="row">
  
  <div class="form-group col-md-3">
    {{ Form::label('tipo_id', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('tipo_id',  $todoxxxx['tiporedx'], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('nombreper', 'Nombre Persona/Institución', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombreper', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('servicios', 'Servicios o Beneficios Recibidos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('servicios', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
  </div>


  <div class="form-group col-sm-3">
    {{ Form::label('contacto', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('contacto', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
  </div>

  </div>

  <br>
  <div>
    <button type="button" class="btn btn-primary" id="agregar" type="submit">AGREGAR RED</button>
  </div>




