@if ($tarea == 'Nueva' || $tarea == 'Editar')
    @canany(['aisalidamayores-crear', 'aisalidamayores-editar'])
        <div class="card card-outline card-secondary">
            <div class="card-header">
                <h3 class="card-title">{{ $tarea }} salida de Jóvenes Mayorkdkdkdes de Edad</h3>
            </div>
            <div class="card-body">
                @if($tarea == 'Nueva')
                    {!! Form::open(['route' => ['ai.salidamayores.nuevo', $dato->id], 'class' => 'form-horizontal']) !!}
                        {{ Form::hidden('sis_nnaj_id', $dato->id) }}
                        @include('Acciones.Individuales.SalidaMayores.campos')
                    {!! Form::close() !!}
                @endif
                @if($tarea == 'Editar')
                    {!! Form::model($valor, ['route' => ['ai.salidamayores.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
                        {{ Form::hidden('sis_nnaj_id', $valor->sis_nnaj_id) }}
                        @include('Acciones.Individuales.SalidaMayores.campos')
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    @endcanany
@endif
