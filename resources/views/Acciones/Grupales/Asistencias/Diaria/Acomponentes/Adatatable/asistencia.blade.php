<div class="card">
    <div class="card-header">
        <strong>Asistencia Diaria</strong>
    </div>
    <div class="card-body">
        @if ($todoxxxx['asistenc'])
            <p class="card-text">
                <span class="form-control"><strong>Numero Planilla: </strong>{{$todoxxxx['asistenc']->consecut}} </span>
                <span class="form-control"><strong>Fecha Diligenciamiento: </strong>{{$todoxxxx['asistenc']->fechdili}}</span>
                <span class="form-control"><strong>Upi/Dependencia: </strong>{{$todoxxxx['asistenc']->sis_depen_id}}</span>
                <span class="form-control"><strong>Tipo de Servicio: </strong>{{$todoxxxx['asistenc']->sis_servicio_id}} </span>
                <span class="form-control"><strong>Espacio donde se realiza la actividad: </strong>{{$todoxxxx['asistenc']->prm_lugactiv_id}} </span>
                <span class="form-control"><strong>Localidad: </strong>{{$todoxxxx['asistenc']->sis_localidad_id}} </span>
                <span class="form-control"><strong>UPZ: </strong>{{$todoxxxx['asistenc']->sis_upz_id}} </span>
            </p>
        @else
            <center><p class="card-text">NNAJ no tiene asistencia Diaria</p></center>
        @endif
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
