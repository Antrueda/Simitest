@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('FichaObservacion.formulario.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    {!!Form::open(['route'=>[$todoxxxx["routxxxx"].'.crear',$todoxxxx["nnajregi"]]])!!}
    @method('POST')
     @include($todoxxxx["carpetax"].'.formulario.botones')  
    @include($todoxxxx["carpetax"].'.formulario.formulario')
     @include($todoxxxx["carpetax"].'.formulario.botones')  
    {!!Form::close()!!}
  </div>
</div> 
@endsection
 @section('codigo')
@include('FichaObservacion.formulario.js')
@endsection