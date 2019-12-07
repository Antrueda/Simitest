@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
    @include($todoxxxx["rutacarp"].'botones.botones')  
    @include($todoxxxx["rutacarp"].'formulario.formulario')
     @include($todoxxxx["rutacarp"].'botones.botones')  
  {!! Form::close() !!}
@endsection
 @section('codigo')
@include($todoxxxx["rutacarp"].'formulario.js')
@endsection

