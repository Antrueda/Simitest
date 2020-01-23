@slot('dependencias')  {{--slot dependencias --}}
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
@endslot  {{--fin slot dependencias --}}