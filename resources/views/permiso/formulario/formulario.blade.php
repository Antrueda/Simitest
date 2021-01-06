@include('permiso.formulario.botones')
<div class="form-row">
  <div class="form-group col-md-6">
    {{ Form::label('name','Nombre Permiso') }}
    {{ Form::text('name', null,['class'=>'form-control']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sisestado_id', 'Estado') }} 
    {{ $estadoxx }}
    {{-- {{ Form::select('sisestado_id', $estadoxx, null, ['class'=>'form-control']) }}  --}}
  </div>
</div>
@include('layouts.components.botones.index')
