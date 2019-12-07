@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx']) !!}
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.botones')  
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.formulario')
    @if($todoxxxx["accionxx"] == 'Ver')
    @can('indicador-borrar')
      {!! Form::open(['route' => ['li.lineabase.borrar', $todoxxxx["modeloxx"]->id], 'method' => 'DELETE']) !!}
        @if($todoxxxx["modeloxx"]->activo == 1)
          <button class="btn btn-danger">Inactivar</button>
        @else
          <button class="btn btn-success">Activar</button>
        @endif
      {!! Form::close() !!}
    @endcan
  @endif
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.botones')  
  {!! Form::close() !!}
@endsection






