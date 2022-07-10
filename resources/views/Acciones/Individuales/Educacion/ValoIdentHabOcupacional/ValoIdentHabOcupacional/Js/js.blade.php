<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        $('.select2').select2({
            placeholder: "Seleccione",
            language: "es"
        });

        //fecha 
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
       
        f_remitir();
        $('#prm_remitir').change(() => {
            f_remitir();
        });
        function ocultarFields() {
            $('#prm_interinstitu_field, #prm_intrainstitucional_field')
                    .addClass('d-none');
            $('#interinstitu, #intrainstitucional').attr('disabled', true);
        }
        
        function f_remitir() {
            activida = $("#prm_remitir");
            if (activida.val()== '227') {
                $('#prm_interinstitu_field').removeClass('d-none');
                $('#interinstitu').attr('disabled', false);
                $('#prm_intrainstitucional_field').removeClass('d-none');
                $('#intrainstitucional').attr('disabled', false);
            }else{
                ocultarFields();
            }
        }

        $('.select2-container').css('width', '100%');
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

    init_contadorTa("antecede_clin", "contador_antecede_clin", 4000);
    init_contadorTa("obs_sustanpsico", "contador_obs_sustanpsico", 4000);
    init_contadorTa("obs_habitos", "contador_obs_habitos", 4000);
    init_contadorTa("antece_ocupa", "contador_antece_ocupa", 4000);
    init_contadorTa("antece_tiempo", "contador_antece_tiempo", 4000);
    init_contadorTa("prospeccion", "contador_prospeccion", 4000);
    init_contadorTa("familia_nucleo", "contador_familia_nucleo", 4000);
    init_contadorTa("conc_ocupa", "contador_conc_ocupa", 4000);
    init_contadorTa("interinstitu", "contador_obs_interinstitu", 120);

    @foreach ($todoxxxx['areasubs'] as $key => $area)
        init_contadorTa("descripcion{{$area->id}}", "contador_descripcion{{$area->id}}", 4000);
    @endforeach

</script>
