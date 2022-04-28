@can('fos-admin')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
            Administracion de Cuestionario
            <i class="fas fa-school-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        @can('cuestionarioadmin-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('cgimodu') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Cuestionario</p>
                    </a>
                </li>
            @endcan
        </ul>
    </li>
@endcan



