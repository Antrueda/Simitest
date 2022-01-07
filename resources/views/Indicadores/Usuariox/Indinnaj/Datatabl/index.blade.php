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
        <table id="{{ $tableName }}" class="table table-bordered   table-sm">
            <thead>
                @foreach( $todoxxxx['cabecera'] as $cabecera )
                <tr class="text-center">
                    @foreach( $cabecera as $cabecerx)
                    <th styel="width: {{$cabecerx['widthxxx']}}%;" rowspan="{{$cabecerx['rowspanx']}}" colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']   }}</th>
                    @endforeach
                </tr>
                @endforeach
            </thead>
            <tbody>
                @foreach( $todoxxxx['tbodyxxx'] as $trxxxxxx)
                <tr style="border:2px solid blue;">
                    @foreach( $trxxxxxx as $tdxxxxxx)
                    <td style="border:2px solid blue;" <?php
                                                        foreach ($tdxxxxxx['atributo'] as $key => $atributo) {
                                                            echo $key . "='$atributo'";
                                                        }
                                                        ?>>
                        @if($tdxxxxxx['botonesx'])
                        @include('Indicadores.Usuariox.Indinnaj.Botones.gestionx')
                        @else
                        {{$tdxxxxxx['tituloxx']}}
                        @endif


                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                @foreach( $todoxxxx['cabecera'] as $cabecera )
                <tr class="text-center">
                    @foreach( $cabecera as $cabecerx)
                    <th styel="width: {{$cabecerx['widthxxx']}}%;" rowspan="{{$cabecerx['rowspanx']}}" colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']   }}</th>
                    @endforeach
                </tr>
                @endforeach
            </tfoot>
        </table>
    </div>
    @endcanany
</div>
</div>