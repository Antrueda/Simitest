@extends('layouts.index')
@section('content')
<div class="alert alert-warning">
    <strong>{{$tituloxx}}</strong> No se pudo migrar el nnaj:<strong>{{$nnajxxxx->primer_nombre}}
        {{$nnajxxxx->segundo_nombre}}
        {{$nnajxxxx->primer_apellido}}
        {{$nnajxxxx->segundo_apellido}} </strong> al sistema antiguo porque el municipio mostrado en la tabla no existe o no ha sido homologado.
    Por favor enviar pantallazo de este mensaje por correo al administrador del sistema para la homologación al siguiente correo: <strong>soportetecnico.nuevosimi@idipron.gov.co.
</div>
<div class="row">

    <div class="col-sm-12">
        <table class="table table-bordered">
            <thead>
                <thead>
                    <tr style="text-align: center;">
                        <th colspan="4">SIMI ANTIGUO</th>
                        <th colspan="6">NUEVO DESARROLLO</th>
                    </tr>
                    <tr style="text-align: center;">
                        <th colspan="2">UPI</th>
                        <th colspan="2">SERIVIO</th>
                        <th colspan="3">UPI</th>
                        <th colspan="3">SERVICIO</th>
                    </tr>
                    <tr style="text-align: center;">


                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>ID</th>
                        <th>NOMMBRE</th>
                        <th>ID UPI</th>
                        <th>UPI</th>
                        <th>SIMI ANTIGUO</th>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>SIMI ANTIGUO</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>ID UPI</td>
                    <td>UPI</td>
                    <td>ID ddSERVICIO</td>
                    <td>SERVICIO</td>
                    <td>{{$depenuev->id}}</td>
                    <td>{{$depenuev->nombre}}</td>
                    <td>{{$depenuev->simianti_id}}</td>
                    <td>ID SERVICIO</td>
                    <td>SERVICIO</td>
                    <td>SIMI ANTIGUO</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
