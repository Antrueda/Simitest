<div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']!='Ver')
        {{ Form::submit('GUARDAR', ['class'=>'btn btn-sm btn-primary','style '=> "text-transform:uppercase;"]) }}
    @endif
    @if($todoxxxx['accionxx']!='Crear')
        <a href="{{route($todoxxxx['routnuev'].'.nuevo')}}" 
        class="btn btn-sm btn-primary" style = "text-transform:uppercase;" role="button">{{ $todoxxxx['nuevoxxx'] }}</a>
    @endif

    <a href="{{route($todoxxxx['routinde'])}}" 
    class="btn btn-sm btn-primary" style = "text-transform:uppercase;" role="button">{{ $todoxxxx['volverax'] }}</a>
</div>