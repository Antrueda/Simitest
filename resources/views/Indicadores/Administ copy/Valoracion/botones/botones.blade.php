<div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']!='Ver')
        {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif
    <a href="{{route($todoxxxx['routinde'])}}" 
    class="btn btn-sm btn-primary" role="button">{{ $todoxxxx['volverax'] }}</a>
</div>