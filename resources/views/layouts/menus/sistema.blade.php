 <li class="nav-item has-treeview">
     <a href="#" class="nav-link">
         <i class="nav-icon fas fa-tools"></i>
         <p>
             Sistema
             <i class="fas fa-angle-left right"></i>
         </p>
     </a>

     <ul class="nav nav-treeview">
        @can('agtema-leer')
        <li class="nav-item">
            <a href="{{ route('ag.tema') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Tema</p>
            </a>
        </li>
    @endcan
    @can('siseslug-leer')
        <li class="nav-item">
            <a href="{{ route('siseslug') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Espacio/Lugar</p>
            </a>
        </li>
    @endcan
    @can('depeluga-leer')
        <li class="nav-item">
            <a href="{{ route('depeluga') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Dependencia E/L</p>
            </a>
        </li>
    @endcan
    @can('agtaller-leer')
        <li class="nav-item">
            <a href="{{ route('agrtaller.temas') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Taller</p>
            </a>
        </li>
    @endcan
    @can('agsubtema-leer')
        <li class="nav-item">
            <a href="{{ route('agsubt.talleres') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Subtema Taller</p>
            </a>
        </li>
    @endcan
    @can('agdependencia-leer')
        <li class="nav-item">
            <a href="{{ route('ag.depe') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Dependencia</p>
            </a>
        </li>
    @endcan
    @can('agcontexto-leer')
        <li class="nav-item">
            <a href="{{ route('ag.cont') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Contexto Pedagógico</p>
            </a>
        </li>
    @endcan
    @can('agrecurso-leer')
        <li class="nav-item">
            <a href="{{ route('ag.recu') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Recurso</p>
            </a>
        </li>
    @endcan
    @can('agconvenio-leer')
        <li class="nav-item">
            <a href="{{ route('ag.conv') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Convenio</p>
            </a>
        </li>
    @endcan
         @can('dependencia-leer')
         <li class="nav-item">
             <a href="{{ route('dependencia') }}" class="nav-link">
                 <i class="fas fa-door-open nav-icon"></i>
                 <p>Dependencia</p>
             </a>
         </li>
         @endcan
         @can('sisesta-leer')
         <li class="nav-item">
             <a href="{{ route('sisesta') }}" class="nav-link">
                 <i class="fas fa-door-open nav-icon"></i>
                 <p>Estados</p>
             </a>
         </li>
         @endcan
         @can('actividadproceso-leer')
         <li class="nav-item">
             <a href="{{ route('actividadproceso')}}" class="nav-link">
                 <i class="fas fa-microchip nav-icon"></i>
                 <p>Actividad Proceso</p>
             </a>
         </li>
         @endcan
         @can('usuario-leer')
         <li class="nav-item">
             <a href="{{ route('usuario')}}" class="nav-link">
                 <i class="fa fa-users nav-icon"></i>
                 <p>Usuarios</p>
             </a>
         </li>
         @endcan
         @can('rolesxxx-leer')
         <li class="nav-item">
             <a href="{{ route('rolesxxx')}}" class="nav-link">
                 <i class="fas fa-user-lock nav-icon"></i>
                 <p>Roles</p>
             </a>
         </li>
         @endcan
         @can('permiso-leer')
         <li class="nav-item">
             <a href="{{ route('permiso')}}" class="nav-link">
                 <i class="far fa-user-circle nav-icon"></i>
                 <p>Permisos</p>
             </a>
         </li>
         @endcan
         @can('actividad-leer')
         <li class="nav-item">
             <a href="{{ route('actividad') }}" class="nav-link">
                 <i class="fas fa-angle-double-right nav-icon"></i>
                 <p>Actividad</p>
             </a>
         </li>
         @endcan
         @can('documentoFuente-leer')
         <li class="nav-item">
             <a href="{{ route('documentoFuente')}}" class="nav-link">
                 <i class="far fa-file-alt nav-icon"></i>
                 <p>Documentos Fuentes</p>
             </a>
         </li>
         @endcan
         @can('proceso-leer')
         <li class="nav-item">
             <a href="{{ route('proceso') }}" class="nav-link">
                 <i class="fas fa-tasks nav-icon"></i>
                 <p>Procesos</p>
             </a>
         </li>
         @endcan
         @can('mapaProceso-leer')
         <li class="nav-item">
             <a href="{{ route('mapaProceso') }}" class="nav-link">
                 <i class="fas fa-project-diagram nav-icon"></i>
                 <p>Mapa de procesos</p>
             </a>
         </li>
         @endcan
         @can('entidad-leer')
         <li class="nav-item">
             <a href="{{ route('entidad') }}" class="nav-link">
                 <i class="far fa-building nav-icon"></i>
                 <p>Entidades</p>
             </a>
         </li>
         @endcan
         @can('tema-leer')
         <li class="nav-item">
             <a href="{{ route('tema') }}" class="nav-link">
                 <i class="far fa-object-group nav-icon"></i>
                 <p>Tema</p>
             </a>
         </li>
         @endcan

         @canany(['parametro-leer'])
         <li class="nav-item">
             <a href="{{ route('parametro') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Parámetro</p>
             </a>
         </li>
         @endcanany

         @can('siscargo-leer')
         <li class="nav-item">
             <a href="{{ route('sis.cargo') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Cargo</p>
             </a>
         </li>
         @endcan
         @can('alertas-leer')
         <li class="nav-item">
             <a href="{{ route('alertas') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Mensajes</p>
             </a>
         </li>
         @endcan
         @can('eps-leer')
         <li class="nav-item">
             <a href="{{ route('eps') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Eps</p>
             </a>
         </li>
         @endcan


     </ul>
 </li>
