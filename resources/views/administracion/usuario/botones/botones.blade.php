<div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']!='Ver')
        {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif
    @if($todoxxxx['accionxx']!='Crear')
        <a href="{{route($todoxxxx['rutaxxxx'].'.nuevo')}}" class="btn btn-sm btn-primary" role="button">{{ ucfirst ( $todoxxxx['nuevoreg'] )  }}</a>
    @endif
    <a href="{{route($todoxxxx['rutaxxxx'])}}" class="btn btn-sm btn-primary" role="button">{{ $todoxxxx['volverax'] }}</a>
</div>