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
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-item">
                @if ($queryxxx->sis_esta_id == 2)
                    @if (auth()->user()->can($requestx->routexxx[0] . '-activarx'))
                        <a class="btn btn-sm btn-warning "
                            href="{{ route($requestx->routexxx[0] . '.activarx', [$queryxxx->id]) }}">ACTIVAR</a>
                    @endif
                @else
                    @if (auth()->user()->can($requestx->routexxx[0] . '-inactiva'))
                        <a class="btn btn-sm btn-danger "
                            href="{{ route($requestx->routexxx[0] . '.inactiva', [$queryxxx->id]) }}">INACTIVAR</a>
                    @endif
                @endif
            </div>

        </div>
    </div>
@endif
