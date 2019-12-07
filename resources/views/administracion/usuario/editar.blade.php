@extends('layouts.index')

@section('content') 
 @if(isset($todoxxxx['password']))  
  {!!Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.password',$todoxxxx['modeloxx']->id],'method'=>'PUT'])!!}
 @else
{!!Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],'method'=>'PUT'])!!}

  @endif 
  @component($todoxxxx['rutacarp'].'perfil.index',['todoxxxx'=>$todoxxxx])
    @slot('datosBasicos')
      @include($todoxxxx['rutacarp'].'botones.botones')
      @if(isset($todoxxxx['password'])) 
        @include($todoxxxx['rutacarp'].'formulario.password')
      @else
        @include($todoxxxx['rutacarp'].'formulario.formulario')
      @endif
      
      @include($todoxxxx['rutacarp'].'botones.botones')
    @endslot
    @if(!isset($todoxxxx['password']))
  @slot('dependencias')
      {{ Form::button('Agregar Dependencias', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addDependencia', 'data-toggle' => "modal"]) }}
      @component('bootstrap::modal')
        @slot('id')
          addDependencia
        @endslot
        @slot('class')         
        @endslot
        @slot('title')
          Agregar Dependencias
        @endslot
        <div class="form-group">
          <ul class="list-unstyled" id="listdepe">
            @foreach($todoxxxx['dependen'] as $fdepende)
            <li>
              <label>
                {{Form::checkbox('dependen[]',$fdepende->id,null,['class' => 'dependen'])}}
                {{$fdepende->nombre}}
              </label>
            </li>
            @endforeach
          </ul>
        </div>
        
        @slot('footer')
          {{-- {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }} --}}
        @endslot
      @endcomponent
    <div class="container">        
        <div class="row justify-content-center">
          <table id="tdepende" class="table table-bordered table-striped table-hover table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DEPENDENCIA</th>
                    <th style="width: 200px">Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>DEPENDENCIA</th>
                    <th></th>
                </tr>
            </tfoot>
          </table>
        </div>
      </div>
  @endslot
  @slot('roles')
      {{ Form::button('Agregar Rol', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addRol', 'data-toggle' => "modal"]) }}
      @component('bootstrap::modal')
        @slot('id')
          addRol
        @endslot
        @slot('class')
          
        @endslot
        @slot('title')
          Agregar roles
        @endslot
        <div class="form-group">
          <ul class="list-unstyled" id="listrole">
            @foreach($todoxxxx['rolesxxx'] as $rolexxxx)
            <li>
              <label>
                {{Form::checkbox('rolesxxx[]',$rolexxxx->id,null,['class' => 'rolesxxx'])}}
                {{$rolexxxx->name}}
              </label>
            </li>
            @endforeach
          </ul>
        </div>
        
        @slot('footer')
          {{-- {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }} --}}
        @endslot
      @endcomponent
    
      <div class="container">        
        <div class="row justify-content-center">
          <table id="example" class="table table-bordered table-striped table-hover table-sm" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>ROL</th>
                <th style="width: 200px">Acciones</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>ROL</th>
                <th></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>    
  @endslot
  @endif
  @endcomponent
 
{!!Form::close()!!}
  

@endsection
