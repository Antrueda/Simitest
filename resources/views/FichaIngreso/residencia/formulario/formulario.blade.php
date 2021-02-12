<div class="form-row align-items-end">
  {{ Form::hidden('tipo_poblacion', $todoxxxx['usuariox']->prm_tipoblaci_id) }}
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_tiene_dormir_id', '3.1 ¿Tiene lugar de residencia en dónde dormir?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tiene_dormir_id', $todoxxxx["condicio"], null, ['class' => $errors->first('i_prm_tiene_dormir_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('i_prm_tiene_dormir_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('i_prm_tiene_dormir_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_tipo_duerme_id', '3.2 Tipo de residencia o lugar donde duerme', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tipo_duerme_id', $todoxxxx["tiporesi"], null, ['class' => $errors->first('i_prm_tipo_duerme_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('i_prm_tipo_duerme_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('i_prm_tipo_duerme_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_tipo_tenencia_id', '3.3 La residencia es:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tipo_tenencia_id', $todoxxxx["residees"], null, ['class' => $errors->first('i_prm_tipo_tenencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('i_prm_tipo_tenencia_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('i_prm_tipo_tenencia_id') }}
      </div>
    @endif
  </div>
</div>
 <fieldset>
  <legend>3.4 Dirección de residencia actual/ dirección de focalización</legend>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tipo_direccion_id', 'Tipo Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_direccion_id', $todoxxxx["tipodire"], null, ['class' => $errors->first('i_prm_tipo_direccion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('i_prm_tipo_direccion_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_tipo_direccion_id') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_zona_direccion_id', 'Zona Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_zona_direccion_id', $todoxxxx["zonadire"], null, ['class' => $errors->first('i_prm_zona_direccion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('i_prm_zona_direccion_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_zona_direccion_id') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tipo_via_id', 'Tipo vía principal (VP)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tipo_via_id', $todoxxxx["tpviapal"] , null, ['class' => $errors->first('i_prm_tipo_via_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('i_prm_tipo_via_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_tipo_via_id') }}
        </div>
      @endif
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('s_nombre_via', 'Número/Nombre Vía principal', ['class' => 'control-label col-form-label-sm'], $todoxxxx['readchcx']) }}
      {{ Form::text('s_nombre_via', null, ['class' => $errors->first('s_nombre_via') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'placeholder' => 'Número/Nombre Vía principal']) }}
      @if($errors->has('s_nombre_via'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('s_nombre_via') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_alfabeto_via_id', 'Alfabeto Via Principal', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_alfabeto_via_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('i_prm_alfabeto_via_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
      @if($errors->has('i_prm_alfabeto_via_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_alfabeto_via_id') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tiene_bis_id', 'Bis', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tiene_bis_id', $todoxxxx["dircondi"], null, ['class' => $errors->first('i_prm_tiene_bis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('i_prm_tiene_bis_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_tiene_bis_id') }}
        </div>
      @endif
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_bis_alfabeto_id', 'Letra Bis', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_bis_alfabeto_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('i_prm_bis_alfabeto_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
      @if($errors->has('i_prm_bis_alfabeto_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_bis_alfabeto_id') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_cuadrante_vp_id', 'Cuadrante VP', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_cuadrante_vp_id', $todoxxxx["cuadrant"], null, ['class' => $errors->first('i_prm_cuadrante_vp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('i_prm_cuadrante_vp_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_cuadrante_vp_id') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_via_generadora', 'No. Vía Generadora (VG)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('i_via_generadora', null, ['class' => $errors->first('i_via_generadora') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Vía Generadora', 'min' => '0', 'max' => '250']) }}
      @if($errors->has('i_via_generadora'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_via_generadora') }}
        </div>
      @endif
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_alfabetico_vg_id', 'Alfabético VG', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_alfabetico_vg_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('i_prm_alfabetico_vg_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
      @if($errors->has('i_prm_alfabetico_vg_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_alfabetico_vg_id') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_placa_vg', 'Placa VG', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('i_placa_vg', null, ['class' => $errors->first('i_placa_vgi_placa_vg') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Placa VG', 'min' => '1', 'max' => '250']) }}
      @if($errors->has('i_placa_vg'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_placa_vg') }}
        </div>
      @endif
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_cuadrante_vg_id', 'Cuadrante VG', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_cuadrante_vg_id', $todoxxxx["cuadrant"], null, ['class' => $errors->first('i_prm_cuadrante_vg_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('i_prm_cuadrante_vg_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_cuadrante_vg_id') }}
        </div>
      @endif
    </div>
  </div>
</fieldset>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_estrato_id', '3.5 Estrato socioeconómico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_estrato_id', $todoxxxx["estratox"], null, ['class' => $errors->first('i_prm_estrato_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('i_prm_estrato_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('i_prm_estrato_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_espacio_parcha_id', '3.6 Espacio donde parcha', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_espacio_parcha_id', $todoxxxx["esparcha"], null, ['class' => $errors->first('i_prm_espacio_parcha_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('i_prm_espacio_parcha_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('i_prm_espacio_parcha_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_nombre_espacio_parcha', '3.6A Nombre del espacio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_nombre_espacio_parcha', null, ['class' => $errors->first('s_nombre_espacio_parcha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('s_nombre_espacio_parcha'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_nombre_espacio_parcha') }}
      </div>
    @endif
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('s_complemento', '3.7 Complemento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_complemento', null, ['class' => $errors->first('s_complemento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('s_complemento'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_complemento') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_localidad_id', '3.8 Localidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_localidad_id', $todoxxxx["localida"], null, ['class' => $errors->first('sis_localidad_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm']) }}
    @if($errors->has('sis_localidad_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('sis_localidad_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_upz_id', '3.9 No UPZ 3.10 Nombre UPZ', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_upz_id', $todoxxxx["upzxxxxx"], null, ['class' => $errors->first('sis_upz_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm','style' => 'text-transform:uppercase;',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    @if($errors->has('sis_upz_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('sis_upz_id') }}
      </div>
    @endif
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('sis_upzbarri_id', '3.11 Barrio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_upzbarri_id', $todoxxxx["barrioxx"], null, ['class' => $errors->first('sis_upzbarri_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('sis_upzbarri_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('sis_upzbarri_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_telefono_uno', '3.12 Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_telefono_uno', null, ['class' => $errors->first('s_telefono_uno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", $todoxxxx['readchcx']]) }}
    @if($errors->has('s_telefono_uno'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_telefono_uno') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_telefono_dos', '3.13 Celular 1', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_telefono_dos', null, ['class' => $errors->first('s_telefono_dos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", $todoxxxx['readchcx']]) }}
    @if($errors->has('s_telefono_dos'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_telefono_dos') }}
      </div>
    @endif
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('s_telefono_tres', '3.14 Celular 2', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_telefono_tres', null, ['class' => $errors->first('s_telefono_tres') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", $todoxxxx['readchcx']]) }}
    @if($errors->has('s_telefono_tres'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_telefono_tres') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_email_facebook', '3.15 E-mail o Facebook', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_email_facebook', null, ['class' => $errors->first('s_email_facebook') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', $todoxxxx['readchcx']]) }}
    @if($errors->has('s_email_facebook'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_email_facebook') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-12">
    {{ Form::label('i_prm_condicion_amb_id', '3.16 Condiciones del ambiente y riesgo cerca de la vivienda / lugar de focalización (Para CHC)', ['class' => 'control-label']) }}
    {{ Form::select('i_prm_condicion_amb_id[]', $todoxxxx['condambi'], null, ['class' => $errors->first('i_prm_condicion_amb_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'i_prm_condicion_amb_id',
    'data-placeholder' => 'Digite el responsable']) }}
    @if($errors->has('i_prm_condicion_amb_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_condicion_amb_id') }}
    </div>
    @endif
  </div>

</div>
