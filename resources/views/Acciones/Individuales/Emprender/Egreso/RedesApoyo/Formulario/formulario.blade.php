<hr style="border:3px;">
<div class="row">
    <div class="col-md-6">
        {{ Form::label('presenta_id', '¿Presenta alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input"
                name="presenta_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->presenta_id == 227) ? 'checked' : ''; ?> value="227" {{ old("presenta_id") == '227' ? 'checked' : '' }}>SI
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input {{$errors->first('presenta_id') ? ' is-invalid' : ''}}"
                name="presenta_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->presenta_id == 228) ? 'checked' : ''; ?> value="228" {{ old("presenta_id") == '228' ? 'checked' : '' }}>NO
            </label>
        </div>
        @if($errors->has('presenta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('presenta_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
    {{ Form::label('factor_id', '¿La red de apoyo con la que cuenta actualmente es un factor protector?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="factor_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->factor_id == 227) ? 'checked' : ''; ?> value="227" {{ old("factor_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('factor_id') ? ' is-invalid' : ''}}"
            name="factor_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->factor_id == 228) ? 'checked' : ''; ?> value="228" {{ old("factor_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('factor_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('factor_id') }}
    </div>
    @endif
    </div>

    <div class="col-md-6">
    {{ Form::label('dificulta_id', '¿Presenta dificultades para acceder a alguna red de apoyo? ', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" onchange = "doc(this.value);"
            name="dificulta_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->dificulta_id == 227) ? 'checked' : ''; ?> value="227" {{ old("dificulta_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('dificulta_id') ? ' is-invalid' : ''}}" onchange = "doc(this.value);"
            name="dificulta_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->dificulta_id == 228) ? 'checked' : ''; ?> value="228" {{ old("dificulta_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('dificulta_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('dificulta_id') }}
    </div>
    @endif
    </div>

    <div class="col-md-6" id="whodiv">
      {{ Form::label('aclara_id', '¿Quien? ', ['class' => 'control-label col-form-label-sm']) }}
      <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input"
              name="aclara_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->aclara_id == 227) ? 'checked' : ''; ?> value="227" {{ old("aclara_id") == '227' ? 'checked' : '' }}>NNAJ
          </label>
      </div>
      <div class="form-check disabled">
          <label class="form-check-label">
              <input type="radio" class="form-check-input {{$errors->first('aclara_id') ? ' is-invalid' : ''}}"
              name="aclara_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->aclara_id == 447) ? 'checked' : ''; ?> value="447" {{ old("aclara_id") == '447' ? 'checked' : '' }}>Familia
          </label>
      </div>
      @if($errors->has('aclara_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('aclara_id') }}
      </div>
      @endif
      </div>
    </div>
      <div class="row">

      <div class="col-md-6" id="difidiv">
        {{ Form::label('predifi_id', 'Motivos por el cual se presenta la dificultad:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('predifi_id', $todoxxxx['motivosx'],null, ['class' => $errors->first('predifi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('predifi_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('predifi_id') }}
              </div>
           @endif
      </div>

    <div class="col-md-6">
    {{ Form::label('ruptura_id', '¿Existe la ruptura de redes de apoyo por la exteriorización de su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="ruptura_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->ruptura_id == 227) ? 'checked' : ''; ?> value="227" {{ old("ruptura_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('ruptura_id') ? ' is-invalid' : ''}}"
            name="ruptura_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->ruptura_id == 228) ? 'checked' : ''; ?> value="228" {{ old("ruptura_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('ruptura_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('ruptura_id') }}
    </div>
    @endif
    </div>
    {{-- <div class="col-md-6">
        {{ Form::label('restriserv_id', '¿Ha existido restricción para el acceso a espacios, servicios o redes de apoyo?  ', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" 
                name="restriserv_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->restriserv_id == 227) ? 'checked' : ''; ?> value="227" {{ old("restriserv_id") == '227' ? 'checked' : '' }}>SI
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input {{$errors->first('restriserv_id') ? ' is-invalid' : ''}}" 
                name="restriserv_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->restriserv_id == 228) ? 'checked' : ''; ?> value="228" {{ old("restriserv_id") == '228' ? 'checked' : '' }}>NO
            </label>
        </div>
        @if($errors->has('restriserv_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('restriserv_id') }}
        </div>
        @endif
        </div> --}}
    <div class="col-md-6">
      {{ Form::label('restriespa_id', '¿Ha existido restricción para el acceso a espacios, servicios o redes de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" onchange = "doc1(this.value);"
              name="restriespa_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->restriespa_id == 227) ? 'checked' : ''; ?> value="227" {{ old("restriespa_id") == '227' ? 'checked' : '' }}>SI
          </label>
      </div>
      <div class="form-check disabled">
          <label class="form-check-label">
              <input type="radio" class="form-check-input {{$errors->first('restriespa_id') ? ' is-invalid' : ''}}" onchange = "doc1(this.value);"
              name="restriespa_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->restriespa_id == 228) ? 'checked' : ''; ?> value="228" {{ old("restriespa_id") == '228' ? 'checked' : '' }}>NO
          </label>
      </div>
      @if($errors->has('restriespa_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('restriespa_id') }}
      </div>
      @endif
      </div>

      <div class="col-md-6" id="motivodiv">
        {{ Form::label('motivore_id', 'Motivos de restricción de acceso a espacios, servicio o redes de apoyo:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('motivore_id', $todoxxxx['accesoxx'],null, ['class' => $errors->first('motivore_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('motivore_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('motivore_id') }}
              </div>
           @endif
      </div>

      <div class="col-md-3">
        {{ Form::label('recibe_id', '¿Recibió servicios de alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input"
                name="recibe_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->recibe_id == 227) ? 'checked' : ''; ?> value="227" {{ old("recibe_id") == '227' ? 'checked' : '' }}>SI
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input {{$errors->first('recibe_id') ? ' is-invalid' : ''}}"
                name="recibe_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->recibe_id == 228) ? 'checked' : ''; ?> value="228" {{ old("recibe_id") == '228' ? 'checked' : '' }}>NO
            </label>
        </div>
        @if($errors->has('recibe_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('recibe_id') }}
        </div>
        @endif
        </div>
      


</div>

<hr>
@include($todoxxxx['rutacarp'].'RedesApoyo.Formulario.apoyo')
<hr>
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<hr>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
