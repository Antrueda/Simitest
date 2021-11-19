<div class="form-group card-footer text-muted text-center">
    @isset ($todoxxxx['botoform'])
        @foreach ($todoxxxx['botoform'] as $botoform)
            @if ($botoform['mostrars'])
                @switch($botoform['formhref'])
                    @case(1)
                        {{ Form::submit($botoform['accionxx'], ['class'=>$botoform['clasexxx']]) }}
                        @break
                    @case(2)
                        <a href="{{route($botoform['routingx'][0],$botoform['routingx'][1])}}"
                        class="{{ $botoform['clasexxx']}}">{{$botoform['tituloxx']}}</a>
                        @break
                @endswitch
            @endif
        @endforeach
    @endisset
</div>
