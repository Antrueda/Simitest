<div class="card">
    <div class="card-header">
        <strong>Matrícula academia</strong>
    </div>
    <div class="card-body">
        @if ($todoxxxx['matricula_academica'])
            <p class="card-text">
                <span class="form-control"><strong>Numero Matrícula: </strong>{{$todoxxxx['matricula_academica']->numeromatricula}} </span>
                <span class="form-control"><strong>Grado: </strong>{{$todoxxxx['matricula_academica']->s_grado}}</span>
                <span class="form-control"><strong>Grupo: </strong>{{$todoxxxx['matricula_academica']->s_grupo}} </span>
                <span class="form-control"><strong>Período: </strong>{{$todoxxxx['matricula_academica']->periodo}} </span>
                <span class="form-control"><strong>Estrategia: </strong>{{$todoxxxx['matricula_academica']->estrategia}} </span>
            </p>
        @else
            <center><p class="card-text">NNAJ no tiene Matrícula academia</p></center>
        @endif
    </div>
</div>
