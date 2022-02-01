<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crear')
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}"  target="_blank">>
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

    <div class="modal fade" id="practice_modal">
        <div class="modal-dialog">
           <form id="companydata">
                <div class="modal-content">
                <input type="hidden" id="color_id" name="color_id" value="">
                <div class="modal-body">
                    <input type="text" name="name" id="name" value="" class="form-control">
                </div>
                <input type="submit" value="Submit" id="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">
            </div>
           </form>
        </div>
    </div>
</div>
