@slot('roles') {{--slot roles --}}
    {{ Form::button('Agregar Rol', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addRol', 'data-toggle' => "modal"]) }}
    @component('bootstrap::modal')
    @slot('id')
    addRol
    @endslot
    @slot('class')

    @endslot
    @slot('title')
    Agregar roles
    @endslot
    <div class="form-group">
    <ul class="list-unstyled" id="listrole">
        @foreach($todoxxxx['rolesxxx'] as $rolexxxx)
        <li>
        <label>
            {{Form::checkbox('rolesxxx[]',$rolexxxx->id,null,['class' => 'rolesxxx'])}}
            {{$rolexxxx->name}}
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
        <table id="example" class="table table-bordered table-striped table-hover table-sm" style="width:100%">
        <thead>
            <tr>
            <th>ID</th>
            <th>ROL</th>
            <th style="width: 200px">Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>ID</th>
            <th>ROL</th>
            <th></th>
            </tr>
        </tfoot>
        </table>
    </div>
    </div>
@endslot