<div class="form-group card-footer text-muted text-center">
    @foreach ($todoxxxx['botoform'] as $botoform)
    <{{$botoform['tipoxxxx']}}
        @foreach ($botoform['atribute'] as $key=> $atribute)
            {{$key }}="{{$atribute}}"
        @endforeach
    >
    {{$botoform['tituloxx']}}
    </{{$botoform['tipoxxxx']}}>
    @endforeach
</div>
