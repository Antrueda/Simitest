<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        $('.select2').select2({
            language: "es",
            placeholder: "Seleccione",
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

            $('#fecha_vespa').mask('0000-00-00');
            let datevespa = $("#fecha_vespa");
            datevespa.datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                maxDate: new Date(fechaactual),
            });
        @endif
    });

    function init_contadorTa(idtextarea, idcontador, max) {
        $("#" + idtextarea).keyup(function() {
            updateContadorTa(idtextarea, idcontador, max);
        });
        $("#" + idtextarea).change(function() {
            updateContadorTa(idtextarea, idcontador, max);
        });
    }

    function updateContadorTa(idtextarea, idcontador, max) {
        var contador = $("#" + idcontador);
        var ta = $("#" + idtextarea);
        contador.html("0/" + max);
        contador.html(ta.val().length + "/" + max);
        if (parseInt(ta.val().length) > max) {
            ta.val(ta.val().substring(0, max - 1));
            contador.html(max + "/" + max);
        }
    }

    init_contadorTa("observaciones", "contador_observaciones", 4000);
    init_contadorTa("concepto", "contador_concepto", 4000);
</script>
