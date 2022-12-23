@if ($queryxxx->prm_principa_id == 227)
    <div class="alert alert-danger" role="alert">
        <strong>Upi principal</strong> <BR />
        no se puede inactivar
    </div>
    </div>
@else
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            SELECCIONE
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 50px">

            @if ($queryxxx->sis_esta_id == 2)
                @if (auth()->user()->can($requestx->routexxx[0] . '-activarx'))
                    <div class="dropdown-item">
                        <a class="btn btn-sm btn-warning "
                            href="{{ route($requestx->routexxx[0] . '.activarx', [$queryxxx->id]) }}">ACTIVAR</a>
                    </div>
                @endif
            @else
                @if (auth()->user()->can($requestx->routexxx[0] . '-inactiva'))
                    <div class="dropdown-item">
                        <a class="btn btn-sm btn-primary "
                            href="{{ route($requestx->routexxx[1], [$queryxxx->id]) }}">SERVICIOS</a>
                    </div>
                @endif
                @if (auth()->user()->can($requestx->routexxx[0] . '-inactiva'))
                    <div class="dropdown-item">
                        <a class="btn btn-sm btn-danger "
                            href="{{ route($requestx->routexxx[0] . '.inactiva', [$queryxxx->id]) }}">INACTIVAR</a>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endif
