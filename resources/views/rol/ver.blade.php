@extends('layouts.index')
@section('content')
<div class="card text-left">

  @include('rol.formulario.titulocav')
  <div class="card-body">
    @include('layouts.components.botones.index')
    <div class="form-row">
      <div class="form-group col-md-6">
        {{ Form::label('name','Nombre Rol: ') }}
        {{ $role->name }}
      </div>
      <div class="form-group col-md-6">
        {{ Form::label('estado_id','Estado: ') }} 
        {{ $role->estado }}
      </div>
    </div>
    <hr>
    <h3>Lista de permisos</h3>
    <div class="form-group">
      <ul class="list-unstyled">
        @foreach($role->permissions as $permission)
        <li>
          <label>
            {{ $permission->name }}
          </label>
        </li>
        @endforeach
      </ul>
    </div>
    @include('layouts.components.botones.index')
  </div>
</div>

@endsection
