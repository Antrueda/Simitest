  <div class="card text-left">
    <div class="card-header">
      <h1 style="text-align: center"><strong>{{ $todoxxxx["tituloxx"] }}</strong> </h1>
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      {!! Form::model($todoxxxx['modeloxx'],[route($todoxxxx["permisox"].'.editarxx',
      $todoxxxx["parametr"]),'method'=>'PUT','id'=>"formulario"
      ,'enctype'=>"multipart/form-data"]) !!}
      <x-pagina.botones :todoxxxx='$todoxxxx'>
      </x-pagina.botones>
      @include($todoxxxx["formular"])
      <x-pagina.botones :todoxxxx='$todoxxxx'>
      </x-pagina.botones>
      {!! Form::close() !!}
    </div>
  </div>