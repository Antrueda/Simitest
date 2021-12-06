<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-globe-americas"></i>
        <p>
            Territorio
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @canany(['fidatbas-leer'])

        <li class="nav-item">
            <a href="{{ route('fidatbas')}}" class="nav-link">
                <i class="nav-icon fas fa-user-plus"></i>
                <p>Ficha de Ingreso</p>
            </a>
        </li>

        @endcanany
        @can('cargdocu-modulo')
         <li class="nav-item">
             <a href="{{ route('cargdocu') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Documentación del beneficiario</p>
             </a>
         </li>
         @endcan

         @can('actamodu-moduloxx')
         <li class="nav-item">
            <a href="{{ route('actaencu') }}" class="nav-link">
                <i class="fas fa-address-card nav-icon"></i>
                <p>Acta de Encuentro</p>
            </a>
        </li>
        @endcan

       
    </ul>
</li>
