<div class="card text-left">
    <div class="card-header">
        <h1 style="text-align: center"><strong>{{ $todoxxxx["tituloxx"] }}</strong> </h1>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        {!! Form::model($todoxxxx['modeloxx']) !!}
        @include($todoxxxx["rutaboto"])
        @include($todoxxxx["rutaform"])
        @include($todoxxxx["rutaboto"])
        {!! Form::close() !!}
    </div>
</div>
