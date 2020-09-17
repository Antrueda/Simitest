<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
     var table ='';
$(document).ready(function() {


  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
        "ajax": {
            url:"{{ url($tablasxx['urlxxxxx'])  }}",
            @if(isset($tablasxx['dataxxxx']))
                data:{
                    @foreach($tablasxx['dataxxxx'] as $dataxxxx)
                    {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
            @endif
        },
        "columns":[
            @foreach($tablasxx['columnsx'] as $columnsx)
                {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
            @endforeach
        ],
        "language": {
            "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
        }
    });
  @endforeach

var f_combo=function(dataxxxx){

    $.ajax({
               url : "{{ route('fisalud.victimax',$todoxxxx['parametr']) }}",
               data : dataxxxx,
               type : 'GET',
               dataType : 'json',
               success : function(json) {
                $('#'+json.selectxx).empty();
                   $.each(json.comboxxx,function(i,data){

                       $('#'+json.selectxx).append('<option '+data.selected+'  value="'+data.valuexxx+'">'+data.optionxx+'</option>')

                    });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
}
    $("#prm_victataq_id").change(function(){
        f_combo({padrexxx:$(this).val()==''?0:$(this).val(),opcionxx:1});
    })
    $("#prm_discausa_id").change(function(){
        f_combo({padrexxx:$(this).val()==''?0:$(this).val(),opcionxx:2});
    })


} );
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
    $('.select2').select2({
            language: "es"
        });
       var f_discapacidad = function(valuexxx){
           $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id,#prm_discausa_id").empty();
           $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id,#prm_discausa_id").append('<option value="">Seleccione</>')
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
                           $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id,#prm_discausa_id").empty();
                       }
                       $.each(json[0].discapac,function(i,data){
                           $('#i_prm_tipo_discapacidad_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                       $.each(json[0].certific,function(i,data){
                               $('#i_prm_tiene_cert_discapacidad_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                       $.each(json[0].independ,function(i,data){
                               $('#i_prm_disc_perm_independencia_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });

                       $.each(json[0].discausa,function(i,data){
                               $('#prm_discausa_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });

                   },
                   error : function(xhr, status) {
                       alert('Disculpe, existió un problema');
                   },
               });
           }
       }

       @if(old('i_prm_tiene_discapacidad_id')!=null)
           f_discapacidad({{ old('i_prm_tiene_discapacidad_id') }});
       @endif

       $("#i_prm_tiene_discapacidad_id").change(function(){
           f_discapacidad($(this).val());
       });

       $("#i_prm_usa_metodos_id").change(function(){
           $("#i_prm_cual_metodo_id, #i_prm_uso_voluntario_id").empty();
           $("#i_prm_cual_metodo_id, #i_prm_uso_voluntario_id").append('<option value="">Seleccione</>')
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
                       $("#i_prm_cual_metodo_id, #i_prm_uso_voluntario_id").empty();
                   }
                   $.each(json[0].cuametod,function(i,data){
                           $('#i_prm_cual_metodo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
                   $.each(json[0].usavolun,function(i,data){
                           $('#i_prm_uso_voluntario_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });


       $("#i_prm_regimen_salud_id").change(function(){
           $("#sis_entidad_salud_id").empty();
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
           $("#i_prm_razon_no_cinco_comidas_id").empty();
           $("#i_prm_razon_no_cinco_comidas_id").append('<option value="">Seleccione</>')
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
                       $("#i_prm_razon_no_cinco_comidas_id").empty();
                   }
                   $.each(json[0].nocomida,function(i,data){
                       $('#i_prm_razon_no_cinco_comidas_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#i_prm_esta_gestando_id").change(function(){
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

       $("#i_prm_esta_lactando_id").change(function(){
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

       $("#i_prm_esta_lactando_id").change(function(){
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

       $("#i_prm_tiene_hijos_id").change(function(){
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

       $("#i_prm_tiene_problema_salud_id").change(function(){
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

       $("#i_prm_consume_medicamentos_id").change(function(){
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
                       $("#i_prm_tiene_sisben_id").empty();
                   }
                   $.each(json[0].pusisben,function(i,data){
                       $('#i_prm_tiene_sisben_id').append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           // }
       }
       @if(old('d_puntaje_sisben')!=null)
       f_sisben({{ old('d_puntaje_sisben') }},{{ old('i_prm_tiene_sisben_id')  }});
       @endif
       $("#d_puntaje_sisben").keyup(function(){
           $("#i_prm_tiene_sisben_id").empty();
           $("#i_prm_tiene_sisben_id").append('<option value="">Seleccione</>')
           f_sisben($(this).val(),'');
       });

       //MASCARA PUNTAJE SISBEN
       $('#d_puntaje_sisben').mask('00.00');

   });
</script>
