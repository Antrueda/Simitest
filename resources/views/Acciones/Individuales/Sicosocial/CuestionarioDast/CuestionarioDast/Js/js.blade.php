<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        let resultado_id = '{{old("resultado_id")}}';

        $('.select2').select2({
            language: "es",
            placeholder: "Seleccione",
        });
        
        let puntajes = JSON.parse('<?= json_encode($todoxxxx["puntajes"]) ?>');


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

        $('.preguntas select').change(function(){
            const mostrarResultado = document.getElementById("mostrarResultado");
            mostrarResultado.innerHTML = '';
        });

        $('#verresultado').click(function() {
            verresultados(puntajes);
        });

        if (resultado_id != '') {
            verresultados(puntajes);
        }

        f_vespa();
        $('#prm_requiere_vespa').change(() => {
            f_vespa();
        });
        function ocultarFields() {
            $('#fecha_vespa_field')
                    .addClass('d-none');
            $('#fecha_vespa').attr('disabled', true);
        }
        
        function f_vespa() {
            require = $("#prm_requiere_vespa");
            if (require.val()== '227') {
                $('#fecha_vespa_field').removeClass('d-none');
                $('#fecha_vespa').attr('disabled', false);
            }else{
                ocultarFields();
            }
        }
    });


    function verresultados(puntajes){
        let nulos = null;
            let puntaje = 0;
            let pregunta = 0;
       
            $(".preguntas select").each(function(){
                pregunta ++;
                if ($(this).val() == "") {
                    nulos = true;
                }else{
                    if (pregunta != 3 && $(this).val() == 1) {
                        puntaje++;
                    }

                    if (pregunta == 3 && $(this).val() == 0) {
                        puntaje++;
                    }
                }
        	});

            if (nulos) {
                toastr.warning('Por favor complete el cuestionario.');
            }else{
                let respuesta = [];
                for (let index = 0; index < puntajes.length; index++) {
                    const minimo = parseInt(puntajes[index]['minimo']);
                    const superior = parseInt(puntajes[index]['superior']);

                    if (parseInt(puntaje) >= minimo  && parseInt(puntaje) <= superior) {
                        respuesta = puntajes[index];
                    }
                }
                if (respuesta.length != 0) {
                    const mostrarResultado = document.getElementById("mostrarResultado");
                    mostrarResultado.innerHTML = '<p><strong>PUNTAJE :'+puntaje+'</strong></p>'
                    + '<input type="hidden" name="resultado" value="'+puntaje+'">'
                    + '<input type="hidden" name="resultado_id" value="'+respuesta["id"]+'">'
                    + '<table class="table">'
                    + '    <thead>'
                    + '    <tr>'
                    + '        <th scope="col">Puntaje</th>'
                    + '        <th scope="col">Grado de problema (por consumo de drogas)</th>'
                    + '        <th scope="col">Acción</th>'
                    + '    </tr>'
                    + '    </thead>'
                    + '    <tbody>'
                    + '    <tr>'
                    + '        <td>'+respuesta["minimo"]+' a '+respuesta["superior"]+'</td>'
                    + '        <td>'+respuesta["grado_problema"]+'</td>'
                    + '        <td>'+respuesta["nombre"]+'</td>'
                    + '    </tr>'
                    + '    </tbody>'
                    + '</table>';
                 
                }else{
                    toastr.warning('Puntaje no creado para el resultado cominiquese con el administrador del sistema.');
                }
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

    init_contadorTa("accion_desarrolla", "contador_accion_desarrolla", 4000);
    init_contadorTa("obs_patron_con", "contador_obs_patron_con", 4000);
    init_contadorTa("accion_curso", "contador_accion_curso", 4000);
    init_contadorTa("observacion", "contador_observacion", 4000);

    //evitar enviar formulario duplicado
    $('#formulario, input[type="submit"]').on('submit',function(){
        $('#formulario, input[type="submit"]').attr('disabled','true');
    })

</script>
