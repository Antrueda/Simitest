@extends('layouts.index')
@section('content')

<div class="card text-left">
  <div class="card-header">
      <strong>1. Actividades de Tiempo Libre</strong> 
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    {{ Form::open() }}
      @include('fichaIngreso.actividad.formulario.furmulario')
    {{ Form::close() }}
  </div>
  <div class="card-footer text-muted">
    <a href="#" class="btn btn-primary">GUARDAR</a>
  </div>
</div>

@endsection