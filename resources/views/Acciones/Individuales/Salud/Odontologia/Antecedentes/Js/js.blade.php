<script>
  $(document).ready(function(){
    $('#diagnostico').select2({
      language: "es"
    });

    $('#medicamento').select2({
      language: "es"
    });
    

    

    if('{{$todoxxxx['modeloxx']->alergia_id}}'==227){
      $("#cual_div").show();
    }else{
      $("#cual_div").hide();
    }

    if('{{$todoxxxx['modeloxx']->enfactu_id}}'==227){
      $("#diag_div").show();
    }else{
      $("#diag_div").hide();
    }

    if('{{$todoxxxx['modeloxx']->toma_id}}'==227){
      $("#medic_div").show();
    }else{
      $("#medic_div").hide();
    }
     
        $('input[name="alergia_id"]').click(function(){
        var inputValue = $(this).attr("value");
        var value = $(this).val();
        console.log(value);
        console.log(inputValue+" hola");
        if(inputValue==227){
            $("#cual_div").show();
        }else{
            $("#cual_div").hide();
        }
        });
     

        $("input[name=enfactu_id]").change(function(){
        var value = $(this).val();

        console.log(value);
        if(value==227){
            $("#diag_div").show();
        }else{
            $("#diag_div").hide();
        }
        });

        $("input[name=toma_id]").change(function(){
        var value = $(this).val();

        console.log(value);
        if(value==227){
            $("#medic_div").show();
        }else{
            $("#medic_div").hide();
        }
        });
     
        

  });

  


   
</script>
