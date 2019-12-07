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
                Responsable de la actividad 
            </h3>
        </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                    {{ Form::label('responsablesf', 'Buscar responsable', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('responsablesf', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                    <div class="form-group col-md-4">
                    {{ Form::label('i_prm_responsable_id', '¿Es responsable?', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('i_prm_responsable_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                </div>
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
        @section('codigo')
        @include('Acciones.Grupales.Agactividad.Datatable.js')
        @endsection

<div class="card card-outline card-secondary">
        <div class="card-header">
                <h3 class="card-title">
                    Asistentes de la actividad
                </h3>
            </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                    {{ Form::label('asistentess', 'Buscar asistente', ['class' => 'control-label col-form-label-sm']) }}
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
    @section('codigo')
            @include('Acciones.Grupales.Agactividad.Datatable.js')
        @endsection
       
<div class="card card-outline card-secondary">
        <div class="card-header">
                <h3 class="card-title">
                    Relación de recursos a emplear
                </h3>
            </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                    {{ Form::label('relacionn', 'Buscar recurso', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('relacionn', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                    <div class="form-group col-md-4">
                    {{ Form::label('i_cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::number('i_cantidad', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
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
@section('codigo')
@include('Acciones.Grupales.Agactividad.Datatable.js')
@endsection