

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-question"></i>
        <p>
            Ayuda
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        @can('ayuda-modulo')
        <li class="nav-item">
            <a href="{{ route('ayuda.vista.index') }}" class="nav-link">
                <i class="nav-icon fas fa-question"></i>
                <p>Usuario</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
