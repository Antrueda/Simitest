<script>
   $(function(){
        var f_campos=function(valuexxx){
            $.ajax({
                url : "{{ route('diagnostico.nivel') }}",
                data : { 
                    padrexxx:valuexxx,
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $("#nivelxxx").text(json.nivelxxx);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            
        }

        
        $("#i_prm_categoria_id").change(function(){
            f_campos($(this).val(),'');
        });

    });
</script>   