<div class="row">
  <div class="col-12">
    <div class="card card-outline card-secondary">
      <div class="card-header">
        <h3 class="card-title">Información de planilla Diaria</h3>
      </div>
      <div class="card-body table-responsive ">
        <div class="form-row">
          <div class="form-group col-md-4">
            {!! Form::label('consecut', ' PLANILLA N°:', ['class' => 'control-label']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->consecut}}
            </div>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->dependencia->nombre}}
            </div>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Tipo de servicio:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->sis_servicio->s_servicio}}
            </div>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Espacio donde se realiza la actividad:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->prm_actividad->nombre}}
            </div>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Localidad:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->barrio->sis_localupz->sis_localidad->s_localidad}}
            </div>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'UPZ:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->barrio->sis_localupz->sis_upz->s_upz}}
            </div>
          </div>

          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Barrio:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->barrio->sis_barrio->s_barrio}}
            </div>
          </div>

          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Departamento:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->sis_departam->s_departamento}}
            </div>
          </div>

          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Municipio:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->sis_municipi->s_municipio}}
            </div>
          </div>


          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->prm_programa->nombre}}
            </div>
          </div>

          

          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->asdActividad->tiposActividad->nombre}}
            </div>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Actividad:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['asistenc']->asdActividad->nombre}}
            </div>
          </div>



          <div class="form-group col-md-6">
              {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRO:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
                  {{$todoxxxx['asistenc']->created_at}}
              </div>
          </div>


          <div class="form-group col-md-6">
              {!! Form::label('updated_at', 'FECHA Y HORA DE ACTUALIZACIÓN:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
                  {{$todoxxxx['asistenc']->updated_at}}
              </div>
          </div>
          <div class="form-group col-md-6">
              {!! Form::label('user_crea_id', 'USUARIO QUE REGISTRÓ:', ['class' => 'control-label']) !!}
              <div id="user_crea_id" class="form-control form-control-sm">
                  {{$todoxxxx['asistenc']->userCrea->name}}
              </div>
          </div>
          <div class="form-group col-md-6">
          {!! Form::label('user_edita_id', 'USUARIO QUE ACTUALIZÓ:', ['class' => 'control-label']) !!}
          <div id="user_edita_id" class="form-control form-control-sm">
              {{$todoxxxx['asistenc']->userEdita->name}}
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
















<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-'.$todoxxxx['permnuev'])
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['permisox'].'.nuevoxxx',$todoxxxx['parametr']) }}">
                {{ $todoxxxx['titunuev'] }}
            </a>
            @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany($todoxxxx['permtabl'])
        <div class="table-responsive">
            <table id="{{ $tableName }}" class="table table-bordered   table-sm">
                <thead>

                    @foreach( $todoxxxx['cabecera'] as $cabecera )
                    <tr class="text-center">
                        @foreach( $cabecera as $cabecerx)
                        <th width="{{$cabecerx['widthxxx']}}" rowspan="{{$cabecerx['rowspanx']}}" colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']   }}</th>
                        @endforeach
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
        @endcanany
    </div>
</div>
