<hr style="border:3px;">
<div class="row">
  <div class="col-md-3">
    {{ Form::label('trata_id', '¿Esta usted bajo tratamiento médico?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="trata_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->trata_id == 227) ? 'checked' : ''; ?> value="227" {{ old("trata_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('trata_id') ? ' is-invalid' : ''}}"
            name="trata_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->trata_id == 228) ? 'checked' : ''; ?> value="228" {{ old("trata_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('trata_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('trata_id') }}
    </div>
    @endif
</div>
<div class="col-md-3">
  {{ Form::label('alergia_id', '¿Alérgico a algún medicamento?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" onchange = "doc(this.value);"
          name="alergia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->alergia_id == 227) ? 'checked' : ''; ?> value="227" {{ old("alergia_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('alergia_id') ? ' is-invalid' : ''}}" onchange = "doc(this.value);"
          name="alergia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->alergia_id == 228) ? 'checked' : ''; ?> value="228" {{ old("alergia_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('alergia_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('alergia_id') }}
  </div>
  @endif
  <div id="cual_div">
    {{ Form::label('coaler_id', '¿Cual?', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['antecede']==null)
        {{ Form::select('coaler_id', $todoxxxx['alergiax'],null, ['class' => $errors->first('coaler_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }} 
    @else
    {{ Form::select('coaler_id', $todoxxxx['alergiax'], $todoxxxx['antecede']->coaler_id, ['class' => $errors->first('coaler_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @endif

    @if($errors->has('coaler_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('coaler_id') }}
    </div>
 @endif
  </div>
</div>
<div class="col-md-3">
  {{ Form::label('sangra_id', '¿Sangra excesivamente al cortarse?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="sangra_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->sangra_id == 227) ? 'checked' : ''; ?> value="227" {{ old("sangra_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('sangra_id') ? ' is-invalid' : ''}}"
          name="sangra_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->sangra_id == 228) ? 'checked' : ''; ?> value="228" {{ old("sangra_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('sangra_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('sangra_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('anemia_id', 'Padece de anemia, leucemia. Hemofilia', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="anemia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->anemia_id == 227) ? 'checked' : ''; ?> value="227" {{ old("anemia_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('anemia_id') ? ' is-invalid' : ''}}"
          name="anemia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->anemia_id == 228) ? 'checked' : ''; ?> value="228" {{ old("anemia_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('anemia_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('anemia_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('gestia_id', '¿Se encuentra en estado de gestación?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="gestia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->gestia_id == 227) ? 'checked' : ''; ?> value="227" {{ old("gestia_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('gestia_id') ? ' is-invalid' : ''}}"
          name="gestia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->gestia_id == 228) ? 'checked' : ''; ?> value="228" {{ old("gestia_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('gestia_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('gestia_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('fuma_id', '¿Fuma?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="fuma_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->fuma_id == 227) ? 'checked' : ''; ?> value="227" {{ old("fuma_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('fuma_id') ? ' is-invalid' : ''}}"
          name="fuma_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->fuma_id == 228) ? 'checked' : ''; ?> value="228" {{ old("fuma_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('fuma_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('fuma_id') }}
  </div>
  @endif
</div>


<div class="col-md-3">
  {{ Form::label('cardio_id', '¿Tiene problemas Cardiacos?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="cardio_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->cardio_id == 227) ? 'checked' : ''; ?> value="227" {{ old("cardio_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('cardio_id') ? ' is-invalid' : ''}}"
          name="cardio_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->cardio_id == 228) ? 'checked' : ''; ?> value="228" {{ old("cardio_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('cardio_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('cardio_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('herpes_id', '¿Sufre de herpes o aftas recurrentes?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="herpes_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->herpes_id == 227) ? 'checked' : ''; ?> value="227" {{ old("herpes_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('herpes_id') ? ' is-invalid' : ''}}"
          name="herpes_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->herpes_id == 228) ? 'checked' : ''; ?> value="228" {{ old("herpes_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('herpes_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('herpes_id') }}
  </div>
  @endif
</div>


<div class="col-md-3">
  {{ Form::label('encia_id', 'Sangrado de encías', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="encia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->encia_id == 227) ? 'checked' : ''; ?> value="227" {{ old("encia_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('encia_id') ? ' is-invalid' : ''}}"
          name="encia_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->encia_id == 228) ? 'checked' : ''; ?> value="228" {{ old("encia_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('encia_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('encia_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('muerde_id', '¿Se muerde uñas o labios?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="muerde_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->muerde_id == 227) ? 'checked' : ''; ?> value="227" {{ old("muerde_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('muerde_id') ? ' is-invalid' : ''}}"
          name="muerde_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->muerde_id == 228) ? 'checked' : ''; ?> value="228" {{ old("muerde_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('muerde_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('muerde_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('enfactu_id', 'Enfermedad actual', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" onchange = "doc2(this.value);"
          name="enfactu_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->enfactu_id == 227) ? 'checked' : ''; ?> value="227" {{ old("enfactu_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('enfactu_id') ? ' is-invalid' : ''}}" onchange = "doc2(this.value);"
          name="enfactu_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->enfactu_id == 228) ? 'checked' : ''; ?> value="228" {{ old("enfactu_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('enfactu_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('enfactu_id') }}
  </div>
  @endif
  <div id="diag_div">
    {{ Form::label('diagnostico', '¿Cual?', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['antecede']==null)
        {{ Form::select('diagnostico[]', $todoxxxx['diagnost'],null, ['class' => $errors->first('diagnostico') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'diagnostico']) }} 
    @else
        {{ Form::select('diagnostico[]', $todoxxxx['diagnost'], $todoxxxx['antecede']->diagnostico, ['class' => $errors->first('diagnostico') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'diagnostico']) }}
    @endif
    @if($errors->has('diagnostico'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('diagnostico') }}
    </div>
 @endif
  </div>
</div>




<div class="col-md-3">
  {{ Form::label('hepati_id', 'Hepatitis', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="hepati_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->hepati_id == 227) ? 'checked' : ''; ?> value="227" {{ old("hepati_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('hepati_id') ? ' is-invalid' : ''}}"
          name="hepati_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->hepati_id == 228) ? 'checked' : ''; ?> value="228" {{ old("hepati_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('hepati_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('hepati_id') }}
  </div>
  @endif
</div>
<div class="col-md-3">
  {{ Form::label('tens_id', 'Tensión arterial alta', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="tens_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->tens_id == 227) ? 'checked' : ''; ?> value="227" {{ old("tens_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('tens_id') ? ' is-invalid' : ''}}"
          name="tens_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->tens_id == 228) ? 'checked' : ''; ?> value="228" {{ old("tens_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('tens_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('tens_id') }}
  </div>
  @endif
</div>
<div class="col-md-3">
  {{ Form::label('vih_id', 'VIH', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="vih_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->vih_id == 227) ? 'checked' : ''; ?> value="227" {{ old("vih_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('vih_id') ? ' is-invalid' : ''}}"
          name="vih_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->vih_id == 228) ? 'checked' : ''; ?> value="228" {{ old("vih_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('vih_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('vih_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('fieb_id', 'Fiebre reumatica', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="fieb_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->fieb_id == 227) ? 'checked' : ''; ?> value="227" {{ old("fieb_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('fieb_id') ? ' is-invalid' : ''}}"
          name="fieb_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->fieb_id == 228) ? 'checked' : ''; ?> value="228" {{ old("fieb_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('fieb_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('fieb_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('asma_id', 'Asma', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="asma_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->asma_id == 227) ? 'checked' : ''; ?> value="227" {{ old("asma_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('asma_id') ? ' is-invalid' : ''}}"
          name="asma_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->asma_id == 228) ? 'checked' : ''; ?> value="228" {{ old("asma_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('asma_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('asma_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('diabe_id', 'Diabetes', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="diabe_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->diabe_id == 227) ? 'checked' : ''; ?> value="227" {{ old("diabe_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('diabe_id') ? ' is-invalid' : ''}}"
          name="diabe_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->diabe_id == 228) ? 'checked' : ''; ?> value="228" {{ old("diabe_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('diabe_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('diabe_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('ulcer_id', 'Ulcera gástrica', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="ulcer_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->ulcer_id == 227) ? 'checked' : ''; ?> value="227" {{ old("ulcer_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('ulcer_id') ? ' is-invalid' : ''}}"
          name="ulcer_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->ulcer_id == 228) ? 'checked' : ''; ?> value="228" {{ old("ulcer_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('ulcer_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('ulcer_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('toma_id', '¿Toma algun Medicamento?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" onchange = "doc1(this.value);"
          name="toma_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->toma_id == 227) ? 'checked' : ''; ?> value="227" {{ old("toma_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('toma_id') ? ' is-invalid' : ''}}" onchange = "doc1(this.value);"
          name="toma_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->toma_id == 228) ? 'checked' : ''; ?> value="228" {{ old("toma_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('toma_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('toma_id') }}
  </div>
  @endif
  <div id="medic_div">
    {{ Form::label('medicamento', '¿Cual?', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['antecede']==null)
    {{ Form::select('medicamento[]', $todoxxxx['medicame'],null, ['class' => $errors->first('medicamento') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'medicamento']) }} 
    @else
        {{ Form::select('medicamento[]', $todoxxxx['medicame'], $todoxxxx['antecede']->medicamento, ['class' => $errors->first('medicamento') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'medicamento']) }}
    @endif
    @if($errors->has('medicamento'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('medicamento') }}
    </div>
 @endif
  </div>
</div>

<div class="col-md-3">
  {{ Form::label('limit_id', 'Limitación al abrir o ruidos articulares', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="limit_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->limit_id == 227) ? 'checked' : ''; ?> value="227" {{ old("limit_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('limit_id') ? ' is-invalid' : ''}}"
          name="limit_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->limit_id == 228) ? 'checked' : ''; ?> value="228" {{ old("limit_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('limit_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('limit_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('apret_id', 'Apretamiento dentario', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="apret_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->apret_id == 227) ? 'checked' : ''; ?> value="227" {{ old("apret_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('apret_id') ? ' is-invalid' : ''}}"
          name="apret_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->apret_id == 228) ? 'checked' : ''; ?> value="228" {{ old("apret_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('apret_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('apret_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('resta_id', 'Restauración protesica', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="resta_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->resta_id == 227) ? 'checked' : ''; ?> value="227" {{ old("resta_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('resta_id') ? ' is-invalid' : ''}}"
          name="resta_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->resta_id == 228) ? 'checked' : ''; ?> value="228" {{ old("resta_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('resta_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('resta_id') }}
  </div>
  @endif
</div>

<div class="col-md-3">
  {{ Form::label('respir_id', 'Respiración bucal', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="respir_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->respir_id == 227) ? 'checked' : ''; ?> value="227" {{ old("respir_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('respir_id') ? ' is-invalid' : ''}}"
          name="respir_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->respir_id == 228) ? 'checked' : ''; ?> value="228" {{ old("respir_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('respir_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('respir_id') }}
  </div>
  @endif
</div>


<div class="col-md-3">
  {{ Form::label('pato_id', 'Patología de Tiroides', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="pato_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->pato_id == 227) ? 'checked' : ''; ?> value="227" {{ old("pato_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('pato_id') ? ' is-invalid' : ''}}"
          name="pato_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->pato_id == 228) ? 'checked' : ''; ?> value="228" {{ old("pato_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('pato_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('pato_id') }}
  </div>
  @endif
</div>


<div class="col-md-3">
  {{ Form::label('tuber_id', 'Tuberculosis', ['class' => 'control-label col-form-label-sm']) }}
  <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input"
          name="tuber_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->tuber_id == 227) ? 'checked' : ''; ?> value="227" {{ old("tuber_id") == '227' ? 'checked' : '' }}>SI
      </label>
  </div>
  <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input {{$errors->first('tuber_id') ? ' is-invalid' : ''}}"
          name="tuber_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->tuber_id == 228) ? 'checked' : ''; ?> value="228" {{ old("tuber_id") == '228' ? 'checked' : '' }}>NO
      </label>
  </div>
  @if($errors->has('tuber_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('tuber_id') }}
  </div>
  @endif
</div>









</div>

<hr>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
