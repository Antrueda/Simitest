<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        let sexonacimiento = '{{ $todoxxxx["usuariox"]->nnaj_sexo->prm_sexo_id }}';

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

        f_gestacion();
        $('#prm_estado_gesta').change(() => {
            f_gestacion();
        });
        
        function f_gestacion() {
            require = $("#prm_estado_gesta");
            if (require.val()== '227') {
                $('#edad_gesta').attr('disabled', false);
            }else{
                $('#edad_gesta').attr('disabled', true);
                $('#edad_gesta').val("");
            }
        }

        $('#edad_gesta').change(() => {
            semanas = parseInt($("#edad_gesta").val());
            if (!(semanas > 0 && semanas <= 40)) {
                $("#edad_gesta").val("");
                toastr.warning('Edad gestacional: debe ser mínimo 1 a máximo 40 semanas de gestación.');
            }
        });

        CalcumaImc();
        $('#peso,#talla').change(() => {
            CalcumaImc();
        });
        
        MostrarCc();
        $('#cintura_cc').change(() => {
            MostrarCc();
        });
        
        f_certificado();
        $('#prm_requi_certi').change(() => {
            f_certificado();
        });

        function f_certificado() {
            require = $("#prm_requi_certi");
            if (require.val()== '227') {
                $('#prm_certi_recomen_box').removeClass('d-none');
                $('#prm_certi_recomen').attr('disabled', false);
            }else{
                $('#prm_certi_recomen_box').addClass('d-none');
                $('#prm_certi_recomen').attr('disabled', true);
                $('#prm_certi_recomen').val("");

                $('#plan_alimentacion_box').addClass('d-none');
                $('#plan_alimentacion').attr('disabled', true);
                $('#plan_alimentacion').val("");

                $('#suplemen_nutri_box').addClass('d-none');
                $('#suplemen_nutri').attr('disabled', true);
                $('#suplemen_nutri').val("");
            }
        }

        f_planalimentacion();
        $('#prm_certi_recomen').change(() => {
            f_planalimentacion();
        });

        function f_planalimentacion() {
            require = $("#prm_certi_recomen");
            if (require.val()== '3011') {
                $('#plan_alimentacion_box').removeClass('d-none');
                $('#plan_alimentacion').attr('disabled', false);

                $('#suplemen_nutri_box').addClass('d-none');
                $('#suplemen_nutri').attr('disabled', true);
                $('#suplemen_nutri').val("");
            }else if(require.val()== '3012'){
                $('#suplemen_nutri_box').removeClass('d-none');
                $('#suplemen_nutri').attr('disabled', false);
            
                $('#plan_alimentacion_box').addClass('d-none');
                $('#plan_alimentacion').attr('disabled', true);
                $('#plan_alimentacion').val("");
            }else{
                $('#plan_alimentacion_box').addClass('d-none');
                $('#plan_alimentacion').attr('disabled', true);
                $('#plan_alimentacion').val("");

                $('#suplemen_nutri_box').addClass('d-none');
                $('#suplemen_nutri').attr('disabled', true);
                $('#suplemen_nutri').val("");
            }
        }


            //Circunferencia de cintura mostrar resultado
        function MostrarCc(){
            let cc = parseFloat($("#cintura_cc").val());
            if (Number.isNaN(cc)) {
                return;
            }
            //para sexo nacimiento hombre
            if (sexonacimiento == 20) {
                if (cc >= 90) {
                    $("#resultado_cc").html('<div class="bg-danger"><center>obesidad abdominal</center></div>');
                } else {
                    $("#resultado_cc").html('<div class="bg-success"><center>Normal</center></div>');
                }
            }else if (sexonacimiento == 21) {
                if (cc >= 80) {
                    $("#resultado_cc").html('<div class="bg-danger"><center>obesidad abdominal</center></div>');
                } else {
                    $("#resultado_cc").html('<div class="bg-success"><center>Normal</center></div>');
                }
            }
            
        }
    });

    //calcumar IMC
    function CalcumaImc(){
        if ($("#peso").val() != '' && $("#talla").val() != '') {
            let peso = parseFloat($("#peso").val());
            let talla = parseFloat($("#talla").val());
            let conversion_tallam = (talla/100);

            let imc = (peso/(Math.pow(conversion_tallam, 2))).toFixed(1);
            $("#mostrar_imc").html(imc);
            
            if (imc <= 18.4) {
                $("#resultado_imc").html('<div class="bg-info"><center>Delgadez</center></div>');
            }else if(imc <= 24.9){
                $("#resultado_imc").html('<div class="bg-success"><center>Normal</center></div>');
            }else if(imc <= 29.9){
                $("#resultado_imc").html('<div class="bg-warning"><center>Sobrepeso</center></div>');
            }else if(imc <= 34.9){
                $("#resultado_imc").html('<div class="bg-danger"><center>Obesidad I</center></div>');
            }else if(imc <= 39.9){
                $("#resultado_imc").html('<div class="bg-danger"><center>Obesidad II</center></div>');
            }else if(imc > 40){
                $("#resultado_imc").html('<div class="bg-danger"><center>Obesidad III</center></div>');
            }
        }
    }


    // funcion que valida maximo de cifras  y maximo de decimales
    function enforceNumberValidation(ele) {
        if ($(ele).val() <= 0) {
            $(ele).val("")
            return;
        }
        if ($(ele).data('decimal') != null) {
            // found valid rule for decimal
            var decimal = parseInt($(ele).data('decimal')) || 0;
            var n_cifras = parseInt($(ele).data('cifras')) || 0;

            var val = $(ele).val();

            //cifras
            let cifras = val.split('.');
            if (cifras[0].length > n_cifras) {
                $(ele).val(cifras[0].substr(0, n_cifras));
            }
            //decimales
            if (decimal > 0) {
                var splitVal = val.split('.');
                if (splitVal.length == 2 && splitVal[1].length > decimal) {
                    // user entered invalid input
                    $(ele).val(splitVal[0] + '.' + splitVal[1].substr(0, decimal));
                }
            } else if (decimal == 0) {
                // do not allow decimal place
                var splitVal = val.split('.');
                if (splitVal.length > 1) {
                    // user entered invalid input
                    $(ele).val(splitVal[0]); // always trim everything after '.'
                }
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

    init_contadorTa("observacion", "contador_observacion", 4000);
    init_contadorTa("plan_alimentacion", "contador_plan_alimentacion", 4000);

    //evitar enviar formulario duplicado
    $('#formulario, input[type="submit"]').on('submit',function(){
        $('#formulario, input[type="submit"]').attr('disabled','true');
    })

</script>
