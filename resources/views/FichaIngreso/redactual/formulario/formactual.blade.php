  <a href="{{route('fi.redapoyo',$todoxxxx['nnajregi'])}}" class="btn btn-sm btn-primary"
role="button">Volver a Redes de Apoyo</a>
  <div class="form-row align-items-end">

    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tipo_red_id', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_red_id', $todoxxxx["tiporedx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_nombre_persona', 'Nombre Persona/Institución', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_nombre_persona', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('s_servicio', 'Servicios o Beneficios Recibidos', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_servicio', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-sm-4">
      {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('s_telefono', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-sm-4">
      {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
    </div>
  </div>
  <a href="{{route('fi.redapoyo',$todoxxxx['nnajregi'])}}" class="btn btn-sm btn-primary"
role="button">Volver a Redes de Apoyo</a>

<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Redes de Apoyo Actuales
            @if($todoxxxx['accionxx']!='Crear')
              @can('firedactual-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.redactual.nuevo',$todoxxxx['nnajregi']) }}">
                  Nueva Red de Apoyo Actual
                </a>
              @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['firedactual-leer','firedactual-crear','firedactual-editar','firedactual-borrar'])
            <div class="table-responsive">
                <table id="tbactuales" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">ACCIONES</th>
                            @foreach( $todoxxxx['cabecera'] as $cabecera )
                                <th>{{  $cabecera['td'] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                </table>
            </div>
        @endcanany
    </div>
</div>
