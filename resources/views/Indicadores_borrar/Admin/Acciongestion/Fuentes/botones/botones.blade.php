<div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']!='Ver')
        {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif
    @if($todoxxxx['accionxx']!='Crear')
        <a href="{{route($todoxxxx['routnuev'].'.nuevo',$todoxxxx['parametr'])}}" 
        class="btn btn-sm btn-primary" role="button">{{ $todoxxxx['nuevoxxx'] }}</a>
    @endif

    <a href="{{route($todoxxxx['routinde'],$todoxxxx['parametr'])}}" 
    class="btn btn-sm btn-primary" role="button">{{ $todoxxxx['volverax'] }}</a>
    <a href="{{route('ag.acciongestion.actividad',[$todoxxxx['parametr'][0],$todoxxxx['parametr'][1]])}}" 
    class="btn btn-sm btn-primary" role="button">Volver a Actividades</a>
    <a href="{{route('ag.acciongestion.bases',[$todoxxxx['parametr'][0]])}}" 
    class="btn btn-sm btn-primary" role="button">Volver a Linea base NNAJ</a>
    <a href="{{route('ag')}}" 
    class="btn btn-sm btn-primary" role="button">Volver a NNAJS</a>
</div>