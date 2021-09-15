<div class="card-header">
    {{ $tituloxx }}
    @if (!is_null($botoncrea))
        @canany(['intsubarea-crear'])
            <a href="{{ route($rutaxxxx . '.create', ['atencion' => Route::current()->parameters['atencion'], 'area' => Route::current()->parameters['area']]) }}"
                class="btn btn-sm btn-primary ml-2">{{ $botoncrea }}</a>
        @endcan
    @endif

</div>
