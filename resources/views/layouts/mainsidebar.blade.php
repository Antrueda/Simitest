<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('/') }}" class="brand-link">
    <img src="{{ asset('img/favicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">SIMI 2.0</span>
  </a>
  <!-- Brand Logo -->

  <!-- Sidebar -->
  @auth
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      {{-- <div class="image">
        <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div> --}}
    <div class="info">
      <a href="#" class="d-block">{{ Auth::user()->name }}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->


      <!-- TERRITORIO -->
      @canany(['territorio-modulo'])
        @include('layouts.menus.territorio')
      @endcanany
      <!-- FIN TERRITORIO -->
      <!-- ACCIONES -->
      @canany(['aiindex-leer','agtema-leer','agtaller-leer','agsubtema-leer','agdependencia-leer',
                'agcontexto-leer','agrecurso-leer','agconvenio-leer','agactividad-leer'])
        @include('layouts.menus.acciones')
      @endcanany
      @canany(['parametro-leer','dependencia-leer', 'actividadproceso-leer',
        'usuario-leer','rol-leer','permiso-leer','actividad-leer','documentoFuente-leer','proceso-leer',
        'mapaProceso-leer','entidad-leer','tema-leer','parametro-leer','siscargo-leer',

        'inpreguntas-leer','inlineabase-leer','area-leer','inbasefuente-leer',
        'inbasedocumen-leer','indocindicador-leer','inrespuesta-leer','invalidacion-leer','inacciongestion-leer'])
        @include('layouts.menus.administracion')

      @endcanany
      <!-- FIN ADMINISTRACION -->

      <!-- INDICADORES -->
      @canany(['ingrupal-leer','inindividual-leer'])
        @include('layouts.menus.indicadores')
      @endcanany

      <!-- FIN INDICADORES -->
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
  </div>
  @endauth
  <!-- /.sidebar -->
</aside>
