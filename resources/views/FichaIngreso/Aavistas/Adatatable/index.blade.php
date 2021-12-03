
@if(isset($todoxxxx['forminde']))
<form method = "get" id="agregarx" target="_blank" action= "{{route('fidatbas.agregar', $todoxxxx['parametr'])}}"
    enctype="multipart/form-data">
      @csrf
        <input type="hidden" id="docuagre" name="docuagre">
    {!!Form::close()!!}
  </div>
@endif
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title"><style>
  .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
  }
  </style>

            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'])
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}">
                {{ $todoxxxx['titunuev'] }}
            </a>
            @endcan
            @endif
            <a href="{{ route('benefici' ) }}" class="btn btn-sm btn-primary ml-2" title="Agregar Familiares como Beneficiario" >
                Agregar Familiares como Beneficiario
            </a>
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
                    @if(isset($todoxxxx['forminde']))
                        @foreach( $todoxxxx['cabecera'] as $cabecera )
                        <tr class="text-center" id="buscarxx">
                            @foreach( $cabecera as $cabecerx)
                            <th width="{{$cabecerx['widthxxx']}}" rowspan="{{$cabecerx['rowspanx']}}" colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']   }}</th>
                            @endforeach
                        </tr>
                        @endforeach
                    @endif
                </thead>
                <tfoot>
                </tfoot>
            </table>
        </div>
        @endcanany
    </div>
</div>
