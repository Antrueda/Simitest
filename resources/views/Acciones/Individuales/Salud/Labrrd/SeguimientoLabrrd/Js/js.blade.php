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

        var check=$("#check_observacion_afront").is(":checked");
        ActivarCaja(check,'observacion_afront')
        $('#check_observacion_afront').change(() => {
            var check=$("#check_observacion_afront").is(":checked");
            ActivarCaja(check,'observacion_afront')
        });

        var check=$("#check_observacion_impu").is(":checked");
            ActivarCaja(check,'observacion_impu')
        $('#check_observacion_impu').change(() => {
            var check=$("#check_observacion_impu").is(":checked");
            ActivarCaja(check,'observacion_impu')
        });

        var check=$("#check_observacion_violen").is(":checked");
            ActivarCaja(check,'observacion_violen')
        $('#check_observacion_violen').change(() => {
            var check=$("#check_observacion_violen").is(":checked");
            ActivarCaja(check,'observacion_violen')
        });
        
        var check=$("#check_observacion_auto").is(":checked");
            ActivarCaja(check,'observacion_auto')
        $('#check_observacion_auto').change(() => {
            var check=$("#check_observacion_auto").is(":checked");
            ActivarCaja(check,'observacion_auto')
        });
        
        function ActivarCaja(value,input){
            if (value) {
                $('#'+input).attr('disabled', false);
            }else{
                $('#'+input).attr('disabled', true);
            }
        }
        
    });

    function espacioExterno() {
        require = $("#sis_atenc_id");
        if (require.val()== '1') {
            $('#lugar_externo').attr('disabled', false);
        }else{
            $('#lugar_externo').attr('disabled', true);
        }
    }

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

    init_contadorTa("observacion_pro", "contador_observacion_pro", 4000);
    init_contadorTa("observacion_afront", "contador_observacion_afront", 4000);
    init_contadorTa("observacion_impu", "contador_observacion_impu", 4000);
    init_contadorTa("observacion_violen", "contador_observacion_violen", 4000);
    init_contadorTa("observacion_auto", "contador_observacion_auto", 4000);

</script>
