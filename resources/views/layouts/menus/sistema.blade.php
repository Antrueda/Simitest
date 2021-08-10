 <li class="nav-item has-treeview">
     <a href="#" class="nav-link">
         <i class="nav-icon fas fa-tools"></i>
         <p>
             Sistema
             <i class="fas fa-angle-left right"></i>
         </p>
     </a>

     <ul class="nav nav-treeview">
         @can('areaxxxx-leer')
         <li class="nav-item">
             <a href="{{ route('areaxxxx') }}" class="nav-link">
                 <i class="fas fa-door-open nav-icon"></i>
                 <p>&Aacute;reas</p>
             </a>
         </li>
         @endcan
         @can('servicio-leer')
         <li class="nav-item">
             <a href="{{ route('servicio') }}" class="nav-link">
                 <i class="fas fa-door-open nav-icon"></i>
                 <p>Servicios</p>
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
         @can('estausua-leer')
         <li class="nav-item">
             <a href="{{ route('estausua') }}" class="nav-link">
                 <i class="fas fa-door-open nav-icon"></i>
                 <p>Justificaciones (Estado)</p>
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
         @if(in_array(Auth::user()->s_documento,['17496705','1090412429', '1032443628']))
         @can('permiso-leer')
         <li class="nav-item">
             <a href="{{ route('permiso')}}" class="nav-link">
                 <i class="far fa-user-circle nav-icon"></i>
                 <p>Permisos</p>
             </a>
         </li>
         @endcan
         @endif
         @can('actividad-leer')
         <li class="nav-item">
             <a href="{{ route('actividad') }}" class="nav-link">
                 <i class="fas fa-angle-double-right nav-icon"></i>
                 <p>Actividades</p>
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
         <!-- @can('tema-leer')
         <li class="nav-item">
             <a href="{{ route('tema') }}" class="nav-link">
                 <i class="far fa-object-group nav-icon"></i>
                 <p>Tema</p>
             </a>
         </li>
         @endcan -->

         @can('temamodu-modulo')
         <li class="nav-item">
             <a href="{{ route('temamodu') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Temas</p>
             </a>
         </li>
         @endcan

         <!-- @canany(['parametro-leer'])
         <li class="nav-item">
             <a href="{{ route('parametro') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Par&aacute;metro</p>
             </a>
         </li>
         @endcanany -->

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
                 <p>Alertas</p>
             </a>
         </li>
         @endcan
         @can('alertas-leer')
         <li class="nav-item">
             <a href="{{ route('mensajes') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Mensaje</p>
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
         @can('diafesti-leer')
         <li class="nav-item">
             <a href="{{ route('diafesti') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>D&iacute;as Festivos</p>
             </a>
         </li>
         @endcan
         @if(Auth::user()->id == 1)
         @can('ubicacio-modulo')
         <li class="nav-item">
             <a href="{{ route('ubicacio') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Ubicación</p>
             </a>
         </li>
         @endcan
         @endif

         @can('textosadmin-modulo')
         <li class="nav-item">
             <a href="{{ route('textosadmin') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Textos</p>
             </a>
         </li>
         @endcan

     </ul>
 </li>
