<?php

use Illuminate\Support\Facades\Storage;

$tablaxxx = 'principa';
if (isset($todoxxxx['rowscols'])) {
    $tablaxxx = $todoxxxx['rowscols'];
}

?>
<div class="form-row align-items-end form-group col-md-12" style="margin-bottom: 40px">


    {{ Form::label('s_doc_adjunto_ar', '6.1 GENOGRAMA', ['class' => 'control-label col-form-label-sm']) }}
    @component('layouts.components.archivos.upload')
    @slot('dataxxxx',['classdiv'=>'custom-file mb-3','campoxxx'=>'s_doc_adjunto_ar','descripc'=>'Seleccione un archivo','idlabelx'=>'s_doc_adjunto_ar_label',
    'claslabe'=>'custom-file-label','acceptxx'=>'image/jpeg,application/pdf','clasinpu'=>'custom-file-input','tipoarch'=>Tr::getTitulo(28,1)])
    @endcomponent

</div>
@if($todoxxxx['archivox']!='')
<div class="row">
    <div class="col-md-12">
    <a href="{{asset($todoxxxx['modeloxx']->s_doc_adjunto)}}" target="_blank" >{{$todoxxxx['archivox']}}</a>
    </div>
</div>
@endif

<div class="row">
    <div class="col-md-12">
        <h6>6.2 Relaciones de pareja</h6>
    </div>
</div>
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_familiar_id', '6.3 Tipología familiar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_familiar_id', $todoxxxx["familiax"], null, ['class' => $errors->first('prm_familiar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc2(this.value)']) }}
        @if($errors->has('prm_familiar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_familiar_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_hogar_id', '6.4 Tipología de Hogar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_hogar_id', $todoxxxx["hogarxxx"], null, ['class' => $errors->first('prm_hogar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc3(this.value)']) }}
        @if($errors->has('prm_hogar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_hogar_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('descripciona', '6.5 Descripción (Interpretación de la composición familiar, motivos de separaciones, fallecimientos, tipo de relaciones, impacto en el NNAJ)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripciona', null, ['class' => $errors->first('descripciona') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción de la composición familiar', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="contadordescripciona">0/4000</p>
        @if($errors->has('descripciona'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripciona') }}
            </div>
        @endif
    </div>
  </div>
<div class="row">
  <div class="col-md">
      {{ Form::label('antecedentes', '6.6 Antecedentes de problemas sociales asociados con la familia actual y extensa', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('antecedentes[]',$todoxxxx["antecede"], null, ['class' => $errors->first('antecedentes') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'antecedentes', 'multiple', 'autofocus']) }}
      @if($errors->has('antecedentes'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('antecedentes') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('descripcion', 'Descripción:', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadordescripcion">0/4000</p>
      @if($errors->has('descripcion'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('descripcion') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('relevantes', '6.7 Acontecimientos relevantes en la familia (fallecimientos, nacimientos, migraciones, eventos traumáticos, etc):', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('relevantes', null, ['class' => $errors->first('relevantes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba los acontecimientos más relevantes', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorrelevantes">0/4000</p>
      @if($errors->has('relevantes'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('relevantes') }}
          </div>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-md">
      {{ Form::label('prm_bogota_id', '6.8 ¿Usted y su familia siempre han vivido en Bogotá?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_bogota_id', $todoxxxx["condicio"], null, ['class' => $errors->first('prm_bogota_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc(this.value)']) }}
      @if($errors->has('prm_bogota_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_bogota_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_traslado_id', '6.9 Por qué razón se trasladaron a Bogotá', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_traslado_id', $todoxxxx["traslado"], null, ['class' => $errors->first('prm_traslado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_traslado_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_traslado_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      <div class="row">
          <div class="col-md-12">
              {{ Form::label('jefea', '6.10 ¿Quién o quienes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm']) }}
              {{ Form::text('jefea', null, ['class' => $errors->first('jefea') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',  "onkeypress" => "return soloLetras(event);"]) }}
              @if($errors->has('jefea'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('jefea') }}
                  </div>
              @endif
              {{ Form::label('prm_jefea_id', '6.10 ¿Quien o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm d-none']) }}
              {{ Form::select('prm_jefea_id', $todoxxxx["familiar"], null, ['class' => $errors->first('prm_jefea_id') ? 'form-control form-control-sm select2 is-invalid' : 'form-control select2 form-control-sm']) }}
              @if($errors->has('prm_jefea_id'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('prm_jefea_id') }}
                  </div>
              @endif
          </div>
      </div>
      <div class="row mt-2">
          <div class="col-md-12">
              {{ Form::label('jefeb', '6.10 ¿Quien o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm d-none']) }}
              {{ Form::text('jefeb', null, ['class' => $errors->first('jefeb') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',  "onkeypress" => "return soloLetras(event);"]) }}
              @if($errors->has('jefeb'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('jefeb') }}
                  </div>
              @endif
              {{ Form::label('prm_jefeb_id', '6.10 ¿Quien o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm d-none']) }}
              {{ Form::select('prm_jefeb_id', $todoxxxx["familiar"], null, ['class' => $errors->first('prm_jefeb_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
              @if($errors->has('prm_jefeb_id'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('prm_jefeb_id') }}
                  </div>
              @endif
          </div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('descripcionb', '6.11 Descripción de hechos relevantes en las etapas de desarrollo, potencialidades, habilidades, talentos del NNAJ', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('descripcionb', null, ['class' => $errors->first('descripcionb') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Percepción de quién recibe la consulta sobre el NNAJ', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadordescripcion1">0/4000</p>
      @if($errors->has('descripcionb'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('descripcionb') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_cuidador_id', '6.12 ¿Quién asume el cuidado y crianza de los menores de 18 años en ausencia de padres o representante legal?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_cuidador_id', $todoxxxx["familiar"], null, ['class' => $errors->first('prm_cuidador_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
      @if($errors->has('prm_cuidador_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_cuidador_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('descripcionc', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('descripcionc', null, ['class' => $errors->first('descripcionc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describir en qué lugar realiza el cuidado y si tiene algún costo, entre otras', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadordescripcion2">0/4000</p>
      @if($errors->has('descripcionc'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('descripcionc') }}
          </div>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('problemas', '6.13 ¿Cuáles cree que son las principales problemáticas por las que atraviesa la familia?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('problemas[]', $todoxxxx["problema"], null, ['class' => $errors->first('problemas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'problemas', 'multiple']) }}
      @if($errors->has('problemas'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('problemas') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('afronta', '6.14 ¿Cómo las afrontan?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('afronta', null, ['class' => $errors->first('afronta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describir cómo afronta las problemáticas', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorafronta">0/4000</p>
      @if($errors->has('afronta'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('afronta') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_norma_id', '6.15 ¿Al interior de la familia hay normas y límites?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_norma_id', $todoxxxx["condicio"], null, ['class' => $errors->first('prm_norma_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc1(this.value)']) }}
      @if($errors->has('prm_norma_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_norma_id') }}
          </div>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('prm_conoce_id', '6.16 ¿Los integrantes del núcleo familiar conocen estas normas y límites?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_conoce_id', $todoxxxx["condicio"], null, ['class' => $errors->first('prm_conoce_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_conoce_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_conoce_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('normas', '6.17 ¿Quién(es) establece(n) las órdenes y reglas en el hogar?', ['class' => 'control-label col-form-label-sm']) }}
      <div id="normas_div">
          {{ Form::select('normas[]', $todoxxxx["familian"], null, ['class' => $errors->first('normas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'normas', 'multiple']) }}
      </div>
      @if($errors->has('normas'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('normas') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('establecen', '6.18 ¿Cómo las establecen?', ['class' => 'control-label col-form-label-sm']) }}
      <div id="establecen_div">
          {{ Form::select('establecen[]', $todoxxxx["reglasxx"], null, ['class' => $errors->first('establecen') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'establecen', 'multiple']) }}
      </div>
      @if($errors->has('establecen'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('establecen') }}
          </div>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('observacion', '6.19 Observaciones', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Observaciones', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', 'id' => 'observacion']) }}
      <p id="contadorobservacion">0/4000</p>
      @if($errors->has('observacion'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('observacion') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_actuan_id', '6.20 ¿Cómo actúan los miembros de la familia frente a las normas?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_actuan_id', $todoxxxx["actuandx"], null, ['class' => $errors->first('prm_actuan_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_actuan_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_actuan_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('porque', '¿Por qué?:', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorporque">0/4000</p>
      @if($errors->has('porque'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('porque') }}
          </div>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('prm_solucion_id', '6.21 Cuando hay problemas en casa, ¿Cómo lo solucionan?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_solucion_id', $todoxxxx["manerasx"], null, ['class' => $errors->first('prm_solucion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_solucion_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_solucion_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_problema_id', '6.22 ¿A quién acude cuando hay problemas en casa?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_problema_id', $todoxxxx["acudexxx"], null, ['class' => $errors->first('prm_problema_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_problema_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_problema_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('incumple', '6.23 ¿Cuál es el modo de actuar cuando no se cumplen las reglas?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('incumple[]', $todoxxxx["incumple"], null, ['class' => $errors->first('incumple') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'incumple', 'multiple']) }}
      @if($errors->has('incumple'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('incumple') }}
          </div>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('prm_destaca_id', '6.24 Los miembros de la familia se destacan por:', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_destaca_id', $todoxxxx["destacan"], null, ['class' => $errors->first('prm_destaca_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_destaca_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_destaca_id') }}
          </div>
      @endif
  </div>
  <div class="col-md-4">
      {{ Form::label('prm_positivo_id', '6.25 ¿Cómo actúa la familia cuando hay sucesos positivos?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_positivo_id', $todoxxxx["sucesosx"], null, ['class' => $errors->first('prm_positivo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_positivo_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_positivo_id') }}
          </div>
      @endif
  </div>
</div>
<br>


