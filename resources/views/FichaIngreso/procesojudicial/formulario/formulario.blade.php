<a href="{{route('fi.justicia.nuevo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary" role="button">Volver a Justicia</a>

<div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('fi_compfami_id', 'Miembro Familia', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('fi_compfami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('s_proceso', 'Proceso', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_proceso', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_vigente_id', '¿Se encuentra vigente?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_vigente_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_numero_veces', 'Número de veces', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('i_numero_veces', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_motivo', 'Motivo', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_motivo', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
	<div class="form-group col-md-4">
      {{ Form::label('i_hace_cuanto', 'Hace cuánto', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('i_hace_cuanto', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tipo_tiempo_id', 'Tipo Tiempo', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_tiempo_id', $todoxxxx["titiempo"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
  </div>

  <a href="{{route('fi.justicia.nuevo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary"
role="button">Volver a Justicia</a>
