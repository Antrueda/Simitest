<div class="card text-left">
    <div class="card-header">
        <h1 style="text-align: center"><strong>{{ $todoxxxx["tituloxx"] }}</strong> </h1>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        {!! Form::model($todoxxxx['modeloxx'],[route($todoxxxx["routxxxx"].'.borrarxx',
        $todoxxxx["parametr"]),'method'=>'PUT','id'=>"formulario"
        ,'enctype'=>"multipart/form-data"]) !!}
        @include($todoxxxx["rutaboto"])
        @include($todoxxxx["rutacarp"].$todoxxxx["carpetax"].'.Formulario.destroyx')
        @include($todoxxxx["rutaboto"])
        {!! Form::close() !!}
    </div>
</div>
