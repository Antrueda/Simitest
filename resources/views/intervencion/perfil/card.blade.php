<div style="display:{{ $todoxxxx['dispform'] }}" >

<div class="form-group card-footer text-muted text-center">
  @if($todoxxxx['accionxx']!='Ver')
    {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
  @endif
  <a class="btn btn-sm btn-primary" href="{{ route('is.intervencion.lista', $todoxxxx['nnajregi']) }}">Volver</a>
</div>

<div class="card" >
  
  <div class="card-body">
      <div class="form-row align-items-end">
          {{ Form::hidden('sis_nnaj_id', $todoxxxx['nnajregi']) }}
        <div class="form-group col-md-4">
          {{ Form::label('sis_dependen_id', 'UPI', ['class' => 'control-label']) }}
		      {{ Form::select('sis_dependen_id', $todoxxxx['dependen'], null, ['class' => 'form-control form-control-sm']) }}
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('d_fecha_diligencia', 'Fecha Diligenciamiento', ['class' => 'control-label']) }}
          {{ Form::date('d_fecha_diligencia', null, ['class' => 'form-control form-control-sm',$todoxxxx["readonly"]]) }}
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_tipo_atencion_id', 'Tipo de Atención', ['class' => 'control-label']) }}
          {{ Form::select('i_prm_tipo_atencion_id', $todoxxxx['tipatenc'], null, ['class' => 'form-control form-control-sm']) }}
        </div>
      </div>

      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_area_ajuste_id', 'Áreas de ajuste', ['class' => 'control-label']) }}
          {{ Form::select('i_prm_area_ajuste_id', $todoxxxx['areajust'], null, ['class' => 'form-control form-control-sm']) }}
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_subarea_ajuste_id', 'Sub-área(s) de ajuste', ['class' => 'control-label']) }}
          {{ Form::select('i_prm_subarea_ajuste_id', $todoxxxx['subareas']['subareax'], null, ['class' => 'form-control form-control-sm']) }}
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('s_tema', 'Tema', ['class' => 'control-label']) }}
          {{ Form::text('s_tema', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Tema', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        </div>
      </div>
      
      <div class="form-row align-items-end">
        <div class="form-group col-md-12">
          {{ Form::label('s_objetivo_sesion', 'Objetivo de la sesión', ['class' => 'control-label']) }}
          {{ Form::textarea('s_objetivo_sesion', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_objetivo_sesion', 'class' => 'md-textarea form-control', 'title' => 'Objetivo de la sesión', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorobjetivo">0/4000</p>
        </div>
        <div class="form-group col-md-12">
          {{ Form::label('s_desarrollo_sesion', 'Desarrollo de la sesión', ['class' => 'control-label']) }}
          {{ Form::textarea('s_desarrollo_sesion', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_desarrollo_sesion', 'class' => 'md-textarea form-control', 'title' => 'Desarrollo de la sesión', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadordesarrollo">0/4000</p>
        </div>
        <div class="form-group col-md-12">
          {{ Form::label('s_conclusiones_sesion', 'Conclusiones de la sesión', ['class' => 'control-label']) }}
          {{ Form::textarea('s_conclusiones_sesion', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_conclusiones_sesion', 'class' => 'md-textarea form-control', 'title' => 'Conclusiones de la sesión', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorconclusiones">0/4000</p>
        </div>
        <div class="form-group col-md-12">
          {{ Form::label('s_tareas', 'Tareas', ['class' => 'control-label']) }}
          {{ Form::textarea('s_tareas', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_tareas', 'class' => 'md-textarea form-control', 'title' => 'Tareas', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadortareas">0/4000</p>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">
            {{ Form::label('tit_areajuste', 'Nivel de avance del NNAJ', ['class' => 'control-label']) }}
        </div>
        <div class="panel-body">
            <div class="form-row align-items-end">
                <div class="form-group col-md-4">
                  {{ Form::label('tit_areajuste', 'Área de ajuste', ['class' => 'control-label']) }}
                </div>
                <div class="form-group col-md-4">
                  {{ Form::label('tit_subareajuste', 'Sub área(s) de ajuste', ['class' => 'control-label']) }}
                </div>
                <div class="form-group col-md-4">
                  {{ Form::label('tit_nivelavance', 'Nivel de avance', ['class' => 'control-label']) }}
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
            <div class="form-group col-md-4">Académico</div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_subarea_academ_id', $todoxxxx['subacade'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
              {{ Form::select('i_prm_avance_academ_id', $todoxxxx['nivavanc'], null, ['class' => 'form-control form-control-sm']) }}
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="panel panel-default">
              {{ Form::label('i_prm_area_emocional_id', 'Novedad de la sesión', ['class' => 'control-label']) }}
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
          {{ Form::label('s_observaciones', 'Observaciones', ['class' => 'control-label']) }}
          {{ Form::textarea('s_observaciones', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_observaciones', 'class' => 'md-textarea form-control', 'title' => 'Observaciones', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorobservaciones">0/4000</p>
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('d_fecha_proxima', 'Fecha Próxima Sesión', ['class' => 'control-label']) }}
          {{ Form::date('d_fecha_proxima', null, ['class' => 'form-control form-control-sm', $todoxxxx["readonly"]]) }}
        </div>
        <div class="form-group col-md-4">
          {{ Form::label('i_prm_area_proxima_id', 'Área de ajuste a trabajar en la próxima sesión', ['class' => 'control-label']) }}
          <select id="i_prm_area_proxima_id" name="i_prm_area_proxima_id[]" 
           class="form-control form-control-sm" multiple="multiple">
            @foreach ($todoxxxx["arjustpr"] as $valuexxx => $optionxx)
             <?php $situavux='' ?>
            @foreach ($todoxxxx["areajusx"]['areajusx'] as $situacx)
                @if($situacx->i_prm_area_proxima_id==$valuexxx)
                <?php $situavux='selected' ?>
                @endif
            @endforeach
                <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
            @endforeach
          </select>
        </div>
      </div>
      
      <div class="form-row align-items-end">
        <div class="form-group col-md-8">
          {{ Form::label('i_primer_responsable', 'Responsable de la actividad', ['class' => 'control-label']) }}
          {{ Form::select('i_primer_responsable', $todoxxxx['usuarios'], null, ['class' => $errors->first('i_primer_responsable') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el primer responsable']) }}
          @if($errors->has('i_primer_responsable'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('i_primer_responsable') }}
            </div>
          @endif
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-8">
          {{ Form::label('i_segundo_responsable', 'Segundo responsable', ['class' => 'control-label']) }}
          {{ Form::select('i_segundo_responsable', $todoxxxx['usuarios'], null, ['class' => $errors->first('i_segundo_responsable') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el segundo responsable']) }}
          @if($errors->has('i_segundo_responsable'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('i_segundo_responsable') }}
            </div>
          @endif
        </div>
      </div>
  </div>
</div>

<div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']!='Ver')
      {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif
  </div>
</div>