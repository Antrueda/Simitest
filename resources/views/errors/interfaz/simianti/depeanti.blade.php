@extends('layouts.index')
@section('content')
<div class="alert alert-warning">
    <strong>UPI NO HOMOLOGADA </strong>  El servivio: <strong>{{$servicio->descripcion}} c&oacute;digo: {{$servicio->codigo}} </strong> No se pudo migrar al sistema nuevo porque la dependencia no ha sido homologada.
    Por favor enviar pantallazo de este mensaje por correo al administrador del sistema para la homologación al siguiente correo: <strong>soportetecnico.nuevosimi@idipron.gov.co</strong>.
</div>
<div class="row">

    <div class="col-sm-12">
        <table class="table table-bordered">
            <thead>
                <thead>
                    <tr style="text-align: center;">
                        <th>ID</th>
                        <th>UPI</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>{{$dependen->id_upi}}</td>
                    <td>{{$dependen->nombre}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
