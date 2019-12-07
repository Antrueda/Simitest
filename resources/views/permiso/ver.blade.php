@extends('layouts.index')
@section('content')
<div class="card text-left">

  @include('permiso.formulario.titulocav')
  <div class="card-body">
    @include('layouts.components.botones.index')
    <div class="form-row">
      <div class="form-group col-md-6">
        {{ Form::label('name','Nombre Permiso: ') }}
        {{ $role->name }}
      </div>
      <div class="form-group col-md-6">
        {{ Form::label('estado_id','Estado: ') }} 
        {{ $role->estado }}
      </div>
    </div>
    @include('layouts.components.botones.index')
  </div>
</div>

@endsection
