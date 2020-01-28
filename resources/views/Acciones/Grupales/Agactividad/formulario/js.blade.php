<script>
   $(function(){
        var f_campos=function(dataxxxx){
            $.ajax({
                url : "{{ url('api/ag/espacios') }}",
                data : { 
                    padrexxx:dataxxxx.valuexxx,
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $("#"+json.campoxxx).attr("readonly", json.readonly); 
                    //$("#"+json.campoxxx).val('');
                    getCombo(dataxxxx,json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });            
        }

        @if(old('sis_depdestino_id')!=null)
        f_campos({valuexxx:"{{old('sis_depdestino_id')}}",psalecte:"{{old('i_prm_lugar_id')}}"});
        @endif
        $('#sis_depdestino_id').change(function(){ 
            f_campos({valuexxx:$(this).val(),psalecte:''});
        });

        $('#area_id').change(function(){ 
           // f_campos({valuexxx:$(this).val(),psalecte:''});
        });
        $('#ag_tema_id').change(function(){ 
            //f_campos({valuexxx:$(this).val(),psalecte:''});
        });
        $('#ag_taller_id').change(function(){ 
            //f_campos({valuexxx:$(this).val(),psalecte:''});
        });

      


        // ag_sttema_id
        
        // ag_sttran_id
    });
</script>   