 <li class="nav-item has-treeview">
     <a href="#" class="nav-link">
         <i class="nav-icon fas fa-tools"></i>
         <p>
             Talleres
             <i class="fas fa-angle-left right"></i>
         </p>
     </a>

     <ul class="nav nav-treeview">
     @can('siseslug-leer')
         <li class="nav-item">
             <a href="{{ route('siseslug') }}" class="nav-link">
                 <i class="fas fa-check nav-icon"></i>
                 <p>Espacio/Lugar</p>
             </a>
         </li>
         @endcan
        @can('agtema-leer')
        <li class="nav-item">
            <a href="{{ route('ag.tema') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Tema</p>
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
            <a href="{{ route('agcontexto') }}" class="nav-link">
            <i class="fas fa-check nav-icon"></i>
            <p>Contexto Pedagógico</p>
            </a>
        </li>
    @endcan
    @can('agrecurso-leer')
        <li class="nav-item">
            <a href="{{ route('agrecurso') }}" class="nav-link">
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
     </ul>
 </li>
