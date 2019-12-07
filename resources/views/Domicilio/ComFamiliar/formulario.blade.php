@canany(['csdcomfamiliar-crear', 'csdcomfamiliar-editar'])
  <div class="card card-outline card-secondary">
    <div class="card-header">
      <h3 class="card-title">7. Composición Familiar<h3>
    </div>
    <div class="card-body">
      @include('Domicilio.ComFamiliar.datosFamilia')
      {!! Form::open(['route' => ['CSD.comfamiliar', $dato->id], 'class' => 'form-horizontal', 'name' => 'forma']) !!}
        {{ Form::hidden('csd_id', $dato->id) }}
        @include('Domicilio.ComFamiliar.campos')
      {!! Form::close() !!}
      <div class="row mt-3">
        <div class="col-md-12">
          <h6>7.32 Observaciones</h6>
        </div>
      </div>
      @if(!$valoro)
        {!! Form::open(['route' => ['CSD.comfamiliar.observaciones', $dato->id], 'class' => 'form-horizontal']) !!}
          {{ Form::hidden('csd_id', $dato->id) }}
          @include('Domicilio.ComFamiliar.observaciones')
        {!! Form::close() !!}
      @else
        {!! Form::model($valoro, ['route' => ['CSD.comfamiliar.observaciones.editar', $dato->id, $valoro->id], 'method' => 'PUT']) !!}
          {{ Form::hidden('csd_id', $valoro->csd_id) }}
          @include('Domicilio.ComFamiliar.observaciones')
        {!! Form::close() !!}
      @endif 
    </div>
  </div>
@endcanany
