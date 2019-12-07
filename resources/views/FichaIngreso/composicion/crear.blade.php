@extends('layouts.index')
@section('content')

<div class="card text-left">
  <div class="card-header">
      <strong>5. Agregar Familiar</strong> 
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    {{ Form::open() }}
    @include('layouts.components.botones.botones') 
    @include('fichaIngreso.composicion.formulario.formulario')
    @include('layouts.components.botones.botones') 
    {{ Form::close() }}
  </div>
  <div class="card-footer text-muted">
    <a href="#" class="btn btn-primary">Guardar</a>
  </div>
</div>

@endsection