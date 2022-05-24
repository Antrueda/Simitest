
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
            Administracion de Salud
            <i class="fas fa-school-left right"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        @can('saludmodulo-modulo')
                <li class="nav-item">
                    <a href="{{ route('saludmodulo') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Salud</p>
                    </a>
                </li>
            @endcan
        </ul>
        
     

</li>
