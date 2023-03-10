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
             @include('layouts.menus.admayuda')
         @endcanany
         @canany(['tipoatencion-modulo'])
             @include('layouts.menus.intervencion')
         @endcanany
         {{-- @endcanany --}}
         @canany(['motivoadmin-modulo'])
             @include('layouts.menus.motivos')
         @endcanany
         @canany(['planasds-admimodu'])
            @include('layouts.menus.adminplanasds')
         @endcanany
         @canany(['direcadmin-modulo'])
            @include('layouts.menus.direccionamiento')
        @endcanany
        <!-- @canany(['matriculaadmin-modulo'])
            @include('layouts.menus.matricula')
        @endcanany -->
        @canany(['cuestionarioadmin-moduloxx'])
            @include('layouts.menus.admincuestionario')
        @endcanany
        @canany(['saludmodulo-modulo'])
        @include('layouts.menus.salud')
         @endcanany
        @include('layouts.menus.educacion')
        @include('layouts.menus.sicosocial')
     </ul>
 </li>
