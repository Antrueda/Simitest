<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-clipboard-check"></i>
        <p>
            Acciones
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @canany(['accindiv-modulo'])
        <li class="nav-item">
            <a href="{{ route('ai') }}" class="nav-link">
                <i class="fas fa-child nav-icon"></i>
                <p>Individuales</p>
            </a>
        </li>
        @endcanany
        @canany(['accigrup-modulo'])
        <li class="nav-item">
            @include('layouts.menus.accionesgrupales')
        </li>
        @endcanany
    </ul>
</li>