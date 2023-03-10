<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crear')
            <a class="btn btn-default btn-flat btn-sm" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}" data-custom="#open_modal">
                
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

