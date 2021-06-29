@extends('layouts.index')
@section('content')

    {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.borrar',$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
      @include('intervencion.formulario.botones')
      @include('intervencion.formulario.destroy')
      @include('intervencion.formulario.botones')
    {!! Form::close() !!}
@endsection
@section('codigo')
@include('intervencion.formulario.js')
@endsection
