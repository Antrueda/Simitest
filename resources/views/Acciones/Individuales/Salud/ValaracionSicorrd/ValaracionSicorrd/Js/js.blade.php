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
       
        f_sintomas();
        $('#list_sintomas select').change(() => {
            f_sintomas();
        });

        //contar sintomas de estado ansiedad
        function f_sintomas() {
            let nulos = null;
            let s_siquica= 0;
            let s_somatica= 0;
            let total=0;

            $("#list_sintomas select").each(function(){
                if ($(this).val() == "") {
                    nulos = true;
                }
        	});

            if (nulos) {
                const mostrarResultado = document.getElementById("alert_sintoma");
                mostrarResultado.innerHTML = '<div class="alert alert-primary" role="alert">'
                    +'Complete los items de SÍNTOMAS DE LOS ESTADOS DE ANSIEDAD PSÍQUICA Y SÓMATICA para ver los resultados.'
                    +'</div>';
                $('.field_resultado').addClass('d-none');
            }else{
                $('.field_resultado').removeClass('d-none');
                const mostrarResultado = document.getElementById("alert_sintoma");
                mostrarResultado.innerHTML = '';

                let pregunta = 0;
                $("#list_sintomas select").each(function(){
                    pregunta ++;
                    if ((pregunta >= 1 && pregunta <= 6) || pregunta == 14) {
                        s_siquica = s_siquica + parseInt($(this).val());
                    }else if(pregunta >= 7 && pregunta <= 13){
                        s_somatica = s_somatica + parseInt($(this).val());
                    }
        	    });

                const t_siquica = document.getElementById("t_siquica");
                const t_somatica = document.getElementById("t_somatica");
                const t_total = document.getElementById("t_total");
                const nivel_ansiedad = document.getElementById("nivel_ansiedad");


                t_siquica.innerHTML =s_siquica;
                t_somatica.innerHTML =s_somatica;
                total = s_siquica + s_somatica
                t_total.innerHTML = total;
                nivel_ansiedad.innerHTML = NivelAnsiedad(total);
            }
        }

         
        f_certificados();
        $('#prm_requi_certi').change(() => {
            f_certificados();
        });
        

        $('.select2-container').css('width', '100%');
    });

    //devordel resultado nivel de ansiedad
    function NivelAnsiedad(valor){
        if (valor >= 0 && valor <= 7) {
            return 'No Ansioso/a: 0 - 7';
        }
        if (valor >= 8 && valor <= 13) {
            return 'Ansiedad Ligera: Menor: 8 - 13';
        }
        if (valor >= 14 && valor <= 18) {
            return 'Ansiedad Moderada: 14 - 18';
        }
        if (valor >= 19 && valor <= 22) {
            return 'Ansiedad Severa: 19 - 22';
        }
        if (valor >= 23) {
            return 'Ansiedad muy Severa: > 23';
        }
    }

    function ocultarFieldsCertificado() {
        $('#requi_certi_caja').addClass('d-none');
        $('#requi_certi_recomend').attr('disabled', true);
    }
    
    function f_certificados() {
        let requi_certificado = $("#prm_requi_certi");
        if (requi_certificado.val()== '227') {
            $('#requi_certi_caja').removeClass('d-none');
            $('#requi_certi_recomend').attr('disabled', false);
        }else{
            ocultarFieldsCertificado();
            $('#requi_certi_recomend').val('');
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

    init_contadorTa("concepto_rrd", "contador_concepto_rrd", 4000);
    init_contadorTa("observacion", "contador_observacion", 4000);
    init_contadorTa("requi_certi_recomend", "contador_requi_certi_recomend", 4000);

</script>
