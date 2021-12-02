<section class="content">
    <div class="container-fluid">
        <div class="row">
            @if(isset($todoxxxx["conperfi"]))
            @include($todoxxxx["rutacomp"].'tabsxxxx.conperfil')
            @else
            @include($todoxxxx["rutacomp"].'tabsxxxx.sinperfil')
            @endif
        </div>
    </div>
</section>

@endsection
