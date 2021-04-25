  <div class="card text-left">
    <div class="card-header">
      <h1 style="text-align: center"><strong>{{ $todoxxxx["tituloxx"] }}</strong> </h1>
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
     <!-- {{route($todoxxxx["routxxxx"].'.adicionar',$todoxxxx["parametr"])}} -->
     <form method="post" action='{{route($todoxxxx["routxxxx"].".adicionar",$todoxxxx["parametr"])}}'>
     @csrf
      <!-- {{ Form::model($todoxxxx['modeloxx'],[route($todoxxxx["routxxxx"].'.adicionar',$todoxxxx["parametr"]),'method'=>'POST','id'=>"formulario"
      ,'enctype'=>"multipart/form-data"]) }} -->
        @include($todoxxxx["botonesx"])
        @include($todoxxxx["formular"])
        @include($todoxxxx["botonesx"])
      {!! Form::close() !!}
    </div>
  </div>


