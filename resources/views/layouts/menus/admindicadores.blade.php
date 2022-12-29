@if(in_array(Auth::user()->s_documento,$puedexxx))
@can('indimodu-moduloxx')
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            Indicadores
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">




        <li class="nav-item">
            <a href="{{ route('indimodu') }}" class="nav-link">
                <i class="fas fa-sitemap nav-icon"></i>
                <p>Indicadores</p>
            </a>
        </li>

        @endcan
        @endif
        </ul>