<div class="form-row align-items-end">
  
  <div class="form-group col-md-12">
    {{ Form::label('i_prm_actividad_tl_id', '8.3 ¿Qué actividades realiza en su tiempo libre?', 
    ['class' => 'control-label col-form-label-sm']) }}
    <select id="i_prm_actividad_tl_id" name="i_prm_actividad_tl_id[]" 
      class="form-control form-control-sm" multiple="multiple">
      @foreach ($todoxxxx["activlib"] as $valuexxx => $optionxx)
       <?php $situavux='' ?>
      @foreach ($todoxxxx["activitl"]['activitl'] as $situacx)
          @if($situacx->i_prm_actividad_tl_id==$valuexxx)
          <?php $situavux='selected' ?>
          @endif
      @endforeach
          <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
      @endforeach
    </select>
  </div>
</div>

