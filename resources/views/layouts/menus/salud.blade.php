
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="fas fa-first-aid nav-icon"></i>
        
        <p> Administracion de Salud</p>
    </a>
    <ul class="nav nav-treeview">
        @can('saludmodulo-modulo')
            <li class="nav-item">
                <a href="{{ route('saludmodulo') }}" class="nav-link">
                    <i class="fas fa-ambulance nav-icon"></i>
                    <p>Administración Salud</p>
                </a>
            </li>
        @endcan
        @can('labrrdmo-moduloxx')
            <li class="nav-item">
                <a href="{{ route('labrrdmo') }}" class="nav-link">
                    <i class="fas fa-ambulance nav-icon"></i>
                    <p>Administración (LAB- RRD)</p>
                </a>
            </li>
        @endcan
    </ul>

</li>
<i class=""></i>