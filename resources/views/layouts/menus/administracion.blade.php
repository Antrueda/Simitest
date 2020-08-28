 <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tools"></i>
    <p>
        Administración
        <i class="fas fa-angle-left right"></i>
    </p>
    </a>

    <ul class="nav nav-treeview">
        @canany(['fosadmin-modulo'])
            @include('layouts.menus.fos')
        @endcanany
        @canany(['indiadmi-modulo'])
            @include('layouts.menus.admindicadores')
        @endcanany
         @canany(['sistemax-modulo'])
            @include('layouts.menus.sistema')
        @endcanany
    </ul>
</li>
