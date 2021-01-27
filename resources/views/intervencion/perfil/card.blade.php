<div style="display:{{ $todoxxxx['dispform'] }}" >
  <div class="row mt-3">
    <div class="col-md-12">
      <h6>DATOS BÁSICOS</h6>
    </div>
  </div>
  <hr>
  
  <div class="form-row align-items-end">
    <div class="form-group col-md-3">
      {{ Form::label('primnombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('primnombre',  $todoxxxx['datobasi']->s_primer_nombre, ['class' => $errors->first('primnombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('segunnombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('segunnombre',  $todoxxxx['datobasi']->s_segundo_nombre, ['class' => $errors->first('segunnombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('primapellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('primapellido',  $todoxxxx['datobasi']->s_primer_apellido, ['class' => $errors->first('primapellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('segunapellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('segunapellido',  $todoxxxx['datobasi']->s_segundo_apellido, ['class' => $errors->first('segunapellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
  
    <div class="form-group col-md-3">
      {{ Form::label('nombreidentitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('nombreidentitario',  $todoxxxx['datobasi']->nnaj_sexo->s_nombre_identitario, ['class' => $errors->first('nombreidentitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
  
     <div class="form-group col-md-3">
      {{ Form::label('tipodocumento', 'Tipo de Documento', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('tipodocumento',  $todoxxxx['datobasi']->nnaj_docu->tipoDocumento->nombre, ['class' => $errors->first('tipodocumento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
  
     <div class="form-group col-md-3">
      {{ Form::label('nodocumento', 'No. De Documento', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('nodocumento',  $todoxxxx['datobasi']->nnaj_docu->s_documento, ['class' => $errors->first('tipodocumento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    </div>
  </div>
  <hr>


<div class="card" >
<hr>
  <div class="card-body">
      <div class="form-row align-items-end">
          {{ Form::hidden('sis_nnaj_id', $todoxxxx['nnajregi']) }}
        <div class="form-group col-md-4">
          {{ Form::label('sis_depen_id', '"UPI/ÁREA/CONTEXTO"', ['class' => 'control-label']) }}
          {{ Form::select('sis_depen_id', $todoxxxx['dependen'], null, ['class' => $errors->first('sis_depen_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has('sis_depen_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('d_fecha_diligencia', 'Fecha Diligenciamiento', ['class' => 'control-label']) }}
          {{ Form::date('d_fecha_diligencia',  null, ['class' => $errors->first('d_fecha_diligencia') ? 'form-control form-control is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
          @if($errors->has('d_fecha_diligencia'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('d_fecha_diligencia') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_tipo_atencion_id', 'Tipo de Atención', ['class' => 'control-label']) }}
          {{ Form::select('i_prm_tipo_atencion_id', $todoxxxx['tipatenc'], null, ['class' => $errors->first('i_prm_tipo_atencion_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has('i_prm_tipo_atencion_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_tipo_atencion_id') }}
          </div>
          @endif
        </div>
      </div>

      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_area_ajuste_id', 'Áreas de ajuste', ['class' => 'control-label']) }}
          {{ Form::select('i_prm_area_ajuste_id', $todoxxxx['areajust'], null, ['class' => $errors->first('i_prm_area_ajuste_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has('i_prm_area_ajuste_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_area_ajuste_id') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_subarea_ajuste_id', 'Sub-área(s) de ajuste', ['class' => 'control-label']) }}
          {{ Form::select('i_prm_subarea_ajuste_id', $todoxxxx['subareas']['subareax'], null, ['class' => $errors->first('i_prm_subarea_ajuste_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has('i_prm_subarea_ajuste_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_subarea_ajuste_id') }}
          </div>
          @endif
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('s_tema', 'Tema', ['class' => 'control-label']) }}
          {{ Form::text('s_tema', null, ['class' => $errors->first('s_tema') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Tema', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          @if($errors->has('s_tema'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('s_tema') }}
          </div>
          @endif
        </div>
      </div>
      <hr>
      <div class="form-row align-items-end">
        <hr>
        <div class="form-group col-md-12">
          {{ Form::label('s_objetivo_sesion', 'OBJETIVO DE LA SESIÓN', ['class' => 'control-label']) }}
          {{ Form::textarea('s_objetivo_sesion', null, ['class' => $errors->first('s_objetivo_sesion') ? 'form-control form-control is-invalid' : 'form-control form-control-sm','rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_objetivo_sesion', 'class' => 'md-textarea form-control', 'title' => 'Objetivo de la sesión', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorobjetivo">0/4000</p>
          @if($errors->has('s_objetivo_sesion'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('s_objetivo_sesion') }}
          </div>
          @endif
        </div>
        <hr>
        <hr>
        <div class="form-group col-md-12">
          <hr>
          {{ Form::label('s_desarrollo_sesion', 'DESARROLLO DE LA SESIÓN', ['class' => 'control-label']) }}
          {{ Form::textarea('s_desarrollo_sesion', null, ['class' => $errors->first('s_desarrollo_sesion') ? 'form-control form-control is-invalid' : 'form-control form-control-sm','rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_desarrollo_sesion', 'class' => 'md-textarea form-control', 'title' => 'Desarrollo de la sesión', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadordesarrollo">0/4000</p>
          @if($errors->has('s_desarrollo_sesion'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('s_desarrollo_sesion') }}
          </div>
          @endif
        </div>
        <hr>
        <div class="form-group col-md-12">
          <hr>
          {{ Form::label('s_conclusiones_sesion', 'CONCLUSIONES DE LA SESIÓN', ['class' => 'control-label']) }}
          {{ Form::textarea('s_conclusiones_sesion', null, ['class' => $errors->first('s_conclusiones_sesion') ? 'form-control form-control is-invalid' : 'form-control form-control-sm','rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_conclusiones_sesion', 'class' => 'md-textarea form-control', 'title' => 'Conclusiones de la sesión', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorconclusiones">0/4000</p>
          @if($errors->has('s_conclusiones_sesion'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('s_conclusiones_sesion') }}
          </div>
          @endif
        </div>
        <hr>
        <div class="form-group col-md-12">
          <hr>
          {{ Form::label('s_tareas', 'TAREAS', ['class' => 'control-label']) }}
          {{ Form::textarea('s_tareas', null, ['class' => $errors->first('s_tareas') ? 'form-control form-control is-invalid' : 'form-control form-control-sm','rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_tareas', 'class' => 'md-textarea form-control', 'title' => 'Tareas', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadortareas">0/4000</p>
          @if($errors->has('s_tareas'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('s_tareas') }}
          </div>
          @endif
        </div>
        <hr>
      </div>
      <hr>

      <div class="panel panel-default">
        <div class="panel-heading">
            {{ Form::label('tit_areajuste', 'NIVEL DE AVANCE DEL NNAJ', ['class' => 'control-label']) }}
        </div>
        <div class="panel-body">
            <div class="form-row align-items-end">
                <div class="form-group col-md-4">
                  {{ Form::label('tit_areajuste', 'ÁREA DE AJUSTE', ['class' => 'control-label']) }}
                </div>
                <div class="form-group col-md-4">
                  {{ Form::label('tit_subareajuste', 'SUB ÁREA(S) DE AJUSTE', ['class' => 'control-label']) }}
                </div>
                <div class="form-group col-md-4">
                  {{ Form::label('tit_nivelavance', 'NIVEL DE AVANCE', ['class' => 'control-label']) }}
                </div>
            </div>
          <div class="form-row align-items-end">
            <div class="form-group col-md-4">Emocional</div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_subarea_emocional_id', $todoxxxx['subemoci'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_emocional_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
          <div class="form-row align-items-end">
            <div class="form-group col-md-4">Familiar</div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_subarea_familiar_id', $todoxxxx['subfamil'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_familiar_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
          <div class="form-row align-items-end">
            <div class="form-group col-md-4">Sexual</div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_subarea_sexual_id', $todoxxxx['subsexua'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_sexual_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
          <div class="form-row align-items-end">
            <div class="form-group col-md-4">Comportamental</div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_subarea_compor_id', $todoxxxx['subcompo'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_compor_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
          <div class="form-row align-items-end">
            <div class="form-group col-md-4">Social</div>
            <div class="form-group col-md-4">
                {{ Form::select('i_prm_subarea_social_id', $todoxxxx['subsocia'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_social_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
          <div class="form-row align-items-end">
            <div class="form-group col-md-4">Académica</div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_subarea_academ_id', $todoxxxx['subacade'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_academ_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="panel panel-default">
              {{ Form::label('i_prm_area_emocional_id', 'NOVEDAD DE LA SESIÓN', ['class' => 'control-label']) }}
          <div class="panel-body">
              <div class="form-row align-items-end">
                  <div class="form-group col-md-4">
                    {{ Form::label('i_prm_area_emocional_id', 'Área emocional', ['class' => 'control-label']) }}
                    {{ Form::select('i_prm_area_emocional_id', $todoxxxx['subemoci'], null, ['class' => 'form-control form-control-sm']) }}
                  </div>
                  <div class="form-group col-md-4">
                    {{ Form::label('i_prm_area_sexual_id', 'Área sexual', ['class' => 'control-label']) }}
                    {{ Form::select('i_prm_area_sexual_id', $todoxxxx['subsexua'], null, ['class' => 'form-control form-control-sm']) }}
                  </div>
                  <div class="form-group col-md-4">
                    {{ Form::label('i_prm_area_comportam_id', 'Área comportamental', ['class' => 'control-label']) }}
                    {{ Form::select('i_prm_area_comportam_id', $todoxxxx['subcompo'], null, ['class' => 'form-control form-control-sm']) }}
                  </div>
                  <div class="form-group col-md-4">
                    {{ Form::label('i_prm_area_academica_id', 'Área académica', ['class' => 'control-label']) }}
                    {{ Form::select('i_prm_area_academica_id', $todoxxxx['subacade'], null, ['class' => 'form-control form-control-sm']) }}
                  </div>
                  <div class="form-group col-md-4">
                    {{ Form::label('i_prm_area_social_id', 'Área social', ['class' => 'control-label']) }}
                    {{ Form::select('i_prm_area_social_id', $todoxxxx['subsocia'], null, ['class' => 'form-control form-control-sm']) }}
                  </div>
                  <div class="form-group col-md-4">
                    {{ Form::label('i_prm_area_familiar_id', 'Área familiar', ['class' => 'control-label']) }}
                    {{ Form::select('i_prm_area_familiar_id', $todoxxxx['subfamil'], null, ['class' => 'form-control form-control-sm']) }}
                  </div>
                </div>
          </div>
        </div>

      <div class="form-row align-items-end">
        <div class="form-group col-md-12">
          {{ Form::label('s_observaciones', 'OBSERVACIONES', ['class' => 'control-label']) }}
          {{ Form::textarea('s_observaciones', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_observaciones', 'class' => 'md-textarea form-control', 'title' => 'Observaciones', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorobservaciones">0/4000</p>
        </div>
      </div>
      <hr>
      <div class="form-row align-items-end">
        <div class="form-group col-md-6">
          {{ Form::label('d_fecha_proxima', 'Fecha Próxima Sesión', ['class' => 'control-label']) }}
          {{ Form::date('d_fecha_proxima',  null, ['class' => 'form-control form-control-sm', $todoxxxx["readonly"],'min'=>$todoxxxx['hoyxxxxx']]) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('i_prm_area_proxima_id', 'Área de ajuste a trabajar en la próxima sesión', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('i_prm_area_proxima_id', $todoxxxx['arjustpr'], null, ['class' => $errors->first('i_prm_area_proxima_id') ?
                'form-control select2 form-control is-invalid' : 'form-control select2 form-control-sm',
                'id' => 'i_prm_area_proxima_id',
                'data-placeholder' => 'Seleccione las Área de ajuste a trabajar en la próxima sesión','autofocus']) }}
            @if($errors->has('i_prm_area_proxima_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('i_prm_area_proxima_id') }}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
          {{ Form::label('i_primer_responsable', 'Funcionario(A)/Contratista', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('i_primer_responsable', $todoxxxx['usuarios'], null, ['class' => $errors->first('i_primer_responsable') ?
                'form-control select2 form-control is-invalid' : 'form-control select2 form-control-sm',
                'id' => 'i_primer_responsable','autofocus']) }}
            @if($errors->has('i_primer_responsable'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('i_primer_responsable') }}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
          {{ Form::label('i_segundo_responsable', 'Funcionario(A)/Contratista', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('i_segundo_responsable', $todoxxxx['usuarios'], null, ['class' => $errors->first('i_segundo_responsable') ? 'form-control select2 form-control is-invalid' : 'form-control select2 form-control-sm', 'id' => 'i_segundo_responsable','autofocus']) }}
            @if($errors->has('i_segundo_responsable'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('i_segundo_responsable') }}
            </div>
            @endif
        </div>
      </div>
  </div>
</div>


</div>
