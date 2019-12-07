@if($tarea == 'Nueva' || $tarea == 'Editar')
    @canany(['vma-crear', 'vma-editar'])
        <div class="card card-outline card-secondary">
            <div class="card-header">
                <h3 class="card-title">{{ $tarea }} Valoración Medicina Alternativa</h3>
            </div>
            <div class="card-body">
                @if($tarea == 'Nueva')
                    {!! Form::open(['route' => ['mitigacion.vma.nuevo', $dato->id], 'class' => 'form-horizontal']) !!}
                        {{ Form::hidden('sis_nnaj_id', $dato->id) }}
                        @include('Salud.Mitigacion.Vma.campos')
                    {!! Form::close() !!}
                @endif
                @if($tarea == 'Editar')
                    {!! Form::model($valor, ['route' => ['mitigacion.vma.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
                        {{ Form::hidden('sis_nnaj_id', $valor->sis_nnaj_id) }}
                        @include('Salud.Mitigacion.Vma.campos')
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    @endcanany
@endif