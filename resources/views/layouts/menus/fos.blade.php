@can('fos-admin')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
            Ficha de Observación y/o seguimiento
            <i class="fas fa-angle-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        @can('fosadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('fosadmin') }}" class="nav-link">
                        <i class="fas fa-compass nav-icon"></i>
                        <p>Administración Tipo y Subtipo de Seguimiento</p>
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
