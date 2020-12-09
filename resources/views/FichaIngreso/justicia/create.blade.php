@extends('layouts.index')
@section('content')

<div class="card text-left">
  <div class="card-header">
    <strong>10. Justicia Restaurativa</strong>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    {{ Form::open() }}
    @include('FichaIngreso.justicia.formulario.formulario')
    {{ Form::close() }}
  </div>
  <div class="card-footer text-muted">
    <a href="#" class="btn btn-primary">GUARDAR</a>
  </div>
</div>

@endsection