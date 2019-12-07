@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('permiso.formulario.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!!Form::model($modeloxx,['route'=>[$rutaxxxx.'.editar',$modeloxx->id],'method'=>'PUT'])!!}
      @include($rutaxxxx.'.formulario.formulario')
    {!!Form::close()!!}
  </div>
</div>

@endsection