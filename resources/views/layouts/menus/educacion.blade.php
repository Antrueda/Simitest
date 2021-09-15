
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
            Administracion de Educación
            <i class="fas fa-school-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('edaprudi-moduloxx')
        <li class="nav-item">
            <a href="{{ route('edaprudi') }}" class="nav-link">
                <i class="fas fa-school nav-icon"></i>
                <p>Administración Prueba Diagnóstica</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
