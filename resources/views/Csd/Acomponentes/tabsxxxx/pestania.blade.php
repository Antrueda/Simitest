

@canany([$permisox.'-leer', $permisox.'-crear', $permisox.'-editar'])
    <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => $pestania]); 
    ?>
    <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']==$permisox) ?' active' : '' }}
    text-sm {{$respuest['disabled']}}" href="{{ $respuest['rutaxxxx'] }}">{{$tituloxx}}
            <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
        </a>
    </li>
@endcanany
