@canany([$permisox.'-leer', $permisox.'-crear', $permisox.'-editar'])
<li class="nav-item" readonly><a class="nav-link{{ ($todoxxxx['slotxxxx']==$permisox) ?' active' : '' }}
        text-sm" href="{{ route(!isset($checkxxx->id)?$permisox.'.nuevo':$permisox.'.editar', $todoxxxx['parametr']) }}">
        {{$pestania}}
        @if(isset($checkxxx->id)&& isset($checkxx1) || isset($checkxxx->id)&&isset($checkxx2))
        <span class="fas fa-check text-success" aria-hidden="true"></span>
        @else
        <span class="fas fa-times text-danger" aria-hidden="true"></span>
        @endif
    </a></li>
@endcanany

