@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
    @include('Indicadores.Admin.Indicador.formulario.botones')  
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.formulario')
    @include('Indicadores.Admin.Indicador.formulario.botones')  
  {!! Form::close() !!}
@endsection
  

