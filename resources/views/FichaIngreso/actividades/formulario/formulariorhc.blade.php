<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_horas_permanencia_calle', '8.1 ¿Cuánto tiempo al día permanece en la calle?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('i_horas_permanencia_calle', null, ['class' => $errors->first('i_horas_permanencia_calle') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Horas', 'min' => '1', 'max' => '24']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_dias_permanencia_calle', '8.2 ¿Cuántos días a la semana?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('i_dias_permanencia_calle', null, ['class' => $errors->first('i_dias_permanencia_calle') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días', 'min' => '1', 'max' => '7']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_actividad_tl_id', '8.3 ¿Qué actividades realiza en su tiempo libre?', ['class' => 'control-label col-form-label-sm']) }}
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
<div class="form-row align-items-end">
  
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_pertenece_parche_id', '8.4 ¿Pertecene a algún grupo, parche u organización?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_pertenece_parche_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_nombre_parche', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_nombre_parche', null, ['class' => 'form-control form-control-sm',$todoxxxx['readnomb'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_acceso_recreacion_id', '8.5 ¿Tiene acceso a recreación?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_acceso_recreacion_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_practica_religiosa_id', '8.6 ¿Tiene prácticas religiosas?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_practica_religiosa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_religion_practica_id', '8.7 ¿Cuál religión practica?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_religion_practica_id', $todoxxxx["reliprac"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_sacramentos_hechos_id', '8.8 Indique sacramentos hechos', ['class' => 'control-label col-form-label-sm']) }}
    <select id="i_prm_sacramentos_hechos_id" name="i_prm_sacramentos_hechos_id[]" 
     class="form-control form-control-sm" multiple="multiple">
      @foreach ($todoxxxx["sacramen"] as $valuexxx => $optionxx)
       <?php $situavux='' ?>
      @foreach ($todoxxxx["sacramex"]['sacramex'] as $situacx)
          @if($situacx->i_prm_sacramentos_hechos_id==$valuexxx)
          <?php $situavux='selected' ?>
          @endif
      @endforeach
          <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
      @endforeach
    </select>
  </div>
</div>
