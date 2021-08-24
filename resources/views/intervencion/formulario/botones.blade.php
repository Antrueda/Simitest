<div class="form-group mt-3 text-muted text-center">
    @foreach ($todoxxxx['botoform'] as $botoform)
        @if ($botoform['mostrars'])

            @switch($botoform['formhref'])
                @case(1)
                    {{ Form::submit($botoform['accionxx'], ['class' => $botoform['clasexxx']]) }}
                @break 
            @endswitch
        @endif
    @endforeach

</div>