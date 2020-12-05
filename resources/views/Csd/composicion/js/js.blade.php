<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
         var f_ajax=function(dataxxxx,pselecte){
            $.ajax({
                url : dataxxxx.url,
                data : dataxxxx.data,
                type : dataxxxx.type,
                dataType : dataxxxx.datatype,
                success : function(json) {
                    $('#aniosxxx').val(json[0].edadxxxx)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        @if(isset($todoxxxx['nacicomp']))
        $('#d_nacimiento').mask('0000-00-00');
        $("#d_nacimiento").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            maxDate:'+0d',
            yearRange: "-70:+0",
            onSelect: function(dateText) {
                dataxxxx={
                    url:"{{ route('ajaxx.edad') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'fechaxxx':$(this).val(),
                        opcionxx:1,
                    },
                    type:'POST',
                    datatype:'json',

                }
                f_ajax(dataxxxx,'');
            }
        });
        @endif
        var f_combo=function(dataxxxx){
            $.ajax({
                url : "{{ route($todoxxxx['routxxxx'].'.depamuni',$todoxxxx['parametr']) }}",
                data :dataxxxx.dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $(json.limpiarx).empty();
                    $.each(json.comboxxx,function(i,data){
                        var selected='';
                        if(data.valuexxx==dataxxxx.selected){
                            selected='selected';
                        }
                        $('#'+json.campoxxx).append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problemadddd');
                },
            });
        }
        $('#s_documento').mask('000000000000');
        @if(old('sis_pai_id')!=null)
            f_combo({dataxxxx:{tipoxxxx:'sis_pai_id', padrexxx:{{ old('sis_pai_id') }}  } , selected:"{{ old('sis_departamento_id') }}"  });
            @if(old('sis_departamento_id')!=null)
                f_combo({dataxxxx:{tipoxxxx:'sis_departamento_id', padrexxx:{{ old('sis_departamento_id') }}  } , selected:"{{ old('sis_municipio_id') }}"  });
            @endif
        @endif
        //MASCARA DOCUMENTOS

        $(".listarxx").change(function(){
            var sispaisid=$(this).prop('id');
            if(sispaisid=='sis_pai_id' && $(this).val()!=2){
                f_combo({dataxxxx:{tipoxxxx:'sis_pai_id',padrexxx:1},selected:''});
                f_combo({dataxxxx:{tipoxxxx:'sis_departamento_id',padrexxx:1},selected:''});
            }else{
                f_combo({dataxxxx:{tipoxxxx:sispaisid,padrexxx:$(this).val()},selected:''});
            }

        });


        var regisalu = function(valuexxx, selectep) {
            $("#prm_cualeps_id").empty();
            $.ajax({
                url: "{{ route('ajaxx.regimensalud') }}",
                data: {
                    _token: $("input[name='_token']").val(),
                    'padrexxx': valuexxx
                },
                type: 'POST',
                dataType: 'json',
                success: function(json) {
                    $.each(json[0].entidadx, function(i, data) {
                        var selected = '';
                        if (selectep == data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#prm_cualeps_id').append('<option ' + selected + '  value="' + data.valuexxx + '">' + data.optionxx + '</option>')

                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var prmresal = "{{old('prm_regimen_id')}}";
        if (prmresal != '') {
            regisalu(prmresal, "{{old('prm_cualeps_id')}}");
        }
        $("#prm_regimen_id").change(function() {
            regisalu($(this).val(), '');
        });


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
                       $("#prm_sisben_id").empty();
                   }
                   $.each(json[0].pusisben,function(i,data){
                       $('#prm_sisben_id').append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                   });
               },
               error : function(xhr, status) {
                   alert('Disculpe, existió un problema');
               },
           });
           // }
       }
       @if(old('sisben')!=null)
       f_sisben({{ old('sisben') }},{{ old('prm_sisben_id')  }});
       @endif
       $("#sisben").keyup(function(){
           $("#prm_sisben_id").empty();
           $("#prm_sisben_id").append('<option value="">Seleccione</>')
           f_sisben($(this).val(),'');
       });

       //MASCARA PUNTAJE SISBEN
       $('#sisben').mask('00.00');


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
init_contadorTa("observaciones", "contaobservaciones", 4000);

function init_contadorTa(idtextarea, idcontador, max) {
    $("#" + idtextarea).keyup(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
    $("#" + idtextarea).change(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
}

function updateContadorTa(idtextarea, idcontador, max) {
    var contador = $("#" + idcontador);
    var ta = $("#" + idtextarea);
    contador.html("0/" + max);
    contador.html(ta.val().length + "/" + max);
    if (parseInt(ta.val().length) > max) {
        ta.val(ta.val().substring(0, max - 1));
        contador.html(max + "/" + max);
    }

}


function doc(valor){
        if(valor == 227){
            document.getElementById("prm_cual_id").hidden=false;
        }else{
            document.getElementById("prm_cual_id").hidden=true;
            }
    }

</script>
