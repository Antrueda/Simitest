<div class="card-header">
    {{ $tituloxx }}
    @if (!is_null($botoncrea))
        @canany(['tipoatencion-crear'])
            <a href="{{ route($rutaxxxx . '.create') }}" class="btn btn-sm btn-primary ml-2">{{ $botoncrea }}</a>
        @endcan

    @endif

</div>
