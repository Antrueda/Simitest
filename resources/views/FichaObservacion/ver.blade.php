@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx']) !!}
    @include('FichaObservacion.formulario.botones')
    @include('FichaObservacion.formulario.formulario')
    @include('FichaObservacion.formulario.botones')
  {!! Form::close() !!}
@endsection