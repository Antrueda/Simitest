<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
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

    init_contadorTa("ante_clinico", "contador_ante_clinico", 4000);
    init_contadorTa("obs_clinico", "contador_obs_clinico", 4000);
    init_contadorTa("obs_higiene", "contador_obs_higiene", 4000);
    init_contadorTa("obs_general", "contador_obs_general", 4000);

       //evitar enviar formulario duplicado
       $('#formulario, input[type="submit"]').on('submit',function(){
            $('#formulario, input[type="submit"]').attr('disabled','true');
        })

</script>
