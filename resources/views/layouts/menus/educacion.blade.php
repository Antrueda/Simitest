
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

    <ul class="nav nav-treeview">
        @can('edaprudi-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('cgimodu-modulo') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Gustos,Intereses</p>
                    </a>
                </li>
            @endcan
        </ul>

    <ul class="nav nav-treeview">
        @can('matriculaadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('matriculaadmin') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Matrícula</p>
                    </a>
                </li>
            @endcan
        </ul>
        
        <ul class="nav nav-treeview">
            @can('cursosmodulosm-modulo')
                    <li class="nav-item">
                        <a href="{{ route('cursosmodulosm') }}" class="nav-link">
                            <i class="fas fa-school nav-icon"></i>
                            <p>Administración Matrícula Cursos Talleres</p>
                        </a>
                    </li>
                @endcan
            </ul>
        
</li>
