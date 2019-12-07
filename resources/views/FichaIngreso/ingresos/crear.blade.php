@extends('layouts.index')
@section('content')

<div class="card text-left">
  <div class="card-header">
      <strong>7. Generación de Ingresos</strong> 
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    {{ Form::open() }}
      @include('fichaIngreso.ingresos.formulario.formulario')
    {{ Form::close() }}
  </div>
  <div class="card-footer text-muted">
    <a href="#" class="btn btn-primary">Guardar</a>
  </div>
</div>

@endsection