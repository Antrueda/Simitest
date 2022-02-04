<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
     var table ='';
$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50], [5, 10, 20, 25, 50]],
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


    $("#prm_conometo_id").change(function(){
           $("#prm_cualmeto_id, #prm_usovolun_id,#prm_usametod_id").empty();
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
                       $("#prm_cualmeto_id, #prm_usovolun_id,#prm_usametod_id").empty();
                   }
                   $.each(json[0].cuametod,function(i,data){
                           $('#prm_cualmeto_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
                   $.each(json[0].usavolun,function(i,data){
                           $('#prm_usovolun_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
                   $.each(json[0].usameant,function(i,data){
                           $('#prm_usametod_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#prm_usametod_id").change(function(){
           $("#prm_cualmeto_id, #prm_usovolun_id").empty();
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
                       $("#prm_cualmeto_id, #prm_usovolun_id").empty();
                   }
                   $.each(json[0].cuametod,function(i,data){
                           $('#prm_cualmeto_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
                   $.each(json[0].usavolun,function(i,data){
                           $('#prm_usovolun_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
                   $.each(json[0].usameant,function(i,data){
                           $('#prm_usametod_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });



       $("#i_comidas_diarias").keyup(function(){
           $("#prm_razcicom_id").empty();
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
                       $("#prm_razcicom_id").empty();
                   }
                   $.each(json[0].nocomida,function(i,data){
                       $('#prm_razcicom_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#prm_estagest_id").change(function(){
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

       $("#prm_estalact_id").change(function(){
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

       $("#prm_estalact_id").change(function(){
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

       $("#prm_tienhijo_id").change(function(){
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

       $("#prm_tieprsal_id").change(function(){
           $("#prm_probsalu_id").empty();
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
                       $("#prm_probsalu_id").empty();
                   }
                   $.each(json.prosalud,function(i,data){
                       $('#prm_probsalu_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           }
       });

       $("#prm_consmedi_id").change(function(){
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
                       $("#prm_tiensisb_id").empty();
                   }
                   $.each(json[0].pusisben,function(i,data){
                       $('#prm_tiensisb_id').append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           // }
       }
       @if(old('d_puntaje_sisben')!=null)
       f_sisben({{ old('d_puntaje_sisben') }},{{ old('prm_tiensisb_id')  }});
       @endif
       $("#d_puntaje_sisben").keyup(function(){
           $("#prm_tiensisb_id").empty();
           f_sisben($(this).val(),'');
       });

       //MASCARA PUNTAJE SISBEN
       $('#d_puntaje_sisben').mask('00.00');

   });
</script>
