<div class="card text-left">
    <div class="card-header">
      <h1 style="text-align: center"><strong>{{ $todoxxxx["tituloxx"] }}</strong> </h1>
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      {!! Form::model($todoxxxx['modeloxx'],[route($todoxxxx["routxxxx"].'.activarx',
      $todoxxxx["parametr"]),'method'=>'PUT','id'=>"formulario"
      ,'enctype'=>"multipart/form-data"]) !!}
      <x-botones.btnformu :todoxxxx="$todoxxxx">
      </x-botones.btnformu>
        @include($todoxxxx["formular"])
        <x-botones.btnformu :todoxxxx="$todoxxxx">
      </x-botones.btnformu>
      {!! Form::close() !!}
    </div>
  </div>


