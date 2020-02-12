<script>
  $(function(){
      $('.todoxxxx').change(function(){
        if( $(this).is(':checked') ) {
          $(".hijosxxx").prop('checked', true);
        }else{
          $(".hijosxxx").prop('checked', false);
        }
      });

      
      $('.hijosxxx').change(function(){
        var contador=0;
        // Recorrer todos los checkbox para contar los que estan seleccionados
        $(".hijosxxx").each(function(){
          if($(this).is(":checked"))
            contador++;
        });
        var lugaresx={{ count($todoxxxx['lugaresx']) }}
        if(contador==lugaresx){
          $(".todoxxxx").prop('checked', true);
        }else{
          $(".todoxxxx").prop('checked', false);
        }
      });
 
 


    });



</script>