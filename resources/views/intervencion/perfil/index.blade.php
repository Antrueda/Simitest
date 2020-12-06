<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        {{--  Info Basica --}}
        @include('intervencion.perfil.infoBase')
      </div>
      <div class="col-md-9">
        {{-- ventanas --}}
          <div style="display:{{ $todoxxxx['disptabx'] }}">
          <?php
          $todoxxxx['cabecera'] = [
              ['td' => 'Id'],
              ['td' => 'TIPO DE ATENCIÓN'],
              ['td' => 'FECHA'],
              ['td' => 'UPI'],
              ['td' => 'NOMBRE DEL RESPONSABLE'],
              ['td' => 'NOMBRE DEL SEGUNDO RESPONSABLE'],
              
          ];

          $todoxxxx['columnsx'] = [
              ['data' => 'btns', 'name' => 'btns'],
              ['data' => 'id', 'name' => 'is_datos_basicos.id'],
              ['data' => 'tipoxxxx', 'name' => 'tipoaten.nombre'],
              ['data' => 'd_fecha_diligencia', 'name' => 'd_fecha_diligencia'],
              ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
              ['data' => 'name', 'name' => 'users.name'],
              ['data' => 'segundo', 'name' => 'segundo.name as segundo'],
              
          ];
          $todoxxxx['tablname'] = 'tbintervenciones';
          $todoxxxx['urlxxxxx'] = route('is.intervencion.intlista',[$todoxxxx['nnajregi']]);
          ?>

          @component('intervencion.datatable.index', ['todoxxxx'=>$todoxxxx])
          @slot('tableName')
          tbintervenciones
          @endslot
          @slot('class')
          @endslot
          @endcomponent 

        </div>
        @include('intervencion.perfil.card')
        {{-- ventanas --}}
      </div>
 
    </div>
  </div>
</section>