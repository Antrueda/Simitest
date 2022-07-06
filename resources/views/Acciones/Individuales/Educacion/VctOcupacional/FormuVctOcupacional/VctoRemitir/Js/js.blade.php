<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){

        $('.select2').select2({
            placeholder: "Seleccione",
            language: "es"
        });

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

        init_contadorTa("interinstitu", "contador_obs_interinstitu", 120);
    });


</script>
