<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        {{--  Info Basica --}}
        @include($todoxxxx['dashboar'].'.infobase')
      </div>
      <div class="col-md-9">
        {{-- ventanas --}}
        @include($todoxxxx['dashboar'].'.card')
        {{-- ventanas --}}
      </div>
    </div>
  </div>
</section>

@endsection