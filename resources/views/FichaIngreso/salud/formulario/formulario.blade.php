<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('regisalu_id', '6.1 Estado de afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('regisalu_id', $todoxxxx["estafili"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_entidad_salud_id', '6.2 Entidad / Régimen', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_entidad_salud_id', $todoxxxx["entid_id"], null, ['class' => 'form-control form-control-sm']) }}
  </div>

  <div class="form-group col-md-4">
      {{ Form::label('puntajesisben', '6.3 Puntaje Sisben', ['class' => 'control-label col-form-label-sm']) }}
      <div class="row">
        <div class="col-md-6">
            {{ Form::label('d_puntaje_sisben', 'Puntaje SISBEN', ['class' => 'control-label col-form-label-sm d-none']) }}
            {{ Form::text('d_puntaje_sisben', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
        </div>
        <div class="col-md-6">
          {{ Form::label('tiensalu_id', 'Tiene SISBEN', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::select('tiensalu_id', $todoxxxx["apsisben"], null, ['class' => 'form-control form-control-sm']) }}
        </div>
      </div>
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('tiendisc_id', '6.4 ¿Tiene algún tipo de discapacidad?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('tiendisc_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  <div class="form-group col-md-4">
    {{ Form::label('tipodisc_id', 'Indicar tipo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('tipodisc_id', $todoxxxx["tipodisc"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('ticedisc_id', '6.5 ¿Cuenta con certificado?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('ticedisc_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('dipeinde_id', '6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('dipeinde_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('estagest_id', '6.7 ¿Se encuentra en estado de gestación?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('estagest_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_numero_semanas', 'Número de semanas', ['class' => 'control-label col-form-label-sm']) }}
    {{-- {{ Form::text('i_numero_semanas', null, ['class' => 'form-control form-control-sm', $todoxxxx['readgest'], "onkeypress" => "return soloNumeros(event);"]) }} --}}
    {{ Form::number('i_numero_semanas', null, ['class' => $errors->first('i_numero_semanas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $todoxxxx['readgest'], 'placeholder' => 'Edad', 'min' => '1', 'max' => '42']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('estalact_id', '6.8 ¿Se encuentra lactando?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('estalact_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_numero_meses', 'Número de meses', ['class' => 'control-label col-form-label-sm']) }}
    {{-- {{ Form::text('i_numero_meses', null, ['class' => 'form-control form-control-sm', $todoxxxx['readlact'], "onkeypress" => "return soloNumeros(event);"]) }} --}}
    {{ Form::number('i_numero_meses', null, ['class' => $errors->first('i_numero_meses') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $todoxxxx['readlact'], 'placeholder' => 'Edad', 'min' => '1', 'max' => '60']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('probsalu_id', '6.9 ¿Presenta algún problema de salud?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('probsalu_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_problema_salud_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_problema_salud_id', $todoxxxx["probsalu"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('consmedi_id', '6.10 ¿Consume medicamentos de manera permanente?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('consmedi_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_cual_medicamento', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_cual_medicamento', null, ['class' => 'form-control form-control-sm', $todoxxxx['cualmedi'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('tienhijo_id', '6.11 ¿Tiene hijos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('tienhijo_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_numero_hijos', 'No. Hijos(as)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('i_numero_hijos', null, ['class' => 'form-control form-control-sm', $todoxxxx['readhijo'], "onkeypress" => "return soloNumeros(event);"]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('evenmedi_id', '6.12 Mencione los eventos médicos importantes', ['class' => 'control-label col-form-label-sm']) }}

    <select id="evenmedi_id" name="evenmedi_id[]" class="form-control form-control-sm" multiple="multiple">
      @foreach($todoxxxx["evmedico"] as $key=> $eventoxx)
      <?php $selected=''; ?>
        @foreach($todoxxxx["saludxxx"]['eventome'] as $modsalud)
          @if($key==$modsalud->evenmedi_id)
          <?php $selected='selected'; ?>
          @endif
        @endforeach
      <option  value="{{$key}}" {{ $selected}}>   {{$eventoxx}} </option>
      @endforeach
    </select>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('conometo_id', '6.13 ¿Tiene conocimiento sobre métodos anticonceptivos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('conometo_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('usametod_id', '6.14 ¿Usa métodos anticonceptivos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('usametod_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('cualmeto_id', '6.15 ¿Cuál método?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('cualmeto_id', $todoxxxx["metantic"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('usovolun_id', '6.16 ¿Lo usa voluntariamente?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('usovolun_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm']) }}
  </div>

  @if(isset($todoxxxx['puedexxx']))
  {{-- Enfermedades de miembros de la familia --}}
<div class="form-group col-md-12">
    <div class="card card-outline card-secondary" style="{{ $todoxxxx['tablread'] }}" >
    <div class="card-header">
        <h3 class="card-title">
            {{ Form::label('qMetAntVol', '6.17 ¿Qué persona de su familia ha sido diagnosticada con alguna enfermedad?', ['class' => 'control-label col-form-label-sm']) }}
            @can('fisaludenfermedad-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fi.saludenfermedad.nuevo',$todoxxxx['nnajregi']) }}">
                    Nuevo
                </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
      @component('FichaIngreso.salud.datatable.index', ['todoxxxx'=>$todoxxxx])
        @slot('tableName')
           {{ $todoxxxx['tablname']}}
        @endslot
        @slot('class')
        @endslot
      @endcomponent
    </div>
  </div>
</div>
@section('codigo')
@include('FichaIngreso.salud.datatable.js')
@endsection
@endif

  <div class="form-group col-md-4">
    {{ Form::label('i_comidas_diarias', '6.18 ¿Cuántas comidas en promedio consume al día?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('i_comidas_diarias', null, ['class' => 'form-control form-control-sm', "maxlength" => 1, "onkeypress" => "return soloNumeros(event); return numeros(event);"]) }}

  </div>
  <div class="form-group col-md-4">
    {{ Form::label('racicomi_id', '6.19 ¿Por qué no consumió las 5 comidas diarias?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('racicomi_id', $todoxxxx["motcomdi"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>

@section("scripts")
 <script>
 function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
      }
}

function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}

$(function(){

       var f_discapacidad = function(valuexxx){
           $("#tipodisc_id, #ticedisc_id, #dipeinde_id").empty();
           $("#tipodisc_id, #ticedisc_id, #dipeinde_id").append('<option value="">Seleccione</>')
           if(valuexxx != ''){
               $.ajax({
                   url : "{{ route('ajaxx.discapacitado') }}",
                   data : {
                           _token: $("input[name='_token']").val(),
                           'padrexxx':valuexxx
                       },
                   type : 'POST',
                   dataType : 'json',
                   success : function(json) {
                       if(json[0].discapac[0].valuexxx==1){
                           $("#tipodisc_id, #ticedisc_id, #dipeinde_id").empty();
                       }
                       $.each(json[0].discapac,function(i,data){
                           $('#tipodisc_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                       $.each(json[0].certific,function(i,data){
                               $('#ticedisc_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                       $.each(json[0].independ,function(i,data){
                               $('#dipeinde_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                   },
                   error : function(xhr, status) {
                       alert('Disculpe, existió un problema');
                   },
               });
           }
       }

       @if(old('tiendisc_id')!=null)
           f_discapacidad({{ old('tiendisc_id') }});
       @endif

       $("#tiendisc_id").change(function(){
           f_discapacidad($(this).val());
       });

       $("#usametod_id").change(function(){
           $("#cualmeto_id, #usovolun_id").empty();
           $("#cualmeto_id, #usovolun_id").append('<option value="">Seleccione</>')
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.anticonceptivo') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   if(json[0].cuametod[0].valuexxx==1){
                       $("#cualmeto_id, #usovolun_id").empty();
                   }
                   $.each(json[0].cuametod,function(i,data){
                           $('#cualmeto_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
                   $.each(json[0].usavolun,function(i,data){
                           $('#usovolun_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });


       $("#regisalu_id").change(function(){
           $("#sis_entidad_salud_id").empty();
           $("#sis_entidad_salud_id").append('<option value="">Seleccione</>')
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.regimensalud') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   if(json[0].entidadx[0].valuexxx==1){
                       $("#sis_entidad_salud_id").empty();
                   }
                   $.each(json[0].entidadx,function(i,data){
                       
                       $('#sis_entidad_salud_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       
                    });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#i_comidas_diarias").keyup(function(){
           $("#racicomi_id").empty();
           $("#racicomi_id").append('<option value="">Seleccione</>')
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.comidasdiarias') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   if(json[0].nocomida[0].valuexxx==1){
                       $("#racicomi_id").empty();
                   }
                   $.each(json[0].nocomida,function(i,data){
                       $('#racicomi_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#estagest_id").change(function(){
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.estagestando') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   $('#i_numero_semanas').val(json.valuexxx)
                   $('#i_numero_semanas').prop('readonly',json.numseman)
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#estalact_id").change(function(){
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.estalactando') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   $('#i_numero_meses').val(json.valuexxx)
                   $('#i_numero_meses').prop('readonly',json.nummeses)
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#estalact_id").change(function(){
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.estalactando') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   $('#i_numero_meses').val(json.valuexxx)
                   $('#i_numero_meses').prop('readonly',json.nummeses)
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#tienhijo_id").change(function(){
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.tienehijos') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   $('#i_numero_hijos').val(json.valuexxx)
                   $('#i_numero_hijos').prop('readonly',json.numhijos)
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#probsalu_id").change(function(){
           $("#i_prm_problema_salud_id").empty();
           $("#i_prm_problema_salud_id").append('<option value="">Seleccione</>')
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.tieneprobsalud') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   if(json.prosalud[0].valuexxx==1){
                       $("#i_prm_problema_salud_id").empty();
                   }
                   $.each(json.prosalud,function(i,data){
                       $('#i_prm_problema_salud_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#consmedi_id").change(function(){
           if($(this).val()!=''){
               $.ajax({
               url : "{{ route('ajaxx.consumedicamen') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':$(this).val()
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   $('#s_cual_medicamento').val(json.valuexxx)
                   $('#s_cual_medicamento').prop('readonly',json.consmedi)
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });
       var f_sisben=function(valuexxx,pselecte){
           // if(valuexxx!=''){
               $.ajax({
               url : "{{ route('ajaxx.puntajesisben') }}",
               data : {
                       _token: $("input[name='_token']").val(),
                       'padrexxx':valuexxx
                   },
               type : 'POST',
               dataType : 'json',
               success : function(json) {
                   if(json[0].pusisben[0].valuexxx==1){
                       $("#tiensalu_id").empty();
                   }
                   $.each(json[0].pusisben,function(i,data){
                       $('#tiensalu_id').append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           // }
       }
       @if(old('d_puntaje_sisben')!=null)
       f_sisben({{ old('d_puntaje_sisben') }},{{ old('tiensalu_id')  }});
       @endif
       $("#d_puntaje_sisben").keyup(function(){
           $("#tiensalu_id").empty();
           $("#tiensalu_id").append('<option value="">Seleccione</>')
           f_sisben($(this).val(),'');
       });

       //MASCARA PUNTAJE SISBEN
       $('#d_puntaje_sisben').mask('00.00');

   });
</script>
 @endsection
