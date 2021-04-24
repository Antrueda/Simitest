<ul class="navbar-nav ml-auto">
    @guest
    <li class="nav-item px-2">
        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
    </li>
    @else
    <li class="nav-item dropdown px-2">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('contrase.editar',[Auth::user()->id]) }}">
                Cambiar Contraseña
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Salir
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    @can('ayudline-moduloxx')
    <li class="nav-item dropdown">
        <a class="nav-link"  href="{{ route('ayudline') }}">
            <i class="far fa-question-circle" style="font-size:26px"></i>
            <span class="badge badge-danger navbar-badge"></span>
        </a>
    </li>
    @endcan
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell" style="font-size:26px"></i>
            <span class="badge badge-warning navbar-badge">
                @if (count(auth()->user()->unreadNotifications))
                <span class="badge badge-warning" style="font-size:9px">{{count(auth()->user()->unreadNotifications)}}</span>
                @endif
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-header">Notificaiones no Leidas</div>
            @forelse(auth()->user()->unreadNotifications as $notification)
            <a href="{{ route('alertas.ver', $notification->data['post'])}}" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i>{{$notification->data['titulo']}}
                <span class="ml-3 float-right text-muted text-sm">{{$notification->created_at->diffForHumans()}} </span>
            </a>
            @empty
            <span class="ml-3 pull-right text-muted text-sm">Sin notificaciones por leer</span>
            @endforelse
            <div class="dropdown-divider"></div>
            <div class="dropdown-header">Notificaiones Leidas</div>
            @forelse (auth()->user()->readNotifications as $notification)
            <a href="{{ route('alertas.ver', $notification->data['post'])}}" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> {{$notification->data['descripcion']}}
                <span class="ml-3 pull-right text-muted text-sm">{{$notification->created_at->diffForHumans()}}</span>
            </a>
            @empty
            <span class="ml-3 pull-right text-muted text-sm">Sin notificaciones leidas</span>
            @endforelse

            <div class="dropdown-divider"></div>
            <a href="{{route('markAsRead')}} " class="dropdown-item dropdown-footer">Marcar todas como leidas</a>
        </div>
    </li>
</ul>
@endguest
<!-- Messages Dropdown Menu -->
{{-- @include('layout.nav-bar.right.messages.index') --}}
<!-- End Messages Dropdown Menu -->

<!-- Notifications Dropdown Menu -->
{{-- @include('layout.nav-bar.right.notifications') --}}
<!-- Notifications Dropdown Menu -->

<!-- Controls -->
{{-- <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
      <i class="fas fa-th-large"></i>
    </a>
  </li> --}}
<!-- End Controls -->
