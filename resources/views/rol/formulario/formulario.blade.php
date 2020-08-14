@include('layouts.components.botones.index')
<div class="form-row">

  <div class="form-group col-md-6">
    {{ Form::label('name','Nombre Rol') }}
    {{ Form::text('name', null,['class'=>'form-control']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('estado','Estado') }}
    {{ $estadoxx }}
    </div>
  </div>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="row">


    @foreach($apermiso as $permission)
    <div class="col-md-3">

      <label>
        {{ Form::checkbox('permissions[]',$permission->id,null) }}
        {{ $permission->descripcion }}
      </label>

    </div>
    @endforeach


</div>
@include('layouts.components.botones.index')
