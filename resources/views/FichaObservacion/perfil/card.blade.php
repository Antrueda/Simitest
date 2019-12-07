<div style="display:{{ $todoxxxx['dispform'] }}" >

  <div class="form-group card-footer text-muted text-center">
    @if($todoxxxx['accionxx']!='Ver')
      {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
    @endif
    <a class="btn btn-sm btn-primary" href="{{ route('fos.fichaobservacion.lista', $todoxxxx['nnajregi']) }}">Volver</a>
  </div>

  <div class="card" >
    <div class="card-body">
      <div class="form-row align-items-end">
        {{ Form::hidden('sis_nnaj_id', $todoxxxx['nnajregi']) }}
        <div class="form-group col-md-6">
          {{ Form::label('sis_dependencia_id', 'UPI / Dependencia', ['class' => 'control-label']) }}
          {{ Form::select('sis_dependencia_id', $todoxxxx['dependen'], null, ['class' => 'form-control form-control-sm']) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('d_fecha_diligencia', 'Fecha Diligenciamiento', ['class' => 'control-label']) }}
            {{ Form::date('d_fecha_diligencia', \Carbon\Carbon::now(), ['class' => 'form-control form-control-sm',$todoxxxx["readonly"]]) }}
        </div>
      </div>
      
      <div class="form-row align-items-end">
        <div class="form-group col-md-6">
          {{ Form::label('area_id', 'Área / Contexto Pedagógico', ['class' => 'control-label']) }}
          {{ Form::select('area_id', $todoxxxx["areasxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('tema_id', 'Tema', ['class' => 'control-label']) }}
          {{ Form::select('tema_id', $todoxxxx["temaxxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('taller_id', 'Taller', ['class' => 'control-label']) }}
          {{ Form::select('taller_id', $todoxxxx["tallerxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
        </div>
      </div>
      
      <div class="form-row align-items-end">
        <div class="form-group col-md-12">
          {{ Form::label('s_observacion', 'Tipo de Observacion y/o Seguimiento', ['class' => 'control-label']) }}
          {{ Form::textarea('s_observacion', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_observacion', 'class' => 'md-textarea form-control', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
          <p id="contadorobservacion">0/4000</p>
        </div>
      </div>
      
      <div class="form-row align-items-end">
        <div class="form-group col-md-12">
          {{ Form::label('fi_composicion_fami_id', 'Acudiente', ['class' => 'control-label col-form-label-sm']) }}
          {{ Form::select('fi_composicion_fami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm']) }}
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