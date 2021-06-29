<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                {{-- Info Basica --}}
                @include('intervencion.perfil.infoBase')
            </div>
            <div class="col-md-9">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <h1>{{$todoxxxx['mensajex']}}:
                    {{$todoxxxx['datobasi']->s_primer_nombre}}
                    {{$todoxxxx['datobasi']->s_segundo_nombre}}
                    {{$todoxxxx['datobasi']->s_primer_apellido}}
                    {{$todoxxxx['datobasi']->s_segundo_apellido}}
                </h1>
            </div>
        </div>
</section>
