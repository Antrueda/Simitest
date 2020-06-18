<div class="form-row align-items-end ">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_lee_id', '4.1 ¿Sabe leer?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_lee_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_escribe_id', '4.2 ¿Sabe escribir?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_escribe_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_operaciones_id', '4.3 ¿Sabe operaciones básicas matemáticas?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_operaciones_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_estudia_id', '4.4 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('jornestu_id', '4.5 ¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('jornestu_id', $todoxxxx["jornestu"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('natuenti_id', '4.6 ¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('natuenti_id', $todoxxxx["natuenti"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_institucion_edu_id', '4.7 Nombre de la institución', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_institucion_edu_id', $todoxxxx["insti_id"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('tiemposinestudio', '4.8 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-4">
        {{ Form::label('i_dias_sin_estudio', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::number('i_dias_sin_estudio', null, ['class' => 'form-control form-control-sm', $todoxxxx['readdiax'], 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('i_meses_sin_estudio', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::number('i_meses_sin_estudio', null, ['class' => 'form-control form-control-sm', $todoxxxx['readmesx'], 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('i_anos_sin_estudio', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::number('i_anos_sin_estudio', null, ['class' => 'form-control form-control-sm', $todoxxxx['readanox'], 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20']) }}
      </div>
    </div>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('nivestud_id', '4.9 ¿Cuál es su último nivel de estudio?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('nivestud_id', $todoxxxx["ulnivest"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('gradapro_id', '4.10 Último grado, modulo o semestre aprobado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('gradapro_id', $todoxxxx["ulgradap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('certnive_id', '4.11 ¿Tiene certificado del último nivel de estudio alcanzado?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('certnive_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_motivo_vinc_id', '4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
    
  <select id="i_prm_motivo_vinc_id" name="i_prm_motivo_vinc_id[]" 
     class="form-control form-control-sm" multiple="multiple">
       @foreach ($todoxxxx["motvincu"] as $valuexxx => $optionxx)
       <?php $situavux='' ?>
       @foreach ($todoxxxx["vinculac"]['vinculac'] as $situacx)
          @if($situacx->i_prm_motivo_vinc_id==$valuexxx)
          <?php $situavux='selected' ?>
          @endif
       @endforeach
          <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
       @endforeach
     </select>
  
  </div>
</div>