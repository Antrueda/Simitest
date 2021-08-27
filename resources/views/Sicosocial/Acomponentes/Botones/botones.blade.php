<div class="form-group card-footer text-muted text-center">
    @foreach ($todoxxxx['botoform'] as $botoform)
        @if($botoform['mostboto'])
            @switch($botoform['tipoboto'])
                @case(1)
                    {{ Form::submit($botoform['tituloxx'], ['class'=>$botoform['clasexxx']]) }}
                @break
                @case(2)
                    <a href="{{$botoform['hrefxxxx']}}" class="{{ $botoform['clasexxx']}}">{{$botoform['tituloxx']}}</a>
                @break
            @endswitch
        @endif
    @endforeach

</div>
