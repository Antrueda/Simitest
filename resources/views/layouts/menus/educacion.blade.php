
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
                            <p>Administración Talleres Formación</p>
                        </a>
                    </li>
                @endcan
            </ul>
        <ul class="nav nav-treeview">
            @can('apvfmodu-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('apvfarea') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Perfil Vocacional</p>
                    </a>
                </li>
            @endcan
        </ul>
        <ul class="nav nav-treeview">
            @can('avctmodu-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('avctarea') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Valoración y caracterización T.O</p>
                    </a>
                </li>
            @endcan
        </ul>

</li>
