
<div class="row">
  <div class="col-md">
      {{ Form::label('prm_tipo_id', '5.1 Tipo de residencia o lugar donde duerme', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_tipo_id', $todoxxxx["tiporexx"], null, ['class' => $errors->first('prm_tipo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
      @if($errors->has('prm_tipo_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_tipo_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_es_id', '5.2 La residencia es:', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_es_id', $todoxxxx["residees"], null, ['class' => $errors->first('prm_es_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_es_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_es_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_dir_tipo_id', '5.3 Dirección de residencia actual', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_tipo_id',  $todoxxxx["tipodire"], null, ['class' => $errors->first('prm_dir_tipo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_tipo_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_tipo_id') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md">
      {{ Form::label('prm_dir_zona_id', 'Zona', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_zona_id', $todoxxxx["zonadire"] , null, ['class' => $errors->first('prm_dir_zona_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
      @if($errors->has('prm_dir_zona_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_zona_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_dir_via_id', 'Tipo Vía Principal (VP)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_via_id', $todoxxxx["tpviapal"] , null, ['class' => $errors->first('prm_dir_via_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_via_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_via_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('dir_nombre', 'Número/Nombre Vía Principal', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('dir_nombre', null, ['class' => $errors->first('dir_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Via principal', 'maxlength' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('dir_nombre'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('dir_nombre') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md">
      {{ Form::label('prm_dir_alfavp_id', 'Alfabético Vía Principal', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_alfavp_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('prm_dir_alfavp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_alfavp_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_alfavp_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_dir_bis_id', 'BIS', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_bis_id', $todoxxxx["condicio"], null, ['class' => $errors->first('prm_dir_bis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_bis_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_bis_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_dir_alfabis_id', 'Letra BIS', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_alfabis_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('prm_dir_alfabis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_alfabis_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_alfabis_id') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md">
      {{ Form::label('prm_dir_cuadrantevp_id', 'Cuadrante VP', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_cuadrantevp_id', $todoxxxx["cuadrant"], null, ['class' => $errors->first('prm_dir_cuadrantevp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_cuadrantevp_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_cuadrantevp_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('dir_generadora', 'Nº Vía Generadora (VG)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('dir_generadora', null, ['class' => $errors->first('dir_generadora') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número', 'min' => '0', 'max' => '300', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('dir_generadora'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('dir_generadora') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_dir_alfavg_id', 'Alfabético VG', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_alfavg_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('prm_dir_alfavg_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_alfavg_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_alfavg_id') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md">
      {{ Form::label('dir_placa', 'Placa VG', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('dir_placa', null, ['class' => $errors->first('dir_placa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número', 'min' => '0', 'max' => '300', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('dir_placa'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('dir_placa') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_dir_cuadrantevg_id', 'Cuadrante VG', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_dir_cuadrantevg_id', $todoxxxx["cuadrant"], null, ['class' => $errors->first('prm_dir_cuadrantevg_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_dir_cuadrantevg_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_dir_cuadrantevg_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_estrato_id', '5.4 Estrato socioeconómico', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_estrato_id', $todoxxxx["estratox"], null, ['class' => $errors->first('prm_estrato_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_estrato_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_estrato_id') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md">
      {{ Form::label('dir_complemento', '5.5 Complemento', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('dir_complemento', null, ['class' => $errors->first('dir_complemento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Complemento', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('dir_complemento'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('dir_complemento') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('sis_localidad_id', '5.6 Localidad', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_localidad_id',$todoxxxx["localida"], null, ['class' => $errors->first('sis_localidad_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm']) }}
      @if($errors->has('sis_localidad_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('sis_localidad_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('sis_upz_id', '5.7 Nº UPZ - 5.8 Nombre de UPZ', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_upz_id', $todoxxxx["upzxxxxx"], null, ['class' => $errors->first('sis_upz_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm']) }}
      @if($errors->has('sis_upz_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('sis_upz_id') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md-3">
      {{ Form::label('sis_upzbarri_id', '5.9 Barrio', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_upzbarri_id', $todoxxxx["barrioxx"] , null, ['class' => $errors->first('sis_upzbarri_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('sis_upzbarri_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('sis_upzbarri_id') }}
          </div>
      @endif
  </div>
  <div class="col-md-3">
      {{ Form::label('telefono_uno', '5.10 Teléfono fijo', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('telefono_uno', null, ['class' => $errors->first('telefono_uno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'min' => '0', 'maxlength' => '10']) }}
      @if($errors->has('telefono_uno'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('telefono_uno') }}
          </div>
      @endif
  </div>
</div>


<div class="row">
  <div class="col-md">
      {{ Form::label('telefono_dos', '5.11 Celular 1', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('telefono_dos', null, ['class' => $errors->first('telefono_dos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Celular 1', 'min' => '0', 'maxlength' => '10']) }}
      @if($errors->has('telefono_dos'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('telefono_dos') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('telefono_tres', '5.12 Celular 2', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('telefono_tres', null, ['class' => $errors->first('telefono_tres') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Celular 2', 'min' => '0', 'maxlength' => '10']) }}
      @if($errors->has('telefono_tres'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('telefono_tres') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('email', '5.13 E-mail o Facebook', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::email('email', null, ['class' => $errors->first('email') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Email o Facecook', 'maxlength' => '120']) }}
      @if($errors->has('email'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('email') }}
          </div>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('ambientes', '5.14 Condiciones del ambiente y riesgo cerca de la vivienda (para CHC lugar de focalización)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('ambientes[]', $todoxxxx["condambi"] , null, ['class' => $errors->first('ambientes') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'ambientes', 'multiple']) }}
      @if($errors->has('ambientes'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('ambientes') }}
          </div>
      @endif
  </div>

  <div class="col-md">
      {{ Form::label('prm_piso_id', '5.15 Material predominante de los pisos', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_piso_id', $todoxxxx["pisoxxxx"] , null, ['class' => $errors->first('prm_piso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_piso_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_piso_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_muro_id', '5.16 Material de muros de cerramiento exterior', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_muro_id', $todoxxxx["murosxxx"] , null, ['class' => $errors->first('prm_muro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_muro_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_muro_id') }}
          </div>
      @endif
  </div>

  <div class="col-md-12">
    {{ Form::label('Condiciones ambientales', '5.17 Condiciones ambientales y de salubridad de la vivienda', ['class' => 'control-label col-form-label-sm']) }}
    <div class="card card-outline card-secondary">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table-sm table-hover my-12" style="width: 100%">
            <thead class="text-center">
              <th>Ítem</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <tr>
                <th>Higiene y Aseo</th>
                <th>
                  {{ Form::select('prm_higiene_id', $todoxxxx["estadosx"] , null, ['class' => $errors->first('prm_higiene_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                  @if($errors->has('prm_higiene_id'))
                    <div class="invalid-feedback d-block">
                      {{ $errors->first('prm_higiene_id') }}
                    </div>
                  @endif
                </th>
              </tr>
              <tr>
                <th>Ventilación</th>
                <th>
                  {{ Form::select('prm_ventilacion_id', $todoxxxx["estadosx"], null, ['class' => $errors->first('prm_ventilacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                  @if($errors->has('prm_ventilacion_id'))
                  <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_ventilacion_id') }}
                  </div>
                  @endif
                </th>
              </tr>
              <tr>
                <th>Iluminación</th>
                <th>
                  {{ Form::select('prm_iluminacion_id', $todoxxxx["estadosx"], null, ['class' => $errors->first('prm_iluminacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                  @if($errors->has('prm_iluminacion_id'))
                    <div class="invalid-feedback d-block">
                      {{ $errors->first('prm_iluminacion_id') }}
                    </div>
                  @endif
                </th>
              </tr>
              <tr>
                <th>Orden</th>
                <th>
                  {{ Form::select('prm_orden_id', $todoxxxx["estadosx"], null, ['class' => $errors->first('prm_orden_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                  @if($errors->has('prm_orden_id'))
                  <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_orden_id') }}
                  </div>
                  @endif
                </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>  
<div class="row">
  <div class="col-md-12">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
</div>
</div>
<div class="row">
 <div class="col-md">
      {{ Form::label('numerocamas', '5.21 Número de camas', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('numerocamas', null, ['class' => $errors->first('numerocamas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','min'=>'0','max'=>'10']) }}
      @if($errors->has('numerocamas'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('numerocamas') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_hacinam_id', '5.22 Hacinamiento', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_hacinam_id', $todoxxxx["condicio"], null, ['class' => $errors->first('prm_hacinam_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_hacinam_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_hacinam_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('comparte', '5.23 ¿Quiénes comparten cama?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('comparte[]', $todoxxxx["familiax"] , null, ['class' => $errors->first('comparte') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'comparte', 'multiple']) }}
      @if($errors->has('comparte'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('comparte') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    {{ Form::label('observaciones', '5.24 Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'observaciones de la visita social en domicilio', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.charAt(0).toUpperCase()+this.value.slice(1)', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorporqueingresar">0/4000</p>
    @if($errors->has('observaciones'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('observaciones') }}
      </div>
    @endif
  </div>
</div>



