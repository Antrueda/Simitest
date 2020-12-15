<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){ 
        var f_tipo_contacto = function(dataxxxx){
            $("#i_prm_contacto_opcion_id, #i_prm_motivo_contacto_id").empty();
            if(dataxxxx.valuexxx!=''){
                $.ajax({
                url : "{{ route('ajaxx.tipocontacto') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':dataxxxx.valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(dataxxxx.limpiaxx==true){
                        $('#s_contacto_condicion,#s_entidad_remite,#d_fecha_remite_id').val(json[0].valuexxx)    
                    }
                    if(json[0].conopcio[0].valuexxx==1){
                        $("#i_prm_contacto_opcion_id").empty();
                    }
                    if(json[0].motprote[0].valuexxx==1){
                        $("#i_prm_motivo_contacto_id").empty();
                    }
                    $('#s_contacto_condicion').prop('readonly',json[0].concondi)
                    $('#s_entidad_remite,#d_fecha_remite_id').prop('readonly',json[0].infprote)
                    
                    $.each(json[0].conopcio,function(i,data){    
                        var selected = '';
                        if(dataxxxx.trivalue==data.valuexxx) {
                            selected = 'selected';
                        }                     
                        $('#i_prm_contacto_opcion_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].motprote,function(i,data){  
                        var selected = '';
                        if(dataxxxx.noivalue==data.valuexxx) {
                            selected = 'selected';
                        }                                               
                        $('#i_prm_motivo_contacto_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        }
   
        @if(old('i_prm_tipo_contacto_id')!=null || isset($todoxxxx['modeloxx']))
            f_tipo_contacto({limpiaxx:false,
            valuexxx:{{ isset($todoxxxx['modeloxx']->i_prm_tipo_contacto_id)? $todoxxxx['modeloxx']->i_prm_tipo_contacto_id: (old('i_prm_tipo_contacto_id') !=null ? old('i_prm_tipo_contacto_id'):0)}}, 
            trivalue:{{ isset($todoxxxx['modeloxx']->i_prm_contacto_opcion_id)? $todoxxxx['modeloxx']->i_prm_contacto_opcion_id: (old('i_prm_contacto_opcion_id') !=null ? old('i_prm_contacto_opcion_id'):0)}}, 
            noivalue:{{ isset($todoxxxx['modeloxx']->i_prm_motivo_contacto_id)? $todoxxxx['modeloxx']->i_prm_motivo_contacto_id: (old('i_prm_motivo_contacto_id') !=null ? old('i_prm_motivo_contacto_id'):0)}}}
);  
        @endif    
        $("#i_prm_tipo_contacto_id").change(function(){ 
            f_tipo_contacto({valuexxx:$(this).val(), trivalue:'', travalue:'', noivalue:'',limpiaxx:true});  
        });

    });

</script>
