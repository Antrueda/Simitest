<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    {{ Form::label('qRazones', '17.1 Razones para ingresar al IDIPRON', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_porque_ingresar', null, ['rows' => 4, 'cols' => 40, 'style' => 'resize:none', 'id' => 's_porque_ingresar', 'class' => 'md-textarea form-control', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    <p id="contadorporqueingresar">0/4000</p>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_documento_anexa_id', '17.2 Copia documentos que anexa', ['class' => 'control-label col-form-label-sm']) }}
    <select id="i_prm_documento_anexa_id" name="i_prm_documento_anexa_id[]" 
     class="form-control form-control-sm" multiple="multiple">
       @foreach ($todoxxxx["docanexa"] as $valuexxx => $optionxx)
       <?php $situavux='' ?>
       @foreach ($todoxxxx["docuanex"]['docuanex'] as $situacx)
          @if($situacx->i_prm_documento_anexa_id==$valuexxx)
          <?php $situavux='selected' ?>
          @endif
       @endforeach
          <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
       @endforeach
     </select>
  </div>
  <div class="form-group col-md-8">
    {{ Form::label('archivo', '', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::file('archivo', ['accept' => 'image/jpeg']) }}
    @if($errors->has('archivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('archivo') }}
        </div>
    @endif
    <br>
    @canany(['firazones-crear', 'firazones-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    @endcanany
    <span>Seleccione archivo de imágen jpg.</span>
</div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-3">
    {{ Form::label('s_persona_diligencia', '17.3 Persona que diligencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_persona_diligencia', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Persona que diligencia',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_documento', 'C.C.', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('s_documento', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Documento']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_cargo_contrato', 'Cargo / No. de contrato', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_cargo_contrato', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Cargo o contrato', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_area_equipo', 'Àrea o equipo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_area_equipo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Área o equipo', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-3">
    {{ Form::label('s_persona_responsable', '17.4 Persona Resposable / Encargado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_persona_responsable', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Nombre Completo del responsable', 
    "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_documento_responsable', 'C.C.', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('s_documento_responsable', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Documento responsable']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_cargo_contrato_reponsable', 'Cargo / No. de contrato', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_cargo_contrato_reponsable', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Cargo del responsable', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_area_equipo_reponsable', 'Àrea o equipo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_area_equipo_reponsable', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Área del responsable', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_estado_ingreso_id', 'Estado de ingreso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_estado_ingreso_id', $todoxxxx["estaingr"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
</div>