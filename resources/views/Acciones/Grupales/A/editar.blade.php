@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.botones')  
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.formulario')
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.botones')  
  {!! Form::close() !!}
@endsection
  

