<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });

       
    @if (isset($todoxxxx['puedetiempo'])) 
        let fechaactual = '<?= $todoxxxx['puedetiempo']['actualxx'] ?>';
            fechaactual = new Date(fechaactual +'T00:00:00');
        
        let fechalimite = '<?= $todoxxxx['puedetiempo']['fechlimi'] ?>';
            fechalimite = new Date(fechalimite +'T00:00:00')

        $('#fecha').mask('0000-00-00');
        let datepick = $("#fecha");
        datepick.datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: new Date(fechalimite),
            maxDate: new Date(fechaactual),
        });
    @endif

        //evitar enviar formulario duplicado
        $('#formulario, input[type="submit"]').on('submit',function(){
            $('#formulario, input[type="submit"]').attr('disabled','true');
        })
    });

</script>
