<div class=" card-outline card-secondary">

    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link text-sm {{ route('tipoatencion.index') ? ' active' : '' }}"
                    href="{{ route('tipoatencion.index') }}">TIPOS DE ATENCIÓN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-sm "
                    href="{{ route('intarea.index', Route::current()->parameters['atencion']) }}">ÁREA DE AJUSTE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-sm "
                    href="{{ route('intsubarea.index', ['atencion' => Route::current()->parameters['atencion'], 'area' => Route::current()->parameters['area']]) }}">SUBÁREA
                    DE AJUSTE</a>
            </li>
        </ul>
    </div>

</div>
