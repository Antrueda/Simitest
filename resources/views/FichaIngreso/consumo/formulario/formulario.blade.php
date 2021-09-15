<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_consume_spa_id', '¿Consume SPA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_consume_spa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

