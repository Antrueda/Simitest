<script>
    $(function(){
         var f_campos=function(valuexxx){
            $.ajax({
                url : "{{ route('inva.valoracion.valoracion',[$todoxxxx['paddrexx']->id]) }}",
                data : {
                    avancexx: valuexxx,
                    cateactu: $('#i_prm_cactual_id').val(),
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                  $.each(json.nivelxxx,function(i,d){
                      $('#i_prm_nivel_id').append('<option  value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                  });
                  $.each(json.categori,function(i,d){
                      $('#i_prm_categoria_id').append('<option  value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                  });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
         }
         $('#i_prm_avance_id').change(function(){
            $('#i_prm_nivel_id,#i_prm_categoria_id').empty();
            f_campos($(this).val());
         });
     });
 </script>
