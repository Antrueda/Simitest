@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx']) !!}
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.botones')  
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.formulario')
    @if($todoxxxx["accionxx"] == 'Ver')
    @can('indicador-borrar')
      {!! Form::open(['route' => ['li.lineabase.borrar', $todoxxxx["modeloxx"]->id], 'method' => 'DELETE']) !!}
        @if($todoxxxx["modeloxx"]->sis_esta_id == 1)
          <button class="btn btn-danger">INACTIVAR</button>
        @else
          <button class="btn btn-success">ACTIVAR</button>
        @endif
      {!! Form::close() !!}
    @endcan
  @endif
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.botones')  
  {!! Form::close() !!}
@endsection






