@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('rol.formulario.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!!Form::model($role,['route'=>[$rutaxxxx.'.editar',$role->id],'method'=>'PUT'])!!}
      @include($rutaxxxx.'.formulario.formulario')
    {!!Form::close()!!}
  </div>
</div>

@endsection