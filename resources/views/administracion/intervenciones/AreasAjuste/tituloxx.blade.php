<div class="card-header">
    {{ $tituloxx }}
    @if (!is_null($botoncrea))
        @canany(['intarea-crear'])
            <a href="{{ route($rutaxxxx . '.create', ['atencion' => Route::current()->parameters['atencion']]) }}"
                class="btn btn-sm btn-primary ml-2">{{ $botoncrea }}</a>
        @endcan
    @endif

</div>
