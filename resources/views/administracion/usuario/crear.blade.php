@extends('layouts.index')
@section('content')
<div class="card text-left">
 
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!!Form::open(['route'=>$todoxxxx['rutaxxxx'].'.crear'])!!}
      @method('POST')
      @include($todoxxxx['rutacarp'].'botones.botones')
      @include($todoxxxx['rutacarp'].'formulario.formulario')
      @include($todoxxxx['rutacarp'].'botones.botones')
    {!!Form::close()!!}
  </div>
</div>
@endsection