<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        $('.select2').select2({
            placeholder: "Seleccione",
            language: "es"
        });
    });

   //evitar enviar formulario duplicado
   $('#formulario, input[type="submit"]').on('submit',function(){
        $('#formulario, input[type="submit"]').attr('disabled','true');
    })

</script>
