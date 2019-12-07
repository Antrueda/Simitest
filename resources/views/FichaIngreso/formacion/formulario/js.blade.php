<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        var f_estudia = function(valuexxx){
            $("#i_prm_jornada_estudio_id, #i_prm_naturaleza_entidad_id, #sis_institucion_edu_id").empty();
            $("#i_prm_jornada_estudio_id, #i_prm_naturaleza_entidad_id, #sis_institucion_edu_id").append('<option value="">Seleccione</>')
            if(valuexxx != ''){
                $.ajax({
                url : "{{ route('ajaxx.estudiando') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#i_dias_sin_estudio').prop('readonly',json[0].dianoest);
                    $('#i_meses_sin_estudio').prop('readonly',json[0].mesnoest);
                    $('#i_anos_sin_estudio').prop('readonly',json[0].anonoest);
                    if(json[0].jornadax[0].valuexxx==1){
                        $("#i_prm_jornada_estudio_id, #i_prm_naturaleza_entidad_id, #sis_institucion_edu_id").empty();
                    }
                    $.each(json[0].jornadax,function(i,data){                            
                        $('#i_prm_jornada_estudio_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    }); 
                    $.each(json[0].naturale,function(i,data){                            
                        $('#i_prm_naturaleza_entidad_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].instituc,function(i,data){                            
                        $('#sis_institucion_edu_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }
        @if(old('i_prm_estudia_id')!=null)
            f_estudia({{ old('i_prm_estudia_id') }});
        @endif

        $("#i_prm_estudia_id").change(function(){   
            f_estudia($(this).val());
        });

        //MASCARA 2 DIGITOS
        $('#i_dias_sin_estudio').mask('00');
        $('#i_meses_sin_estudio').mask('00');
        $('#i_anos_sin_estudio').mask('00');
    });

function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>