<div class="form-group card-footer text-muted text-center">
    {{-- @if($todoxxxx['accionxx']!='Ver')
        {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif --}}
    @if($todoxxxx['accionxx']!='Crear')
        <a href="{{route($todoxxxx['routnuev'].'.nuevo',[$todoxxxx['nnajregi']])}}" 
        class="btn btn-sm btn-primary" role="button">Nueva Intervención</a>
    @endif

    <a href="{{route($todoxxxx['routinde'])}}" 
    class="btn btn-sm btn-primary" role="button">Volver a los NNAJ</a>
    
</div>