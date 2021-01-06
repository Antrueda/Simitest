<div class="form-group card-footer text-muted text-center">
    @if($accionxx!='Ver')
        {{ Form::submit($accionxx, ['class'=>'btn btn-sm btn-primary', 'style' => "text-transform:uppercase;"]) }}
    @endif
    @if($accionxx!='Crear')
        <a href="{{route('permiso.nuevo')}}" 
        class="btn btn-sm btn-primary" role="button">NUEVO PERMISO </a>
    @endif
 
    <a href="{{route('permiso')}}" 
    class="btn btn-sm btn-primary" role="button">VOLVER A PERMISO</a>

</div>