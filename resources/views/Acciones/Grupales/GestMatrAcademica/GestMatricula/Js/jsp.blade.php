<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        let estado_matricula = $('#prm_estado_matri');
        let old_estado_matricula = '{{old("prm_estado_matri")}}';
        let old_motivo_retiro = '{{old("prm_motivo_reti")}}';
        let old_motivo_aplaza = '{{old("prm_mot_aplazad")}}';
        let motivo_retiro = $('#prm_motivo_reti');
        let motivo_aplazado = $('#prm_mot_aplazad');

        $('.select2').select2({
            language: "es"
        });

        setTimeout(() => {
            $('.select2-container').css('width', '100%');
        }, 1000);

        let f_motivos = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("gestmaca.motivos") }}',
                campoxxx: 'prm_motivo_reti',
                mensajex: 'Exite un error al cargar los motivos de retiro'
            }
            f_comboGeneral(dataxxxx);
        }
        let f_motivos_aplazado = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("gestmaca.aplazado") }}',
                campoxxx: 'prm_mot_aplazad',
                mensajex: 'Exite un error al cargar los motivos de aplazado'
            }
            f_comboGeneral(dataxxxx);
        }

        function ocultarFieldMotivo() {
            $('#prm_motivo_field')
                    .addClass('d-none');
            $('#prm_motivo_reti').attr('disabled', true);
        }
        function ocultarFieldAplazado() {
            $('#prm_aplazado_field')
                    .addClass('d-none');
            $('#prm_mot_aplazad').attr('disabled', true);
        }

        function f_estado_matricula(campo) {
            if (campo=="motivos") {
                if (estado_matricula.find(':selected').text() === 'Seleccione') {
                    ocultarFieldMotivo();
                }

                if (estado_matricula.val() == 2775) {
                    $('#prm_motivo_field').removeClass('d-none');
                    $('#prm_motivo_reti').attr('disabled', false);
                    
                }else{
                    ocultarFieldMotivo();
                    ocultarFieldAplazado();
                }
            }
            if (campo=="aplazados") {
                if (estado_matricula.val() == 2775 && motivo_retiro.val()== 2777) {
                    $('#prm_aplazado_field').removeClass('d-none');
                    $('#prm_mot_aplazad').attr('disabled', false);
                }else{
                    ocultarFieldAplazado();
                }
            }
            
        }

        f_estado_matricula('motivos');
        f_estado_matricula('aplazados');
        // cuando cargue o cambien estado de la matricula
        $('#prm_estado_matri').change(() => {
            f_estado_matricula('motivos');
            f_motivos(0);
        });

        $('#prm_motivo_reti').change(() => {
            f_estado_matricula('aplazados');
            f_motivos_aplazado(0);
        });

        if (old_estado_matricula !== '') {
            if (old_motivo_retiro !== '') {
                f_motivos(old_motivo_retiro);
            }else{
                f_motivos(0);
            }
            f_estado_matricula('motivos');

            if (old_motivo_retiro !== '') {
                if (old_estado_matricula == 2775 && old_motivo_retiro == 2777) {
                    $('#prm_aplazado_field').removeClass('d-none');
                    $('#prm_mot_aplazad').attr('disabled', false);
                    if (old_motivo_aplaza !== '') {
                        f_motivos_aplazado(old_motivo_aplaza);
                    }else{
                        f_motivos_aplazado(0);
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

        init_contadorTa("descripcion", "contador_descripcion", 4000);

    });
    //evitar enviar formulario duplicado
    $('#formulario, input[type="submit"]').on('submit',function(){
        $('#formulario, input[type="submit"]').attr('disabled','true');
    })
</script>
