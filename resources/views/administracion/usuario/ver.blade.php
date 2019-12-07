@extends('layouts.index')

@section('content')
  {!!Form::model($modeloxx)!!}
  @component('layouts.components.perfil.index',['modeloxx'=>$modeloxx])
    @slot('datosBasicos')
      @include('layouts.components.botones.index')
      @include('administracion.usuario.formulario.formulario')
      @include('layouts.components.botones.index')
    @endslot
  @slot('dependencias')
    
    {{ Form::button('Agregar Dependencia', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addDependencia', 'data-toggle' => "modal"]) }}
    @component('bootstrap::modal')
      @slot('id')
        addDependencia
      @endslot
      @slot('title')
        Agregar una dependencia
      @endslot
      {{-- @include('administracion.dependencia.formulario.formulario') --}}
      @slot('footer')
        {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
      @endslot
    @endcomponent

  @endslot
  @slot('roles')
    @include('layouts.components.botones.index')
      <div class="form-group">
        <ul class="list-unstyled">
          @foreach($rolesxxx as $rolexxxx)
          <li>
            <label>
              {{Form::checkbox('permissions[]',$rolexxxx->id,null)}}
              {{ $rolexxxx->name }}
            </label>
          </li>
          @endforeach
        </ul>
      </div>
    @include('layouts.components.botones.index')
  @endslot
  @endcomponent
{!!Form::close()!!}
@endsection
