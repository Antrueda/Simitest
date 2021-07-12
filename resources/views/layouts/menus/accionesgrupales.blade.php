<li class="nav-item has-treeview">
     <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
        Grupales
        <i class="fas fa-angle-left right"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">

        @can('taccform-modulo')
            <li class="nav-item">
                <a href="{{ route('taccform') }}" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Talleres Educativos y Acciones Formativas</p>
                </a>
            </li>
            @endcan
            @can('fosfichaobservacion-leer')
            <li class="nav-item">
              <a href="{{ route('fosfichaobservacion')}}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Ficha de Observación y/o seguimiento</p>
              </a>
            </li>
            @endcan
            @can('aisalidamayores-leer')
            <li class="nav-item">
              <a href="{{ route('aisalidamayores')}}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Registro De Permisos De Adolescentes Y/O Jóvenes</p>
              </a>
            </li>
            @endcan
            @if(in_array(Auth::user()->s_documento,['17496705','1090412429']))
            @can('imatricula-leer')
            <li class="nav-item">
              <a href="{{ route('imatricula')}}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Inscripción Y Entrega De Matricula</p>
              </a>
            </li>
            @endcan
            @endif

            @if(in_array(Auth::user()->s_documento,['17496705','1090412429']))
            
            @can('traslado-leer')
            <li class="nav-item">
              <a href="{{ route('traslado')}}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Traslados Entre Upis/Egreso O Reasignación De Talleres</p>
              </a>
            </li>
            @endcan
            @endif
            


    </ul>
</li>
