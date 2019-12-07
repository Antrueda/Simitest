<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-hospital"></i>
        <p>
            Salud
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @canany(['mitigacionIndex-leer'])
            <li class="nav-item">
                <a href="{{ route('mitigacion')}}" class="nav-link">
                    <i class="fas fa-user-shield nav-icon"></i>
                    <p>Mitigación</p>
                </a>
            </li>
        @endcanany
    </ul>
</li>