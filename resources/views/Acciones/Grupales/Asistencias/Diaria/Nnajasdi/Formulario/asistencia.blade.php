<div class="card">
    <div class="card-header">
        <strong>Asistencia Diaria</strong>
    </div>
    <div class="card-body">
        @if ($todoxxxx['asistencia_diaria'])
            <p class="card-text">
                <span class="form-control"><strong>Numero Planilla: </strong>{{$todoxxxx['asistencia_diaria']->consecut}} </span>
                <span class="form-control"><strong>Fecha Diligenciamiento: </strong>{{$todoxxxx['asistencia_diaria']->fechdili}}</span>
                <span class="form-control"><strong>Upi/Dependencia: </strong>{{$todoxxxx['asistencia_diaria']->sis_depen_id}}</span>
                <span class="form-control"><strong>Tipo de Servicio: </strong>{{$todoxxxx['asistencia_diaria']->sis_servicio_id}} </span>
                <span class="form-control"><strong>Espacio donde se realiza la actividad: </strong>{{$todoxxxx['asistencia_diaria']->prm_lugactiv_id}} </span>
                <span class="form-control"><strong>Localidad: </strong>{{$todoxxxx['asistencia_diaria']->sis_localidad_id}} </span>
                <span class="form-control"><strong>UPZ: </strong>{{$todoxxxx['asistencia_diaria']->sis_upz_id}} </span>
            </p>
        @else
            <center><p class="card-text">NNAJ no tiene asistencia Diaria</p></center>
        @endif
    </div>