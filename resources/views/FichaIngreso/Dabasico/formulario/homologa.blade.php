<div class="card card-outline card-secondary">
    <div class="card-header">
        PARAMETROS
    </div>
    <div class="card-header p-2">
        <table class="table">
            <thead>
                <tr>
                    <th>ID TEMA</th>
                    <th>TEMA</th>
                    <th>ID </th>
                    <th>PARAMETRO</th>
                    <th>HOMOLAGAR</th>
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
                    @if($paramets['simianti']<1 && $paramets['sindatox'] )
                    <a href="{{route('fidatbas.homologa',[$paramets['idtemaxx'],$paramets['idparame'],$paramets['codigoxx']])}}" class="btn btn-primary btn-sm" role="button">Homologar</a>
                    @else
                    {{$paramets['simianti']}}
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
