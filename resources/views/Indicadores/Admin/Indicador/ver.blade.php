@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx']) !!}
    @include('Indicadores.Admin.Indicador.formulario.botones')  
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.formulario')
    @if($todoxxxx["accionxx"] == 'Ver')
    @can('indicador-borrar')
      {!! Form::open(['route' => ['in.indicador.borrar', $todoxxxx["modeloxx"]->id], 'method' => 'DELETE']) !!}
        @if($todoxxxx["modeloxx"]->activo == 'ACTIVO')
          <button class="btn btn-danger">Inactivar</button>
        @else
          <button class="btn btn-success">Activar</button>
        @endif
      {!! Form::close() !!}
    @endcan
  @endif
    @include('Indicadores.Admin.Indicador.formulario.botones')  
  {!! Form::close() !!}
@endsection






