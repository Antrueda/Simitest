<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_actividad_genera_ingreso_id', '7.1 ¿Que actividad realiza para generar ingresos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_actividad_genera_ingreso_id', $todoxxxx["acgening"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_trabajo_formal', 'A.1 Mencione en qué trabaja (No aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_trabajo_formal', null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_trabajo_informal_id', 'B.1 (Si Indicó B. TRABAJO INFORMAL) Seleccione:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_trabajo_informal_id', $todoxxxx["trabinfo"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_otra_actividad_id', 'C.1 (Si Indicó C. OTRAS ACTIVIDADES) Seleccione:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_otra_actividad_id', $todoxxxx["otractiv"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_razon_no_genera_ingreso_id', 'D.1 ¿Por qué no genera ingresos? (No Aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_razon_no_genera_ingreso_id', $todoxxxx["raznogen"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_dias_buscando_empleo_id', 'D.1(a) ¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-4">
        {{ Form::label('i_dias_buscando_empleo', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('i_dias_buscando_empleo', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Día(s)']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('i_meses_buscando_empleo', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('i_meses_buscando_empleo', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Mes(es)']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('i_anos_buscando_empleo', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('i_anos_buscando_empleo', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => 'Año(s)']) }}
      </div>
    </div>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_jornada_genera_ingreso_id', '7.2 ¿En qué jornada genera los ingresos? (No Aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_jornada_genera_ingreso_id' , $todoxxxx["jorgener"], null, ['class' => 'form-control form-control-sm']) }}
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
    {{ Form::label('i_prm_frec_ingreso_id', '7.4 ¿Con qué frecuencia recibe el ingreso por la actividad?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-6">
        {{ Form::select('i_prm_frec_ingreso_id', $todoxxxx["frecugen"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
      <div class="col-md-6">
        {{ Form::label('i_total_ingreso_mensual', '$', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::text('i_total_ingreso_mensual', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", 'placeholder' => '$']) }}
      </div>
    </div>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_tipo_relacion_laboral_id', '7.5 ¿Tipo de relación laboral? (No aplica para CHC)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tipo_relacion_laboral_id', $todoxxxx["tiporela"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>