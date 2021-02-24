@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('reutilizar.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
  {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],
  'method'=>'PUT']) !!}
    @include($todoxxxx["rutacarp"].'botones.botones')  
    @include($todoxxxx["rutacarp"].'formulario.formulario')
    @include($todoxxxx["rutacarp"].'botones.botones')  
  {!! Form::close() !!}
</div>
</div>
@endsection
@section('codigo')
  @include($todoxxxx["rutacarp"].'formulario.js')
@endsection

