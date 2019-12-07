<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_consume_spa_id', '¿Consume SPA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_consume_spa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
@if(isset($todoxxxx['puedexxx']) && isset($todoxxxx['modeloxx']->i_prm_consume_spa_id) && $todoxxxx['modeloxx']->i_prm_consume_spa_id!=228)
{{-- Sustancias consumidas --}}
<div class="form-group col-md-12">
    <div class="card card-outline card-secondary" >
    <div class="card-header">
        <h3 class="card-title">
          {{ Form::label('qMetAntVol', 'Sustancias consumidas', ['class' => 'control-label col-form-label-sm']) }}
          @can('fisustanciaconsume-crear')
              <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.sustanciaconsume.nuevo',$todoxxxx['nnajregi']) }}">
                  Nuevo
              </a>
          @endcan
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
@section('codigo')

@include('FichaIngreso.consumo.datatable.js')
@endsection
@endif