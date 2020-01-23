@extends('layouts.index')

@section('content')
@if(isset($todoxxxx['password']))
  {!!Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.password',$todoxxxx['modeloxx']->id],'method'=>'PUT'])!!}
@else
  {!!Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],'method'=>'PUT'])!!}
@endif

@component($todoxxxx['rutacarp'].'perfil.index',['todoxxxx'=>$todoxxxx])
  @slot('datosBasicos')
    @include($todoxxxx['rutacarp'].'botones.botones')
    @if(isset($todoxxxx['password']))
      @include($todoxxxx['rutacarp'].'formulario.password')
    @else
      @include($todoxxxx['rutacarp'].'formulario.formulario')
    @endif
    @include($todoxxxx['rutacarp'].'botones.botones')
  @endslot
  @if(!isset($todoxxxx['password']))
    @include('administracion.usuario.perfil.areaxxxx')
    @include('administracion.usuario.perfil.dependen')
    @include('administracion.usuario.perfil.rolxxxxx')    
  @endif
@endcomponent

{!!Form::close()!!}


@endsection

@section('scripts')
@include($todoxxxx['rutacarp'].'formulario.js')
@include($todoxxxx['rutacarp'].'js.js')
@endsection 