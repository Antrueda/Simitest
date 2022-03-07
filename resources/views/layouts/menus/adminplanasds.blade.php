<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Administración Planillas
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('planasds-admimodu')
        <li class="nav-item">
            <a href="{{ route('aasdtiac') }}" class="nav-link">
                <i class="fas fa-tools nav-icon"></i>
                <p>Actividades Diarias</p>
            </a>
        </li>
        @endcan
   

        {{-- @can('inlineabase-leer')
        <li class="nav-item">
            <a href="{{ route('li') }}" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Líneas Base</p>
            </a>
        </li>
        @endcan
        @can('fsoporte-leer')
        <li class="nav-item">
            <a href="{{ route('fsoporte') }}" class="nav-link">
                <i class="fas fa-chess-pawn nav-icon"></i>
                <p>Funtes Soporte</p>
            </a>
        </li>
        @endcan
        @can('area-leer')
        <li class="nav-item">
            <a href="{{ route('area') }}" class="nav-link">
                <i class="fas fa-sitemap nav-icon"></i>
                <p>Indicadores</p>
            </a>
        </li>
        @endcan --}}
    </ul>
</li>
