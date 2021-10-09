<script>
   $(function(){


        var f_porcentaje=function(valuexxx,thisxxxx){
            if(valuexxx!=''){
                $.ajax({
                    url : "{{ route('ag.acciongestion.porcentaje',$todoxxxx['parametr']) }}",
                    data : {
                        i_porcentaje:valuexxx,
                    },
                    type : 'GET',
                    dataType : 'json',
                    success : function(json) {
                         $(thisxxxx).prop('title',json.msnxxxxx);
                         $(thisxxxx).popover(json.mostrarx);
                         $(thisxxxx).val(json.faltante)
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },

                });
            }
        }



        var f_campos=function(valuexxx,psalecte,optionxx,campoxxx){
            if(valuexxx!=''){
                $.ajax({
                    url : "{{ route('ajaxx.acciongestion') }}",
                    data : {
                        padrexxx:valuexxx,
                        optionxx:optionxx,
                    },
                    type : 'GET',
                    dataType : 'json',
                    success : function(json) {
                        $.each(json,function(i,d){
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


        $('#sis_docfuen_id').change(function(){
            $('#sis_actividad_id, #sis_fsoporte_id').empty();
            if($(this).val()!=''){
                $('#sis_fsoporte_id').append('<option value="">Seleccione</option>');
                f_campos($(this).val(),'',1,'sis_actividad_id');
            }else{
                $('#sis_actividad_id, #sis_fsoporte_id').append('<option value="">Seleccione</option>');
            }
        });
        $('#sis_actividad_id').change(function(){
            $('#sis_fsoporte_id').empty();
            if($(this).val()!=''){
            f_campos($(this).val(),'',2,'sis_fsoporte_id');
            }else{
                $('#sis_fsoporte_id').append('<option value="">Seleccione</option>');
            }
        });

        $('#i_porcentaje').keyup(function(event){
          f_porcentaje($(this).val(),this);
        });
    });
</script>
