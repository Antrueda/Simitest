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
        {{-- @can('inpreguntas-leer')
         <li class="nav-item">
             <a href="{{ route('pr') }}" class="nav-link">
        <i class="fas fa-check nav-icon"></i>
        <p>Peguntas</p>
        </a>
</li>
@endcan
@can('inlineabase-leer')
<li class="nav-item">
    <a href="{{ route('li') }}" class="nav-link">
        <i class="fas fa-check nav-icon"></i>
        <p>Líneas Base</p>
    </a>
</li>
@endcan
@can('fsoporte-leer')
<li class="nav-item">
    <a href="{{ route('fsoporte') }}" class="nav-link">
        <i class="fas fa-chess-pawn nav-icon"></i>
        <p>Funtes Soporte</p>
    </a>
</li>
@endcan --}}

<li class="nav-item">
    <a href="{{ route('indimodu') }}" class="nav-link">
        <i class="fas fa-sitemap nav-icon"></i>
        <p>Indicadores</p>
    </a>
</li>

@endcan
@endif