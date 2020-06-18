<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('acgeingr_id', '7.1 ¿Que actividad realiza para generar ingresos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('acgeingr_id', $todoxxxx["acgening"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_trabajo_formal', 'A.1 Mencione en qué trabaja (No aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_trabajo_formal', null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('trabinfo_id', 'B.1 (Si Indicó B. TRABAJO INFORMAL) Seleccione:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('trabinfo_id', $todoxxxx["trabinfo"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('trabinfo_id', 'C.1 (Si Indicó C. OTRAS ACTIVIDADES) Seleccione:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('trabinfo_id', $todoxxxx["otractiv"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('noingres_id', 'D.1 ¿Por qué no genera ingresos? (No Aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('noingres_id', $todoxxxx["raznogen"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_dias_buscando_empleo_id', 'D.1(a) ¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-4">
        {{ Form::label('idibuempl', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('idibuempl', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Día(s)']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('imebuempl', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('imebuempl', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Mes(es)']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('ianbuempl', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('ianbuempl', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Año(s)']) }}
      </div>
    </div>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('jogeingr_id', '7.2 ¿En qué jornada genera los ingresos? (No Aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('jogeingr_id' , $todoxxxx["jorgener"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_hora_inicial', 'Hora desde', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::time('s_hora_inicial', null, ['class' => 'form-control form-control-sm',$todoxxxx['readhora']]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_hora_final', 'Hora hasta', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::time('s_hora_final', null, ['class' => 'form-control form-control-sm',$todoxxxx['readhora']]) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
   
    {{ Form::label('i_prm_dia_genera_id', '7.3 ¿En qué días?', ['class' => 'control-label col-form-label-sm']) }}

    <select id="i_prm_dia_genera_id" name="i_prm_dia_genera_id[]" class="form-control form-control-sm" multiple="multiple">
      @foreach($todoxxxx["diaseman"] as $key=> $diasemax)
      <?php $selected=''; ?>
        @foreach($todoxxxx["geneingr"]['diasgene'] as  $generaci)
          @if($key==$generaci->i_prm_dia_genera_id)
          <?php $selected='selected'; ?>
          @endif
        @endforeach
      <option  value="{{$key}}" {{ $selected}}>   {{$diasemax}} </option>
      @endforeach
</select>
 </div>
  <div class="form-group col-md-4">
    {{ Form::label('frecingr_id', '7.4 ¿Con qué frecuencia recibe el ingreso por la actividad?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-6">
        {{ Form::select('frecingr_id', $todoxxxx["frecugen"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
      <div class="col-md-6">
        {{ Form::label('ingrmensual', '$', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('ingrmensual', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => '$']) }}
      </div>
    </div>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('relabora_id', '7.5 ¿Tipo de relación laboral? (No aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('relabora_id', $todoxxxx["tiporela"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>