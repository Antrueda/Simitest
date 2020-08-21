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
        @if(old('sis_docfuen_id')!=null)
        $('#sis_actividad_id').empty();
            f_campos({{ old('sis_docfuen_id') }},{{ old('sis_actividad_id') }},1,'sis_actividad_id');
        @endif

        $('#sis_docfuen_id').change(function(){
            $('#sis_actividad_id').empty();
            f_campos($(this).val(),'',1,'sis_actividad_id');
        });

        $('#i_porcentaje').keyup(function(event){
          f_porcentaje($(this).val(),this);
        });
    });
</script>
