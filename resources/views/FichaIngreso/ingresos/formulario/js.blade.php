<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){ 
        var f_generar_ingresos = function(dataxxxx){
            $("#i_prm_trabajo_informal_id, #i_prm_otra_actividad_id, #i_prm_razon_no_genera_ingreso_id, #i_prm_tipo_relacion_laboral_id").empty();
            $("#i_prm_trabajo_informal_id, #i_prm_otra_actividad_id, #i_prm_razon_no_genera_ingreso_id, #i_prm_tipo_relacion_laboral_id").append('<option value="">Seleccione</>')
            if(dataxxxx.valuexxx!=''){
                $.ajax({
                url : "{{ route('ajaxx.trabajogenera') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':dataxxxx.valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(dataxxxx.limpiaxx==true){
                        $('#s_trabajo_formal,#i_dias_buscando_empleo,#i_meses_buscando_empleo,#i_anos_buscando_empleo').val(json[0].valuexxx)
                    }
                    if(json[0].trabinfo[0].valuexxx==1){
                        $("#i_prm_trabajo_informal_id").empty();
                    }
                    if(json[0].otractiv[0].valuexxx==1){
                        $("#i_prm_otra_actividad_id").empty();
                    }
                    if(json[0].razonoge[0].valuexxx==1){
                        $("#i_prm_razon_no_genera_ingreso_id").empty();
                    }
                    if(json[0].tiporela[0].valuexxx==1){
                        $("#i_prm_tipo_relacion_laboral_id").empty();
                    }
                    $('#s_trabajo_formal').prop('readonly',json[0].trabform)
                    $('#i_dias_buscando_empleo,#i_meses_buscando_empleo,#i_anos_buscando_empleo').prop('readonly',json[0].hacecuan)
                    
                    $.each(json[0].trabinfo,function(i,data){
                        var selected = '';
                        if(dataxxxx.trivalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#i_prm_trabajo_informal_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].otractiv,function(i,data){  
                        var selected = '';
                        if(dataxxxx.travalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#i_prm_otra_actividad_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].razonoge,function(i,data){  
                        var selected = '';
                        if(dataxxxx.noivalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#i_prm_razon_no_genera_ingreso_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].tiporela,function(i,data){  
                        var selected = '';
                        if(dataxxxx.relvalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#i_prm_tipo_relacion_laboral_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        }

        @if(old('i_prm_actividad_genera_ingreso_id')!=null || isset($todoxxxx['modeloxx']))
            f_generar_ingresos({limpiaxx:false,
            valuexxx:{{ isset($todoxxxx['modeloxx']->i_prm_actividad_genera_ingreso_id)? $todoxxxx['modeloxx']->i_prm_actividad_genera_ingreso_id: (old('i_prm_actividad_genera_ingreso_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}}, 
            trivalue:{{ isset($todoxxxx['modeloxx']->i_prm_trabajo_informal_id)? $todoxxxx['modeloxx']->i_prm_trabajo_informal_id: (old('i_prm_trabajo_informal_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}}, 
            travalue:{{ isset($todoxxxx['modeloxx']->i_prm_otra_actividad_id)? $todoxxxx['modeloxx']->i_prm_otra_actividad_id: (old('i_prm_otra_actividad_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}}, 
            noivalue:{{ isset($todoxxxx['modeloxx']->i_prm_razon_no_genera_ingreso_id)? $todoxxxx['modeloxx']->i_prm_razon_no_genera_ingreso_id: (old('i_prm_razon_no_genera_ingreso_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}},
            relvalue:{{ isset($todoxxxx['modeloxx']->i_prm_tipo_relacion_laboral_id)? $todoxxxx['modeloxx']->i_prm_tipo_relacion_laboral_id: (old('i_prm_tipo_relacion_laboral_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}}}
);  
        @endif
        $("#i_prm_actividad_genera_ingreso_id").change(function(){ 
            f_generar_ingresos({valuexxx:$(this).val(), trivalue:'', travalue:'', noivalue:'', relvalue:'', limpiaxx:true});  
        });

        $("#i_prm_jornada_genera_ingreso_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.jornadagenera') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#s_hora_inicial').val(json.valuexxx)
                    $('#s_hora_inicial').prop('readonly',json.horainix)
                    $('#s_hora_final').val(json.valuexxx) 
                    $('#s_hora_final').prop('readonly',json.horafinx)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

    });

function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>