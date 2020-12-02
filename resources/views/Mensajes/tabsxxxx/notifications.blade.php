@extends('layouts.index')
@section('content')
<div class="card text-left">
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
       
            @canany(['alertas-leer', 'alertas-crear', 'alertas-editar', 'alertas-borrar'])
            <li class="nav-item"><a class="nav-link text-sm" href="{{ route('alertas.index') }}">ALERTAS</a></li>
            @endcanany

            @canany(['alertas-leer', 'alertas-crear', 'alertas-editar', 'alertas-borrar'])
            <li class="nav-item"><a class="nav-link text-sm" href="{{ route('mensajes') }}">MENSAJES</a></li>
            @endcanany
        </ul>
    </div>
<div class="card-header">Notificaciones no leidas</div>
  <div class="card-body">
    @if (auth()->user())
    @forelse ($postnotification as $notification)
    <div class="alert alert-default-warning"> 
        <div class="jumbotron">
        Titulo: {{$notification->data['titulo']}}
        
        <br>
        Descripcion: {{$notification->data['descripcion']}}
        <p> {{$notification->created_at->diffForHumans()}} </p>
        <button type="submit" class="mark-as-read btn btn-sm btn-dark" data-id="{{$notification->id}}">Marcar como leido</button>
    </div>
    </div>

    @if($loop->last) 
    <a href="#" id="mark-all">Marcar todos como leido</a>
    @endif 
    @empty
        No hay notificaciones sin leer
    @endforelse
    
    @endif
    <h5 class="card-title"></h5>

  </div>
</div>
@endsection

@section('scripts')
<script>
  function sendMarkRequest(id = null){
    return $.ajax("{{ route('markNotification') }}", {
      method: 'POST',
      data: {
        _token: "{{ csrf_token() }}",
        id
      }
    });
  }
  $(function(){
    $('.mark-as-read').click(function(){
      let request = sendMarkRequest($(this).data('id'));
      request.done(() => {
        $(this).parents('div.alert').remove();
      });
    });
    $('#mark-all').click(function(){
      let request = sendMarkRequest();
      request.done(() => {
        $('div.alert').remove();
      })
    });
  });
</script>
@endsection

    
