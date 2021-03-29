@extends('layouts.index')
@section('content')
<div class="alert alert-warning">
    <strong>{{$tituloxx}}</strong> No se pudo migrar el nnaj:<strong> {{$nnajxxxx}}</strong> al sistema antiguo porque el municipio mostrado en la tabla no existe o no ha sido homologado.
    Por favor enviar pantallazo de este mensaje por correo al administrador del sistema para la homologación al siguiente correo: soportetecnico.nuevosimi@idipron.gov.co.
</div>
<div class="row">

    <div class="col-sm-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID MUNICIPIO</th>
                    <th>MUNICIPIO</th>
                    <th>DEPARTAMENTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$antiguox->id}}</td>
                    <td>{{$antiguox->s_municipio}}</td>
                    <td>{{$antiguox->sis_departam->s_departamento}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
