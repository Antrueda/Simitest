<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Antecedentes Institucionales
            @can('fiantecedentes-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.redantecedentes.nuevo',$todoxxxx['nnajregi']) }}">
                    Nuevo
                </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        <?php 
        
    $todoxxxx['cabecera'] = [
      ['td' => 'Id'],
      ['td' => 'ENTIDAD'],
      ['td' => 'SERVICIOS O BENEFICIOS RECIBIDOS'],
      ['td' => 'TIEMPO'],
      ['td' =>'TIPO TIEMPO'],
      ['td' => 'AÑO'],
      ['td' => 'ESTADO'],
      
    ];
    $todoxxxx['columnsx'] = [
      ['data' => 'btns','name' => 'btns'],
      ['data' => 'id','name' => 'fi_red_apoyo_antecedentes.id'],
      ['data' => 'nombre','name' => 'sis_entidads.nombre'],
      ['data' => 's_servicio','name' => 's_servicio'],
      ['data' => 'i_tiempo','name' => 'fi_red_apoyo_antecedentes.i_tiempo'],
      ['data' => 'tipotiem','name' => 'tiempo.nombre as tipotiem'],
      ['data' => 'anioxxxx','name' => 'anio.nombre as anioxxxx'],
      ['data' => 'activo','name' => 'fi_red_apoyo_antecedentes.activo'],
    ];
    

        ?>
        @canany(['fiantecedentes-leer','fiantecedentes-crear','fiantecedentes-editar','fiantecedentes-borrar'])
            <div class="table-responsive">
                <table id="tbantecedentes" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">Acciones</th>
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

<div class="card card-outline card-secondary">
    <?php 
    $todoxxxx['cabecera'] = [
      ['td' => 'Id'],
	  ['td' => 'TIPO DE RED'],
      ['td' => 'NOMBRE PERSONA/INSTITUCIÓN'],
      ['td' => 'SERVICIOS O BENEFICIOS'],
      ['td' => 'TELÉFONOS'],
      ['td' => 'DIRECCIÓN'],
      ['td' => 'ESTADO'],
    ];
    ?>
    <div class="card-header">
        <h3 class="card-title">
            Redes de Apoyo Actuales
            @can('firedactual-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.redactual.nuevo',$todoxxxx['nnajregi']) }}">
                    Nuevo
                </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        @canany(['firedactual-leer','firedactual-crear','firedactual-editar','firedactual-borrar'])
            <div class="table-responsive">
                <table id="tbactuales" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="70">Acciones</th>
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
<?php  $todoxxxx['tablname']='tbantecedentes';
    $todoxxxx['urlxxxxx'] = 'api/fi/firedapoyoantecedente'?>
@include('FichaIngreso.redapoyo.formulario.jsredes')
<?php 
    $todoxxxx['columnsx'] = [
        ['data' => 'btns','name'        => 'btns'],
        ['data' => 'id','name'          => 'fi_red_apoyo_actuals.id'],
		['data' => 'redxxxxx','name'      => 'red.nombre'],
        ['data' => 's_nombre_persona','name'      => 's_nombre_persona'],
        ['data' => 's_servicio','name'  => 's_servicio'],
		['data' => 's_telefono','name'  => 's_telefono'],
		['data' => 's_direccion','name'  => 's_direccion'],
        ['data' => 'activo','name'      => 'fi_red_apoyo_actuals.activo'],
    ];
    $todoxxxx['tablname']='tbactuales';
    $todoxxxx['urlxxxxx'] = 'api/fi/firedapoyoactual'
?>
@include('FichaIngreso.redapoyo.formulario.jsredes')
@endsection