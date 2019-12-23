@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['nnajregi'],$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
    @include('FichaObservacion.formulario.botones')  
    @include('FichaObservacion.formulario.formulario')
    @include('FichaObservacion.formulario.botones')
  {!! Form::close() !!}
@endsection
@section('codigo')
    @include('FichaObservacion.formulario.js')
@endsection