@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('reutilizar.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!!Form::open(['route'=>$todoxxxx["routxxxx"].'.crear'])!!}
    @method('POST')
     @include('layouts.components.botones.botones')  
    @include('FichaIngreso.'.$todoxxxx["carpetax"].'.formulario.formulario')
     @include('layouts.components.botones.botones')  
    {!!Form::close()!!}
  </div>
</div>
@endsection
 @section('codigo')
@include('FichaIngreso.datosbasico.formulario.js')
@endsection