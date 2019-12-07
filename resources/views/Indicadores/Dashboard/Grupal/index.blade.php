<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        {{--  Info Basica --}}
        @include('layouts.components.Dashboard.'.$todoxxxx['dashboar'].'.infobase)
      </div>
      <div class="col-md-9">
        {{-- ventanas --}}
        @include('layouts.components.Dashboard.'.$todoxxxx['dashboar'].'.card')
        {{-- ventanas --}}
      </div>
    </div>
  </div>
</section>

@endsection