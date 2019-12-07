<a href="{{route('fi.redapoyo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary"
role="button">Volver a Redes de Apoyo</a>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('sis_entidad_id', 'Entidad', ['class' => 'control-label']) }}
    {{ Form::select('sis_entidad_id', $todoxxxx["endidadx"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_servicio', 'Servicios o beneficios recibidos', ['class' => 'control-label']) }}
    {{ Form::text('s_servicio', null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_tiempo_id', '¿Durante cuánto tiempo?', ['class' => 'control-label']) }}
    <div class="input-group">
      {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm']) }}
      {{ Form::select('i_prm_tiempo_id', $todoxxxx["tipotiem"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_anio_prestacion_id', 'Año de prestación del servicio', ['class' => 'control-label']) }}
    {{ Form::select('i_prm_anio_prestacion_id', $todoxxxx["anioserv"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
 <a href="{{route('fi.redapoyo',$todoxxxx["nnajregi"])}}"
    class="btn btn-sm btn-primary" role="button">Volver a Redes de Apoyo</a>


<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Antecedentes Institucionales

            @if($todoxxxx['accionxx']!='Crear')
              @can('fiantecedentes-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.redantecedentes.nuevo',$todoxxxx['nnajregi']) }}">
                    Nueva Red Antecedente
                </a>
              @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany(['fiantecedentes-leer','fiantecedentes-crear','fiantecedentes-editar','fiantecedentes-borrar'])
            <div class="table-responsive">
                <table id="tbantecedentes" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">Acciones</th>
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
