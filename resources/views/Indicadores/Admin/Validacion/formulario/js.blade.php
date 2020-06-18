<script>
   $(function(){
        var f_campos=function(valuexxx,psalecte,optionxx,campoxxx){
            if(valuexxx!=''){
                $.ajax({
                    url : "{{ route('ajaxx.indicadores') }}",
                    data : { 
                        _token: $("input[name='_token']").val(),
                        padrexxx:valuexxx,
                        optionxx:optionxx
                    },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        $.each(json.indicado,function(i,d){
                            var selected='';
                            if(psalecte==d.valuexxx){
                                selected='selected';
                            }
                            $('#'+campoxxx).append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
            
        }

        @if(old('area_id')!=null)
        f_campos({{ old('area_id') }},{{ old('in_indicador_id')  }},1,'in_indicador_id');
            @if(old('in_indicador_id')!=null)
                f_campos({{ old('in_indicador_id') }},{{ old('in_fuente_id')  }},8,'in_fuente_id');
               
            @endif
        @endif
        @if(old('sis_docufuen_id')!=null)
            f_campos({{ old('sis_docufuen_id') }},{{ old('sis_actividad_id')  }},4,'sis_actividad_id');
        @endif
        @if(old('sis_tabla_id')!=null)
            f_campos({{ old('sis_tabla_id') }},{{ old('sis_campo_tabla_id')  }},5,'sis_campo_tabla_id');
        @endif
        $('#area_id').change(function(){
            $('#in_indicador_id,#in_fuente_id').empty();
            $('#in_indicador_id,#in_fuente_id').append('<option value="">Seleccione</option>');
            f_campos($(this).val(),'',1,'in_indicador_id');
        });
        $('#in_indicador_id').change(function(){
            $('#in_fuente_id').empty();
            $('#in_fuente_id').append('<option value="">Seleccione</option>');
            f_campos($(this).val(),'',8,'in_fuente_id');
        });
        
        $('#sis_tabla_id').change(function(){
            $('#sis_campo_tabla_id').empty();
            $('#sis_campo_tabla_id').append('<option value="">Seleccione</option>');
            f_campos($(this).val(),'',5,'sis_campo_tabla_id');
        });

        $('.pasar').click(function() { 
            return !$('#origen option:selected').remove().appendTo('#i_prm_respuesta_id'); 
        });  
		$('.quitar').click(function() { 
            return !$('#i_prm_respuesta_id option:selected').remove().appendTo('#origen'); 
            });
		$('.pasartodos').click(function() { 
            $('#origen option').each(function() { 
                $(this).remove().appendTo('#i_prm_respuesta_id');    
            }); 
        });
		$('.quitartodos').click(function() { 
            $('#i_prm_respuesta_id option').each(function() { 
                $(this).remove().appendTo('#origen'); 
            }); 
        });


    });
</script>   