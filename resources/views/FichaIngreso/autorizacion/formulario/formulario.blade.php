<div class="form-row align-items-end">
    {{ Form::hidden('edad_nna', $todoxxxx['datobasi']->d_nacimiento) }}
  <div id="text" class="form-inline">
    <div class="input-group" style="display: inline-block">
      <span class="input-group-addon" style="width:auto;">Yo, </span>
      {{ Form::select('s_nombre_mayor', $todoxxxx["docrepre"], null, ['class' => 'form-control-sm col-2']) }}
      
      <span class="input-group-addon" style="width:auto;">, mayor de edad identificado(a) con la Cédula de Ciudadanía No. </span>
      {{ Form::text('i_documento_mayor', null, ['id' => 'i_documento_mayor', 'class' => 'form-control-sm col-2', $todoxxxx['readcedr'], 'placeholder' => 'Cédula de ciudadanía', "onkeypress" => "return soloNumeros(event);"]) }}
      <span class="input-group-addon" style="width:auto;">de</span>
      {{ Form::text('s_lugarexp_mayor', null, ['class' => 'form-control-sm col-2', $todoxxxx['readluga'], 'placeholder' => 'Lugar de expedición', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
      <span class="input-group-addon" style="width:auto;">, por medio del presente escrito AUTORIZO al Instituto Distrital para la Protección de la Niñez y la Juventud IDIPRON para que el/la joven</span>
      {{ Form::select('i_prm_autorizo_id', $todoxxxx["condicio"], null, ['class' => 'form-control-sm col-2']) }}
      <span class="input-group-addon" style="width:auto;">sea VINCULADO(A) al modelo pedagógico y participe en las diferentes actividades y salidas pedagógicas propias del Instituto o interinstitucionales.</span>
    </div>
  </div>
  <hr width=80%>
  <div id="text" class="form-inline">
    <div class="input-group" style="display: inline-block">
        <span class="input-group-addon" style="width:auto;">En calidad de </span>
        {{ Form::select('i_prm_parentesco_mayor_id', $todoxxxx["docrepre"], null, ['class' => 'form-control-sm col-2']) }}
        <span class="input-group-addon" style="width:auto;">del NNA</span>
        {{ Form::text('s_nombre_nna', null, ['class' => 'form-control-sm col-4', $todoxxxx['readnomn'], 'placeholder' => 'Nombre Completo',
      "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
        <span class="input-group-addon" style="width:auto;">de</span>
        {{ Form::text('i_edad_nna', null, ['class' => 'form-control-sm col-2', $todoxxxx['readedad'], 'placeholder' => 'Edad', "onkeypress" => "return soloNumeros(event);"]) }} 
        <span class="input-group-addon" style="width:auto;">años, identificado(a) con</span>
        {{ Form::select('i_prm_documento_menor_id', $todoxxxx["docmened"], null, ['class' => 'form-control-sm col-3']) }}
        <span class="input-group-addon" style="width:auto;">Nº</span>
        {{ Form::text('s_documento_nna', null, ['id' => 's_documento_nna', 'class' => 'form-control-sm col-2', $todoxxxx['readdocu'], 'placeholder' => 'Número de documento', "onkeypress" => "return soloNumeros(event);"]) }}
        <span class="input-group-addon" style="width:auto;">. Esta decisión la tomé en concertación con mi</span>
        {{ Form::text('s_persona_concerta', null, ['class' => 'form-control-sm col-3', $todoxxxx['readconc'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);", 'placeholder' => 'Persona con quien concerta']) }}
        <span class="input-group-addon" style="width:auto;">, una vez conocida la misionalidad del INSTITUTO, así como sus políticas, objetivos y ejes estratégicos, esto con el fin de ser corresponsable 
            del proceso pedagógico establecido para garantizar el goce efectivo de derechos. Así mismo, me comprometo con su protección integral y a cumplir con 
            la responsabilidad, otorgadas por la Ley Colombiana como representante legal y/o tutor(a), de acuerdo a lo establecido en la Constitución Nacional, 
            en su artículo 44, el cual establece “La familia, la sociedad y el Estado tienen la obligación de asistir y proteger al niño para garantizar su desarrollo 
            armónico e integral y el ejercicio pleno de sus derechos. Cualquier persona puede exigir de la autoridad competente su cumplimiento y la sanción de los 
            infractores”. Por lo tanto, manifiesto que soy consciente de mis responsabilidades y de los alcances legales por el incumplimiento de la misma.
            Así mismo me comprometo a recibirlo y entregarlo en las horas acordadas, a brindarle la protección y el cuidado necesarios, a participar en los espacios de 
            construcción colectiva encaminados al fortalecimiento de la autonomía familiar y en el aprendizaje de acciones para la exigibilidad y restitución de derechos.</span>
      </div>
  </div>
  <hr width=80%>
  <div id="text" class="form-inline">
    <div class="input-group" style="display: inline-block">
        <span class="input-group-addon" style="width:auto;">Igualmente, manifiesto que ACEPTO que dicho proceso sea realizado en las UNIDADES DE PROTECCIÓN INTEGRAL ubicadas dentro y fuera de la Ciudad de Bogotá, en la modalidad de:</span>  
        <select id="i_prm_modalidad_id" name="i_prm_modalidad_id[]" 
        class="col-3" multiple="multiple">
          @foreach ($todoxxxx["modalupi"] as $valuexxx => $optionxx)
          <?php $situavux='' ?>
          @foreach ($todoxxxx["modaling"]['modaling'] as $situacx)
              @if($situacx->i_prm_modalidad_id==$valuexxx)
              <?php $situavux='selected' ?>
              @endif
          @endforeach
              <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
          @endforeach
        </select>
        <span class="input-group-addon" style="width:auto;">.
            De igual forma yo (NNAJ) me comprometo a: conocer, aceptar y cumplir los acuerdos individuales y de convivencia, cumplir con responsabilidad las orientaciones que reciba, participar en las actividades para el logro de los objetivos que sean
            definidos, cuidar los recursos que están disponibles para garantizar mis derechos, asumir la responsabilidad de mi proceso, asumir las consecuencias que se puedan derivar producto de mis actos, asumir los riesgos a los cuales me pueda ver
            expuesto en razón a los viajes, caminatas, paseos, salidas y demás actividades propias del proyecto pedagógico a desarrollar, participar en los encuentros familiares y/o en las actividades que el INSTITUTO disponga.
            Así mismo, ACEPTO la participación en procesos de investigación desarrollados directamente por el Área de Investigación del IDIPRON y en ejercicios de indagación o investigaciones llevadas a cabo por terceros, siempre y cuando éstos
            cuenten con el aval del Área, respeten las normas vigentes en materia de confidencialidad de datos personales y cuenten con la manifestación expresa de su voluntad; con el único propósito de producir conocimiento sobre temas de interés de la
            entidad.
            Finalmente, AUTORIZO al IDIPRON la utilización del material fotográfico, audio y video en los cuales como beneficiario(a) intervenga, surgidos durante la participación en los procesos del Instituto, para que puedan ser publicados en las
            comunicaciones y/o en la promoción de campañas institucionales únicamente como uso divulgativo, pedagógico e institucional, respetando en todo momento el derecho al honor, a la intimidad personal y la propia imagen.
            En constancia de aceptación de lo anteriormente descrito, suscribo la presente autorización en la ciudad de Bogotá D.C el día </span>
            {{ Form::date('d_fecha_autorizacion', null, ['class' => 'form-control-sm col-2',$todoxxxx["readonly"]]) }}
            <hr width=80%>
            <br><span class="input-group-addon" style="width:auto;">Tipo de diligenciamiento</span>
            {{ Form::select('i_prm_tipo_diligencia_id', $todoxxxx["tipodili"], null, ['class' => 'form-control-sm']) }}
    </div>
  </div>
</div>