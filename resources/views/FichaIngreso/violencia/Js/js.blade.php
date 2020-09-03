<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        var f_combo=function(dataxxxx,campoxxx){
            $("#"+campoxxx).empty();
            $.each(dataxxxx,function(i,data){                            
                $("#"+campoxxx).append('<option '+
                data.selected+' value="'+
                data.valuexxx+'">'+
                data.optionxx+'</option>')
            }); 
        }
        $("#i_prm_condicion_presenta_id").change(function(){   
            $("#i_prm_depto_condicion_id,  #i_prm_tiene_certificado_id, #i_prm_depto_certifica_id").empty();
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.condespecial') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json[0].dptcondi[0].valuexxx==1){
                        $("#i_prm_municipio_certifica_id,#i_prm_municipio_condicion_id,#i_prm_depto_condicion_id,  #i_prm_tiene_certificado_id, #i_prm_depto_certifica_id").empty();
                    }
                    $.each(json[0].dptcondi,function(i,data){                            
                        $('#i_prm_depto_condicion_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    }); 
                    $.each(json[0].muncondi,function(i,data){                            
                            $('#i_prm_municipio_condicion_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].tiecerti,function(i,data){                            
                            $('#i_prm_tiene_certificado_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].dptcerti,function(i,data){                            
                            $('#i_prm_depto_certifica_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].muncerti,function(i,data){                            
                            $('#i_prm_municipio_certifica_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        var f_ocultambito = function(valuexxx){
            $("#i_prm_familiar_fisica_id, #i_prm_familiar_psico_id, #i_prm_familiar_sexual_id, #i_prm_familiar_econo_id, #i_prm_amistad_fisica_id, #i_prm_amistad_psico_id, #i_prm_amistad_sexual_id, #i_prm_amistad_econo_id, #i_prm_pareja_fisica_id, #i_prm_pareja_psico_id, #i_prm_pareja_sexual_id, #i_prm_pareja_econo_id, #i_prm_comunidad_fisica_id, #i_prm_comunidad_psico_id, #i_prm_comunidad_sexual_id, #i_prm_comunidad_econo_id").empty();
            $("#i_prm_familiar_fisica_id, #i_prm_familiar_psico_id, #i_prm_familiar_sexual_id, #i_prm_familiar_econo_id, #i_prm_amistad_fisica_id, #i_prm_amistad_psico_id, #i_prm_amistad_sexual_id, #i_prm_amistad_econo_id, #i_prm_pareja_fisica_id, #i_prm_pareja_psico_id, #i_prm_pareja_sexual_id, #i_prm_pareja_econo_id, #i_prm_comunidad_fisica_id, #i_prm_comunidad_psico_id, #i_prm_comunidad_sexual_id, #i_prm_comunidad_econo_id").append('<option value="">Seleccione</>')
            if(valuexxx != ''){
                $.ajax({
                url : "{{ route('ajaxx.ocultambitos') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json[0].famfisic[0].valuexxx==1){  
                        $("#i_prm_familiar_fisica_id, #i_prm_familiar_psico_id, #i_prm_familiar_sexual_id, #i_prm_familiar_econo_id, #i_prm_amistad_fisica_id, #i_prm_amistad_psico_id, #i_prm_amistad_sexual_id, #i_prm_amistad_econo_id, #i_prm_pareja_fisica_id, #i_prm_pareja_psico_id, #i_prm_pareja_sexual_id, #i_prm_pareja_econo_id, #i_prm_comunidad_fisica_id, #i_prm_comunidad_psico_id, #i_prm_comunidad_sexual_id, #i_prm_comunidad_econo_id").empty();
                    }
                    $.each(json[0].famfisic,function(i,data){                            
                        $('#i_prm_familiar_fisica_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    }); 
                    $.each(json[0].fampsico,function(i,data){                            
                        $('#i_prm_familiar_psico_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].famsexua,function(i,data){                            
                        $('#i_prm_familiar_sexual_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].famecono,function(i,data){                            
                        $('#i_prm_familiar_econo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].amifisic,function(i,data){                            
                        $('#i_prm_amistad_fisica_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].amipsico,function(i,data){                            
                        $('#i_prm_amistad_psico_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].amisexua,function(i,data){                            
                        $('#i_prm_amistad_sexual_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].amiecono,function(i,data){                            
                        $('#i_prm_amistad_econo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].parfisic,function(i,data){                            
                        $('#i_prm_pareja_fisica_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].parpsico,function(i,data){                            
                        $('#i_prm_pareja_psico_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].parsexua,function(i,data){                            
                        $('#i_prm_pareja_sexual_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].parecono,function(i,data){                            
                        $('#i_prm_pareja_econo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].comfisic,function(i,data){                            
                        $('#i_prm_comunidad_fisica_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].compsico,function(i,data){                            
                        $('#i_prm_comunidad_psico_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].comsexua,function(i,data){                            
                        $('#i_prm_comunidad_sexual_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].comecono,function(i,data){                            
                        $('#i_prm_comunidad_econo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }
        @if(old('i_prm_presenta_violencia_id')!=null)
            f_ocultambito({{ old('i_prm_presenta_violencia_id') }});
        @endif

        $("#i_prm_presenta_violencia_id").change(function(){   
            f_ocultambito($(this).val());
        });
        var f_municipos=function(valuexxx,campoxxx,selected){
        
            $.ajax({
                url : "{{ route('ajaxx.municipios') }}",
                data : {
                    padrexxx:valuexxx,
                    pselecte:selected,
                    campoxxx:campoxxx
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    f_combo(json[0],json[1]);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        $('.departam').change(function(){
            var id = $(this).prop('id').split('_')[3];
           f_municipos($(this).val(),'i_prm_municipio_'+id+'_id','');
        });
        @if(old('i_prm_depto_condicion_id')!=null)
        f_municipos('{{ old("i_prm_depto_condicion_id") }}',
        'i_prm_municipio_condicion_id',
        '{{ old("i_prm_municipio_condicion_id") }}');
        @endif
        @if(old('i_prm_depto_condicion_id')!=null)
        f_municipos('{{ old("i_prm_depto_certifica_id") }}',
        'i_prm_municipio_certifica_id',
        '{{ old("i_prm_municipio_certifica_id") }}');
        @endif
var f_departamentos=function(valuexxx,campoxxx,selected){
        
            $.ajax({
                url : "{{ route('ajaxx.getDepartamentos') }}",
                data : {
                    padrexxx:valuexxx,
                    pselecte:selected,
                    campoxxx:campoxxx
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    f_combo(json[0],json[1]);
                    f_combo(json[2],json[3]);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        $('#i_prm_tiene_certificado_id').change(function(){
            f_departamentos($(this).val(),'i_prm_depto_certifica_id','')
        });
    });
</script>   