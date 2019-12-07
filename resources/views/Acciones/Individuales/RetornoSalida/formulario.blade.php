@if ($tarea == 'Nueva' || $tarea == 'Editar')
  @canany(['airetornosalida-crear', 'airetornosalida-editar'])
  <div class="card card-outline card-secondary">
    <div class="card-header">
      <h3 class="card-title"> {{ $tarea }} Retorno de salidas y permisos con acudiente y/o representante legal</h3>
    </div>
    <div class="card-body">
      @if($tarea == 'Nueva')
        {!! Form::open(['route' => ['ai.retornosalida.nuevo', $dato->id], 'class' => 'form-horizontal']) !!}
          {{ Form::hidden('sis_nnaj_id', $dato->id) }}
          @include('Acciones.Individuales.RetornoSalida.campos')
        {!! Form::close() !!}
      @endif
      @if($tarea == 'Editar')
        {!! Form::model($valor, ['route' => ['ai.retornosalida.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
          {{ Form::hidden('sis_nnaj_id', $valor->sis_nnaj_id) }}
          @include('Acciones.Individuales.RetornoSalida.campos')
        {!! Form::close() !!}
      @endif
    </div>
  </div>
  @endcanany
@endif