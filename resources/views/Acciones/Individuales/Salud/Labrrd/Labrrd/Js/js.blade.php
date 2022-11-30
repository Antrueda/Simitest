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

            $('#fechdili').mask('0000-00-00');
            let datepick = $("#fechdili");
            datepick.datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                minDate: new Date(fechalimite),
                maxDate: new Date(fechaactual),
            });
        @endif

   

        
        espacioExterno();
        $('#sis_atenc_id').change(() => {
            espacioExterno();
        });

        
        function espacioExterno() {
            require = $("#sis_atenc_id");
            if (require.val()== '1') {
                $('#lugar_externo').attr('disabled', false);
            }else{
                $('#lugar_externo').attr('disabled', true);
            }
        }
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

    init_contadorTa("accion_desarrolla", "contador_accion_desarrolla", 4000);
    init_contadorTa("obs_patron_con", "contador_obs_patron_con", 4000);
    init_contadorTa("accion_curso", "contador_accion_curso", 4000);
    init_contadorTa("observacion", "contador_observacion", 4000);

    //evitar enviar formulario duplicado
    $('#formulario, input[type="submit"]').on('submit',function(){
        $('#formulario, input[type="submit"]').attr('disabled','true');
    })

</script>
