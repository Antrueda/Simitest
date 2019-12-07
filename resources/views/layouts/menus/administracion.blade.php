 <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tools"></i>
    <p>
        Administración
        <i class="fas fa-angle-left right"></i>
    </p>
    </a>

    <ul class="nav nav-treeview">
        @canany(['inpreguntas-leer','inlineabase-leer','area-leer','inbasefuente-leer',
            'inbasedocumen-leer','indocindicador-leer','inrespuesta-leer','invalidacion-leer','inacciongestion-leer'])
            @include('layouts.menus.admindicadores')
        @endcanany
         @canany(['parametro-leer','dependencia-leer', 'actividadproceso-leer',
            'usuario-leer','rol-leer','permiso-leer','actividad-leer','documentoFuente-leer','proceso-leer',
            'mapaProceso-leer','entidad-leer','tema-leer','parametro-leer','siscargo-leer'])
            @include('layouts.menus.sistema')
        @endcanany

    </ul>
</li>
