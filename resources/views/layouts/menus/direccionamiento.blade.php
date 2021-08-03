@can('fos-admin')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="fas fa-caret-square-down nav-icon"></i>
        <p>
            Administración Direccionamiento y Referenciación
            <i class="fas fa-caret-square-down"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        @can('direcadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('direcadmin') }}" class="nav-link">
                        <i class="fas fa-angle-double-right nav-icon"></i>
                        <p>Administración Entidad y Programa</p>
                    </a>
                </li>
            @endcan
            {{--@can('fos-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fostipo') }}" class="nav-link">
                        <i class="fas fa-compass nav-icon"></i>
                        <p>Tipo de Seguimiento</p>
                    </a>
                </li>
            @endcan
            @can('fos-sub-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fossubtipo') }}" class="nav-link">
                    <i class="far fa-compass nav-icon"></i>
                    <p>Sub Tipo de Seguimiento</p>
                    </a>
                </li>
            @endcan --}}
        </ul>
    </li>
@endcan
