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
                    $('#aniosxxx').text(json[0].edadxxxx)
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
            f_combo({dataxxxx:{tipoxxxx:'sis_pai_id', padrexxx:{{ old('sis_pai_id') }}  } , selected:"{{ old('sis_departam_id') }}"  });
            @if(old('sis_departam_id')!=null)
                f_combo({dataxxxx:{tipoxxxx:'sis_departam_id', padrexxx:{{ old('sis_departam_id') }}  } , selected:"{{ old('sis_municipio_id') }}"  });
            @endif
        @endif
        //MASCARA DOCUMENTOS

        $(".listarxx").change(function(){
            var sispaisid=$(this).prop('id');
            if(sispaisid=='sis_pai_id' && $(this).val()!=2){
                f_combo({dataxxxx:{tipoxxxx:'sis_pai_id',padrexxx:1},selected:''});
                f_combo({dataxxxx:{tipoxxxx:'sis_departam_id',padrexxx:1},selected:''});
                f_combo({dataxxxx:{tipoxxxx:'sis_municipio_id',padrexxx:1},selected:''});
            }else{
                f_combo({dataxxxx:{tipoxxxx:sispaisid,padrexxx:$(this).val()},selected:''});
            }

        });

        $('#edadxxxx').on('change keyup','#aniosxxx',function(){
        $.ajax({
            url: "{{ route($todoxxxx['routxxxx'].'.cafecnac',$todoxxxx['parametr']) }}",
            data: {
                'padrexxx': $(this).val()
            },
            type: 'GET',
            dataType: 'json',
            success: function(json) {
               $('#d_nacimiento').val(json.fechaxxx)
               $('#aniosxxx').val(json.edadxxxx)
            },
            error: function(xhr, status) {
                alert('Disculpe, existió un problema al calcular la fecha de nacimiento');
            },
        });
    });
    var f_datacomb=function(dataxxxx){
        $.each(dataxxxx.dataxxxx,function(i,data){
            var selected='';
            if(data.valuexxx==dataxxxx.selected){
                selected='selected';
            }
            $('#'+dataxxxx.campoxxx).append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>');
        });
    }
    var f_nadocume=function(dataxxxx){
        $.ajax({
            url: "{{ route($todoxxxx['routxxxx'].'.nadocume',$todoxxxx['parametr']) }}",
            data: dataxxxx.dataxxxx,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                $('#'+json.paisxxxx[0]+',#'+json.departam[0]+',#'+json.municipi[0]).empty();
                if(json.tipoxxxx){
                    $('#'+json.campoxxx).empty();
                    f_datacomb({dataxxxx:json.comboxxx,selected:'',campoxxx:json.campoxxx})
                }
                $("#"+json.document).prop('readonly', json.readonly);
                $("#"+json.document).val(json.cedulaxx);
                f_datacomb({dataxxxx:json.paisxxxx[1],selected:'',campoxxx:json.paisxxxx[0]});
                f_datacomb({dataxxxx:json.departam[1],selected:'',campoxxx:json.departam[0]});
                f_datacomb({dataxxxx:json.municipi[1],selected:'',campoxxx:json.municipi[0]});
            },
            error: function(xhr, status) {
                alert('Disculpe, existió un problema al calcular el número de documento');
            },
        });
    }

    $('#i_prm_parentesco_id').change(function(){
      if($('#tablaselect').val()=='NO'){
        f_nadocume({dataxxxx:{padrexxx:$(this).val(),tipoxxxx:1},selected:''});
      }
    });
    $('#prm_tipodocu_id').change(function(){
        f_nadocume({dataxxxx:{padrexxx:$(this).val(),tipoxxxx:2},selected:''});
    });

});

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

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
