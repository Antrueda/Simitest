{{-- -  @can('fos-admin') --}}
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="fas fa-clipboard-list nav-icon"></i>
        <p>
            Administración Intervenciones
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('tipoatencion-modulo')
            <li class="nav-item">
                <a href="{{ route('tipoatencion.index') }}" class="nav-link">
                    <i class="fas fa-list-ul nav-icon"></i>
                    <p>Tipo Atención</p>
                </a>
            </li>
        @endcan
    </ul>
    {{-- @endcan --}}
    {{-- @can('fos-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fostipo') }}" class="nav-link">
                        <i class="fas fa-compass nav-icon"></i>
                        <p>Tipo de Seguimiento</p>
                    </a>
                </li>
            @endcan
            @can('fos-sub-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fossubtipo') }}" class="nav-link">
                    <i class="far fa-compass nav-icon"></i>
                    <p>Sub Tipo de Seguimiento</p>
                    </a>
                </li>
            @endcan --}}
</li>
{{-- @endcan --}}
