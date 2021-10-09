@canany($todoxxxx['permtabl'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crearxxx')
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['permisox'].'.nuevoxxx',$todoxxxx['parametr']) }}">
                {{ $todoxxxx['titunuev'] }}
            </a>
            @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table id="{{ $tableName }}" class="table table-bordered   table-sm">
                <thead>

                    @foreach( $todoxxxx['cabecera'] as $cabecera )
                    <tr class="text-center">
                        @foreach( $cabecera as $cabecerx)
                        <th width="{{$cabecerx['widthxxx']}}"
                        rowspan="{{$cabecerx['rowspanx']}}"
                        colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']}}
                        </th>
                        @endforeach
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
</div>
@endcanany
