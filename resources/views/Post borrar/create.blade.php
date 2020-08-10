@extends('layouts.index')
@section('content')
<div class="card text-left">
  
  <div class="card-body">
      <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" class="form-control" name="titulo"  placeholder="Titulo de mensaje" id="titulo">
        </div>
        <div class="form-group">
          <label for="">Descripción</label>
          <input type="text" class="form-control" name="descripcion"  placeholder="Mensaje" id="Descripción">
        </div>
        <button class="btn btn-dark" type="submit">Enviar</button>
      </form>
    
    </div>
    

    
</div>
@endsection