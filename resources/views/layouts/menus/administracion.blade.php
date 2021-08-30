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
        @canany(['motaller-modulo'])
            @include('layouts.menus.talleres')
        @endcanany
        @canany(['actenadm-moduloxx'])
            @include('layouts.menus.actaencuentro')
        @endcanany
         @canany(['sistemax-modulo'])
            @include('layouts.menus.sistema')
        @endcanany
        @canany(['ayuda-modulo'])
<<<<<<< HEAD
             @include('layouts.menus.admayuda')
         @endcanany
         @canany(['motivoadmin-modulo'])
         @include('layouts.menus.motivos')
         @endcanany
=======
            @include('layouts.menus.admayuda')
        @endcanany  
            @include('layouts.menus.intervencion')
       {{-- @endcanany --}}
        @canany(['motivoadmin-modulo'])
            @include('layouts.menus.motivos')  
        @endcanany
>>>>>>> 4eae66a42367f0065edc61986faca913f2169420
    </ul>
</li>
