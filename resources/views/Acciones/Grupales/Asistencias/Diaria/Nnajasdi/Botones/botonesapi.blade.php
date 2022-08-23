<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
        <div class="dropdown-item">
            {{-- <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editarxx', $queryxxx->id) }}">EDITAR</a> --}}
        </div>
        @endif


        

        @if(auth()->user()->can($requestx->routexxx[0] . '-borrarxx'))
        <div class="dropdown-item">
            <form action="{{ route($requestx->routexxx[0].'.borrarxx', [$queryxxx->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">
                    ELIMINAR
                </button>
            </form>
        </div>
        @endif


        <div class="dropdown-item">
            {{-- <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[0].'.verxxxxx', [$queryxxx->id])}}" >VER</a> --}}
        </div>
        <div class="dropdown-item">
            <a class="btn btn-sm btn-success" href="{{route('nnajacti', [$queryxxx->id])}}" >ACTIVIDADES</a>
        </div>
    </div>
</div>
