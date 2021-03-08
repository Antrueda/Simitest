@extends('layouts.index')
@section('content')
<div class="alert alert-warning">
    <strong>{{$tituloxx}}</strong> No se pudo migrar el nnaj:<strong> {{$nnajxxxx}}</strong> al sistema antiguo porque el parametro: <strong>{{$parametr}}</strong> no existe para la tabla: <strong>{{$tablaxxx}}</strong> de <strong>sis_multivalores</strong>,
    el combo que se utiliza es: <strong>{{$temaxxxx}}</strong>.
    Por favor enviar pantallazo de este mensaje por correo al administrador del sistema para la homologación.
</div>
<div class="row">
    <div class="col-sm-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="3" style="text-align: center;">ANTIGUO</th>
                </tr>
                <tr>
                    <th>TABLA</th>
                    <th>C&Oacute;DIGO ANTIGUO</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($antiguox as $key=> $antiguoy)
                <tr>
                    @if($key==0)
                    <td rowspan="{{$antirows}}" class="align-middle">{{$tablaxxx}}</td>
                    @endif
                    <td>{{$antiguoy->codigo}}</td>
                    <td>{{$antiguoy->descripcion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="4" style="text-align: center;">NUEVO</th>
                </tr>
                <tr>
                    <th>ID COMBO</th>
                    <th>COMBO (TABLA)</th>
                    <th>C&Oacute;DIGO NUEVO</th>
                    <th>PARAMETRO</th>
                </tr>
            </thead>
            <tbody>

                @foreach($nuevoxxx->parametros as $key=>$nuevoxxy)
                <tr>
                    @if($key==0)
                    <td rowspan="{{$nuevrows}}" class="align-middle">{{$nuevoxxx->id}}</td>
                    <td rowspan="{{$nuevrows}}" class="align-middle">{{$nuevoxxx->nombre}}</td>
                    @endif
                    <td>{{$nuevoxxy->id}}</td>
                    <td>{{$nuevoxxy->nombre}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
