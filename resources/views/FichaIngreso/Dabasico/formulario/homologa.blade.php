<div class="card card-outline card-secondary">
    <div class="card-header">
        PARAMETROS EN EL NUEVO DESARROLLO
    </div>
    <div class="card-header p-2">
        <table class="table">
            <thead>
                <tr>
                    <th>ID TEMA</th>
                    <th>TEMA</th>
                    <th>ID </th>
                    <th>PARAMETRO</th>
                    <th>HOMOLAGADO</th>
                    <th>TABLA</th>
                    <th>CODIGO</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todoxxxx['paramets'] as $paramets)
                <tr>
                    <td>{{$paramets['idtemaxx']}}</td>
                    <td>{{$paramets['temaxxxx']}}</td>
                    <td>{{$paramets['idparame']}}</td>
                    <td>{{$paramets['parametr']}}</td>
                    <td>
                        @if(($paramets['simianti']==0 || $paramets['simianti']=='') && $paramets['sindatox'] )
                        <a href="{{route('fidatbas.homologa',[$paramets['idtemaxx'],$paramets['idparame'],$paramets['codigoxx'],$paramets['tablaxxx']])}}" class="btn btn-primary btn-sm" role="button">Homologar</a>
                        @else
                        @if($paramets['simianti']==0 || $paramets['simianti']=='')
                        NO
                        @else
                        {{$paramets['simianti']}}
                        @endif

                        @endif
                    </td>
                    <td>{{$paramets['tablaxxx']}}</td>
                    <td>{{$paramets['codigoxx']}}</td>
                    <td>{{$paramets['descripc']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-outline card-secondary">
    <div class="card-header">
        PARAMETROS EN EL SIMI ANTIGUO
    </div>
    <div class="card-header p-2">
        <table class="table">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todoxxxx['multivax'] as $multival)
                <tr>
                    <td>{{$multival->codigo}}</td>
                    <td>{{$multival->descripcion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
