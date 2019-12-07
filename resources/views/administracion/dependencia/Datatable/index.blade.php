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
@section('codigo')
@include('administracion.dependencia.Datatable.js')
@endsection
@else

<div class="card card-outline card-secondary">
        
    <div class="card-header">
            <h3 class="card-title">
                Servicios de la dependencia 
            </h3>
        </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                    {{ Form::label('sisservicio', 'Buscar servicio', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('sisservicio', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
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
        @include('administracion.dependencia.Datatable.js')
        @endsection

<div class="card card-outline card-secondary">
        <div class="card-header">
                <h3 class="card-title">
                    Personal de la dependencia
                </h3>
            </div>
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        {{ Form::label('personal', 'Buscar usuario', ['class' => 'control-label col-form-label-sm']) }}
                        {{ Form::text('personal', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('i_prm_condicional_id', 'Responsable de la unidad?', ['class' => 'control-label col-form-label-sm']) }}
                        {{ Form::select('i_prm_condicional_id', $todoxxxx["responsa"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
                    </div>
                </div>
            @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
                <div class="table-responsive">
                    <table id="personals" class="table table-bordered table-striped table-hover table-sm">
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
    @include('administracion.dependencia.Datatable.js')
        @endsection
       
@endif
