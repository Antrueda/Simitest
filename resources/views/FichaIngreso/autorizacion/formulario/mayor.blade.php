<div class="form-row align-items-end">
  <div id="text" class="form-inline">
    <div class="input-group" style="display: inline-block;text-align: justify">
      <span class="input-group-addon" style="width:auto;">Yo, </span>
      {{ Form::select('fi_compfami_id', $todoxxxx["autoriza"], null, ['class' => 'form-control-sm col-2','id'=>'fi_compfami_id']) }}
      <span class="input-group-addon" style="width:auto;">, mayor de edad identificado(a) con la Cédula de Ciudadanía No.</span>
      <strong>{{ $todoxxxx['sdocumen'] }} </strong>
      <span class="input-group-addon" style="width:auto;">de</span>
      <strong>{{ $todoxxxx['expedici'] }} </strong>
      <span class="input-group-addon" style="width:auto;">, por medio del presente escrito AUTORIZO al Instituto Distrital para la Protección de la Niñez y la Juventud IDIPRON para que YO</span>
      {{ Form::select('i_prm_autorizo_id', $todoxxxx["condicio"], null, ['class' => 'form-control-sm col-2']) }}
      <span class="input-group-addon" style="width:auto;">sea VINCULADO(A) al modelo pedagógico y participe en las diferentes actividades y salidas pedagógicas propias del Instituto o interinstitucionales.</span>
    </div>
  </div>
  <hr width=80%>
  <div id="text" class="form-inline">
    <div class="input-group" style="display: inline-block;text-align: justify">
        <span class="input-group-addon" style="width:auto; " >
          Esta decisión la tomé una vez conocida la misionalidad del INSTITUTO, así como sus políticas, objetivos y ejes estratégicos, esto con el fin de ser
          corresponsable  del proceso pedagógico establecido para garantizar el goce efectivo de derechos. Así mismo, me comprometo con mi protección integral
          y a cumplir con la responsabilidad, otorgadas por la Ley Colombiana como representante legal y/o tutor(a), de acuerdo a lo establecido en la Constitución
          Nacional, en su artículo 44, el cual establece “La familia, la sociedad y el Estado tienen la obligación de asistir y proteger al niño para garantizar su
          desarrollo armónico e integral y el ejercicio pleno de sus derechos. Cualquier persona puede exigir de la autoridad competente su cumplimiento y la sanción
          de los infractores”. Por lo tanto, manifiesto que soy consciente de mis responsabilidades y de los alcances legales por el incumplimiento de la misma.
          Así mismo me comprometo a participar en los espacios de construcción colectiva encaminados al fortalecimiento de la autonomía familiar y en el aprendizaje
          de acciones para la exigibilidad y restitución de derechos.
        </span>
      </div>
  </div>
  <hr width=80%>
  <div id="text" class="form-inline">
    <div class="input-group" style="display: inline-block;text-align: justify">
        <span class="input-group-addon" style="width:auto;">Igualmente, manifiesto que ACEPTO que dicho proceso sea realizado en las UNIDADES DE PROTECCIÓN INTEGRAL ubicadas dentro y fuera de la Ciudad de Bogotá, en la modalidad de:</span>
        <select id="i_prm_modalidad_id" name="i_prm_modalidad_id[]"
        class="col-3 select2" multiple="multiple">
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
        <span class="input-group-addon" style="width:auto; width: 30%;">.
            De igual forma me comprometo a: conocer, aceptar y cumplir los acuerdos individuales y de convivencia, cumplir con responsabilidad las orientaciones que reciba, participar en las actividades para el logro de los objetivos que sean
            definidos, cuidar los recursos que están disponibles para garantizar mis derechos, asumir la responsabilidad de mi proceso, asumir las consecuencias que se puedan derivar producto de mis actos, asumir los riesgos a los cuales me pueda ver
            expuesto en razón a los viajes, caminatas, paseos, salidas y demás actividades propias del proyecto pedagógico a desarrollar, participar en los encuentros familiares y/o en las actividades que el INSTITUTO disponga.
            Así mismo, ACEPTO la participación en procesos de investigación desarrollados directamente por el Área de Investigación del IDIPRON y en ejercicios de indagación o investigaciones llevadas a cabo por terceros, siempre y cuando éstos
            cuenten con el aval del Área, respeten las normas vigentes en materia de confidencialidad de datos personales y cuenten con la manifestación expresa de su voluntad; con el único propósito de producir conocimiento sobre temas de interés de la
            entidad.
            Finalmente, AUTORIZO al IDIPRON la utilización del material fotográfico, audio y video en los cuales como beneficiario(a) intervenga, surgidos durante la participación en los procesos del Instituto, para que puedan ser publicados en las
            comunicaciones y/o en la promoción de campañas institucionales únicamente como uso divulgativo, pedagógico e institucional, respetando en todo momento el derecho al honor, a la intimidad personal y la propia imagen.
            En constancia de aceptación de lo anteriormente descrito, suscribo la presente autorización en la ciudad de Bogotá D.C el día </span>
            {{ Form::date('d_autorizacion', null, ['class' => 'form-control-sm col-3',$todoxxxx["readonly"]]) }}
            <hr width=80%>
            <br><span class="input-group-addon" style="width:auto;">Tipo de diligenciamiento</span>
            {{ Form::select('i_prm_tipo_diligencia_id', $todoxxxx["tipodili"], null, ['class' => 'form-control-sm select2']) }}
    </div>
  </div>
</div>
