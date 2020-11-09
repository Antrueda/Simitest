<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
        Reportes
        <i class="fas fa-angle-left right"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
        @can('excel-leer')
            <li class="nav-item">
                <a href="{{ route('excel') }}" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Execel</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
