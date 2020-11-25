@if(!isset($todoxxxx['actualiz']))

<div class="card card-outline card-secondary">
<div class="card-header">
<h3 class="card-title">
    Pregunta Respuestas
</h3>
</div>
<div class="card-body">
@canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
    <div class="table-responsive">
        <table id="{{ $tableName }}" class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr class="text-center">
                    <th width="150">Acciones</th>
                    @foreach( $todoxxxx['cabecera'] as $cabecera )
                        <th>{{  $cabecera['td'] }}</th>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
@endcanany
</div>
</div>
@else
<div class="card card-outline card-secondary">
        
    <div class="card-header">
            <h3 class="card-title">
                FUNCIONARIOS Y/O CONTRATISTAS QUE REALIZAN LA ACTIVIDAD/TALLER  
                <a class="btn btn-sm btn-primary" href="{{ route('respo.nuevo', $todoxxxx['modeloxx']->id) }}">
                    Agregar Funcionario</a>
            </h3>
        </div>
        <div class="card-body">
            @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
                <div class="table-responsive">
                    <table id="{{ $tableName }}" class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr class="text-center">
                                <th width="150">Acciones</th>
                                @foreach( $todoxxxx['cabeceag'] as $cabecera )
                                    <th>{{  $cabecera['td'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            @endcanany
        </div>
        </div>
        {{-- @section('codigo')
        @include('Acciones.Grupales.Agactividad.Datatable.js')
        @endsection --}}

<div class="card card-outline card-secondary">
        <div class="card-header">
                <h3 class="card-title">
                    Participantes de la actividad y/o taller.
                    <a class="btn btn-sm btn-primary" href="{{ route('ag.acti.actividad.editar', $todoxxxx['modeloxx']->id) }}">
                        Nuevo Participante</a>
                </h3>
                
            </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                    {{ Form::label('asistentess', Tr::getTitulo(15,1), ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('asistentess', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                </div>
            @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
                <div class="table-responsive">
                    <table id="asistentes" class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr class="text-center">
                                <th width="150">Acciones</th>
                                @foreach( $todoxxxx['cabeceas'] as $cabecera )
                                    <th>{{  $cabecera['td'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            @endcanany
        </div>
    </div>
    {{-- @section('codigo')
            @include('Acciones.Grupales.Agactividad.Datatable.js')
        @endsection --}}
       
<div class="card card-outline card-secondary">
        <div class="card-header">
                <h3 class="card-title">
                    Relación de recursos a emplear
                    <a class="btn btn-sm btn-primary" href="{{ route('ag.acti.actividad.editar', $todoxxxx['modeloxx']->id) }}">
                        Nuevo Recurso</a>
                </h3>
            </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        {{ Form::label('i_cantidad', Tr::getTitulo(17,1), ['class' => 'control-label col-form-label-sm']) }}
                        {{ Form::number('i_cantidad', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                        </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('relacionn', Tr::getTitulo(16,1), ['class' => 'control-label col-form-label-sm']) }}
                        {{ Form::text('relacionn', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                </div>
            @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
                <div class="table-responsive">
                    <table id="relacion" class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr class="text-center">
                                <th width="150">Acciones</th>
                                @foreach( $todoxxxx['cabecere'] as $cabecera )
                                    <th>{{  $cabecera['td'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                    </table>
                </div>
            @endcanany
        </div>
    </div>
@endif
{{-- @section('codigo')
@include('Acciones.Grupales.Agactividad.Datatable.js')
@endsection --}}