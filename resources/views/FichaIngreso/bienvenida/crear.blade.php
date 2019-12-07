@extends('layouts.index')
@section('content')

<div class="card text-left">
  <div class="card-header">
      <strong>1. Bienvenida</strong> 
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    {{ Form::open() }}
      @include('fichaIngreso.bienvenida.formulario.furmulario')
    {{ Form::close() }}
  </div>
  <div class="card-footer text-muted">
    <a href="#" class="btn btn-primary">Guardar</a>
  </div>
</div>

@endsection