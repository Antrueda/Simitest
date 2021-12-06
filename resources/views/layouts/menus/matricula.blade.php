@can('fos-admin')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
            Administracion de Matricula
            <i class="fas fa-school-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        @can('matriculaadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('matriculaadmin') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Matricula</p>
                    </a>
                </li>
            @endcan
        </ul>
    </li>
@endcan
