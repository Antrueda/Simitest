<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        {{-- ventanas --}}
          <div style="display:{{ $todoxxxx['disptabx'] }}">
          <?php
          $todoxxxx['cabecera'] = [
              ['td' => 'ID'],
              ['td' => 'TIPO DE ATENCIÓN'],
              ['td' => 'FECHA'],
              ['td' => 'UPI'],
              ['td' => 'FUNCIONARIO(A)/CONTRATISTA RESPONSABLE'],
              ['td' => 'FUNCIONARIO(A)/CONTRATISTA SEGUNDO RESPONSABLE'],
              ['td' => 'ESTADO'],

          ];

          $todoxxxx['columnsx'] = [
              ['data' => 'botonexx', 'name' => 'botonexx'],
              ['data' => 'id', 'name' => 'is_datos_basicos.id'],
              ['data' => 'tipoxxxx', 'name' => 'tipoaten.nombre'],
              ['data' => 'd_fecha_diligencia', 'name' => 'd_fecha_diligencia'],
              ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
              ['data' => 'name', 'name' => 'users.name'],
              ['data' => 'segundo', 'name' => 'segundo.name as segundo'],
              ['data' => 's_estado', 'name' => 'is_datos_basicos.sis_esta_id'],

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
