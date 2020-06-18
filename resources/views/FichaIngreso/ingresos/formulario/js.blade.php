<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){ 
        var f_generar_ingresos = function(dataxxxx){
            $("#trabinfo_id, #trabinfo_id, #noingres_id, #relabora_id").empty();
            $("#trabinfo_id, #trabinfo_id, #noingres_id, #relabora_id").append('<option value="">Seleccione</>')
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
                        $('#s_trabajo_formal,#idibuempl,#imebuempl,#ianbuempl').val(json[0].valuexxx)
                    }
                    if(json[0].trabinfo[0].valuexxx==1){
                        $("#trabinfo_id").empty();
                    }
                    if(json[0].otractiv[0].valuexxx==1){
                        $("#trabinfo_id").empty();
                    }
                    if(json[0].razonoge[0].valuexxx==1){
                        $("#noingres_id").empty();
                    }
                    if(json[0].tiporela[0].valuexxx==1){
                        $("#relabora_id").empty();
                    }
                    $('#s_trabajo_formal').prop('readonly',json[0].trabform)
                    $('#idibuempl,#imebuempl,#ianbuempl').prop('readonly',json[0].hacecuan)
                    
                    $.each(json[0].trabinfo,function(i,data){
                        var selected = '';
                        if(dataxxxx.trivalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#trabinfo_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].otractiv,function(i,data){  
                        var selected = '';
                        if(dataxxxx.travalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#trabinfo_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].razonoge,function(i,data){  
                        var selected = '';
                        if(dataxxxx.noivalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#noingres_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].tiporela,function(i,data){  
                        var selected = '';
                        if(dataxxxx.relvalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#relabora_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        }

        @if(old('acgeingr_id')!=null || isset($todoxxxx['modeloxx']))
            f_generar_ingresos({limpiaxx:false,
            valuexxx:{{ isset($todoxxxx['modeloxx']->acgeingr_id)? $todoxxxx['modeloxx']->acgeingr_id: (old('acgeingr_id') !=null ? old('acgeingr_id'):0)}}, 
            trivalue:{{ isset($todoxxxx['modeloxx']->trabinfo_id)? $todoxxxx['modeloxx']->trabinfo_id: (old('trabinfo_id') !=null ? old('acgeingr_id'):0)}}, 
            travalue:{{ isset($todoxxxx['modeloxx']->trabinfo_id)? $todoxxxx['modeloxx']->trabinfo_id: (old('trabinfo_id') !=null ? old('acgeingr_id'):0)}}, 
            noivalue:{{ isset($todoxxxx['modeloxx']->noingres_id)? $todoxxxx['modeloxx']->noingres_id: (old('noingres_id') !=null ? old('acgeingr_id'):0)}},
            relvalue:{{ isset($todoxxxx['modeloxx']->relabora_id)? $todoxxxx['modeloxx']->relabora_id: (old('relabora_id') !=null ? old('acgeingr_id'):0)}}}
);  
        @endif
        $("#acgeingr_id").change(function(){ 
            f_generar_ingresos({valuexxx:$(this).val(), trivalue:'', travalue:'', noivalue:'', relvalue:'', limpiaxx:true});  
        });

        $("#jogeingr_id").change(function(){
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