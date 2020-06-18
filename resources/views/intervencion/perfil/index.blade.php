<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        {{-- ventanas --}}
        <div style="display:{{ $todoxxxx['disptabx'] }}">
          <?php
          $todoxxxx['cabecera'] = [
              ['td' => 'Id'],
              ['td' => 'TIPO DE ATENCIÓN'],
              ['td' => 'FECHA'],
              ['td' => 'UPI'],
              ['td' => 'RESPONSABLE'],
              ['td' => 'ESTADO'],
          ];

          $todoxxxx['columnsx'] = [
              ['data' => 'btns', 'name' => 'btns'],
              ['data' => 'id', 'name' => 'is_datos_basicos.id'],
              ['data' => 'tipoxxxx', 'name' => 'tipoaten.nombre'],
              ['data' => 'd_fecha_diligencia', 'name' => 'd_fecha_diligencia'],
              ['data' => 'nombre', 'name' => 'sis_dependens.nombre'],
              ['data' => 's_primer_nombre', 'name' => 'users.s_primer_nombre'],
              ['data' => 'sis_esta_id', 'name' => 'is_datos_basicos.sis_esta_id'],
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
      <div class="col-md-3">
        {{--  Info Basica --}}
        @include('intervencion.perfil.infoBase')
      </div>
    </div>
  </div>
</section>