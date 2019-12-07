<div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']=='Crear'|| $todoxxxx['accionxx']=='Editar')
        {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif
    {{-- @if($todoxxxx['accionxx']!='Crear')
        <a href="{{route($todoxxxx['routnuev'].'.nuevo',$todoxxxx['nnajregi'])}}" 
        class="btn btn-sm btn-primary" role="button">Nuev{{ $todoxxxx['nuevoxxx']  }}</a>
    @endif --}}
    @if(!isset($todoxxxx['mostrarx']))
    <a href="{{route($todoxxxx['routinde'])}}" 
    class="btn btn-sm btn-primary" role="button">Volver a {{ $todoxxxx['volverax'] }}</a>
    @endif
</div>