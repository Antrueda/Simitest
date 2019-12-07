<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        {{-- ventanas --}}
          <div style="display:{{ $todoxxxx['disptabx'] }}">
            <?php 
              $todoxxxx['cabecera'] = [
                ['td' => 'Id'],
                ['td' => 'AREA'],
                ['td' => 'TEMA'],
                ['td' => 'TALLER'],
                ['td' => 'UPI'],
                ['td' => 'FECHA'],
                ['td' => 'ESTADO'],
              ];
          
              $todoxxxx['columnsx'] = [
                  ['data' => 'btns','name'        => 'btns'],
                  ['data' => 'id','name'          => 'fos_datos_basicos.id'],
                  ['data' => 'nombre','name'      => 'areas.nombre'],
                  ['data' => 's_tema','name'      => 'ag_temas.s_tema'],
                  ['data' => 's_taller','name'      => 'ag_tallers.s_taller'],
                  ['data' => 'nombre','name'      => 'sis_dependencias.nombre'],
                  ['data' => 'd_fecha_diligencia','name'  => 'd_fecha_diligencia'],
                  ['data' => 'activo','name'      => 'fos_datos_basicos.activo'],
              ];
              $todoxxxx['tablname']='tbfichas';
              $todoxxxx['urlxxxxx'] = 'api/fos/fichaobservacion'
            ?>

    @component('FichaObservacion.datatable.index', ['todoxxxx'=>$todoxxxx])
    @slot('tableName')
    tbfichas
    @endslot
    @slot('class')
    @endslot
    @endcomponent 

  </div>
  @include('FichaObservacion.perfil.card')
  {{-- ventanas --}}
</div>
<div class="col-md-3">
  {{--  Info Basica --}}
  @include('FichaObservacion.perfil.infoBase')
	  </div>
    </div>
  </div>
</section>