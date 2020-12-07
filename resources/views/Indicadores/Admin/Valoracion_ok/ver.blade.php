@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('reutilizar.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!! Form::model($todoxxxx['modeloxx']) !!}
      @include($todoxxxx["rutacarp"].'botones.botones')  
      @include($todoxxxx["rutacarp"].'formulario.formulario')
      @if($todoxxxx["accionxx"] == 'Ver')
        @can('indicador-borrar')
          {!! Form::open(['route' => [$todoxxxx['routxxxx'].'.borrar', $todoxxxx["modeloxx"]->id], 'method' => 'DELETE']) !!}
          
            @if($todoxxxx["modeloxx"]->sis_esta_id == 1)
            <button class="btn btn-danger">INACTIVAR</button>
            @else
              <button class="btn btn-success">ACTIVAR</button>
            @endif
          {!! Form::close() !!}
        @endcan
      @endif
      @include($todoxxxx["rutacarp"].'botones.botones')  
    {!! Form::close() !!}
  </div>
</div>
@endsection






