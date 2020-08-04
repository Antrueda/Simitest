<li class="nav-item has-treeview">
     <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
        Grupales
        <i class="fas fa-angle-left right"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
       
        @can('agactividad-leer')
            <li class="nav-item">
                <a href="{{ route('ag.acti') }}" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Talleres y Acciones Formativas</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
