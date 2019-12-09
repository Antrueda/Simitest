@if ($tarea == 'Nueva' || $tarea == 'Editar')
  @canany(['aievasion-crear', 'aievasion-editar'])
    <div class="card card-outline card-secondary">
      <div class="card-header">
        <h3 class="card-title"> {{ $tarea }} Reporte de Evasión</h3>
      </div>
      <div class="card-body">
        @if($tarea == 'Nueva')
          {!! Form::open(['route' => ['ai.evasion.nuevo', $dato->id], 'class' => 'form-horizontal', 'name' => 'forma']) !!}
            {{ Form::hidden('sis_nnaj_id', $dato->id) }}
            @include('Acciones.Individuales.Evasion.campos')
          {!! Form::close() !!}
        @endif
        @if($tarea == 'Editar')
          {!! Form::model($valor, ['route' => ['ai.evasion.editar', $dato->id, $valor->id], 'method' => 'PUT', 'name' => 'forma']) !!}
            {{ Form::hidden('sis_nnaj_id', $valor->sis_nnaj_id) }}
            @include('Acciones.Individuales.Evasion.campos')
          {!! Form::close() !!}
        @endif
      </div>
    </div>
  @endcanany
@endif