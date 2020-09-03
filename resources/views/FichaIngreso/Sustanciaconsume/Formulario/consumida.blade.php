<a href="{{route('fi.consumo.nuevo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary" role="button">Volver a Consumo SPA</a>

<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sustancia_id', 'Sustancia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sustancia_id', $todoxxxx["sustanci"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_edad_uso', 'Edad uso por primera vez', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_edad_uso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Edad uso por primera vez', 'min' => '1', 'max' => '28']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_consume_id', 'Ha consumido el último mes?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_consume_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
  </div>

  <a href="{{route('fi.consumo.nuevo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary" 
role="button">Volver a Consumo SPA</a>

<div class="form-group col-md-12">
    <div class="card card-outline card-secondary" >
    <div class="card-header">
        <h3 class="card-title">
          @if($todoxxxx['accionxx']!='Crear')
            {{ Form::label('qMetAntVol', 'Sustancias consumidas', ['class' => 'control-label col-form-label-sm']) }}
            @can('fisustanciaconsume-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.sustanciaconsume.nuevo',$todoxxxx['nnajregi']) }}">
                    Nuevo
                </a>
            @endcan
          @endif
        </h3>
    </div>
    <div class="card-body">
        
      @component('FichaIngreso.consumo.datatable.index', ['todoxxxx'=>$todoxxxx])
        @slot('tableName')
          {{ $todoxxxx['tablname']}}
        @endslot
        @slot('class')
        @endslot
      @endcomponent 
    </div>
  </div>
</div>