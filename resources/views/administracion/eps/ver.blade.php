@extends('layouts.index')
@section('content')
  {!! Form::model($todoxxxx['modeloxx']) !!}
    @include($todoxxxx["rutacarp"].'botones.botones')
    @include($todoxxxx["rutacarp"].'formulario.formulario')
    @if($todoxxxx["accionxx"] == 'Ver')
    @can('indicador-borrar')
      {!! Form::open(['route' => ['eps.borrar', $todoxxxx["modeloxx"]->id], 'method' => 'DELETE']) !!}
        @if($todoxxxx["modeloxx"]->activo == 1)
          <button class="btn btn-danger">Inactivar</button>
        @else
          <button class="btn btn-success">Activar</button>
        @endif
      {!! Form::close() !!}
    @endcan
  @endif
     @include($todoxxxx["rutacarp"].'botones.botones')
  {!! Form::close() !!}
@endsection






