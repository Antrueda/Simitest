<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        let estado_matricula = $('#prm_estado_matri');
        let old_estado_matricula = '{{old("prm_estado_matri")}}';
        let motivo_retiro = $('#prm_motivo_reti');

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
                    f_motivos(0);
                }else{
                    ocultarFieldMotivo();
                    ocultarFieldAplazado();
                }
            }
            if (campo=="aplazados") {
                if (estado_matricula.val() == 2775 && motivo_retiro.val()== 2777) {
                    $('#prm_aplazado_field').removeClass('d-none');
                    $('#prm_mot_aplazad').attr('disabled', false);
                    f_motivos_aplazado(0);
                }else{
                    ocultarFieldAplazado();
                }
            }
            
        }

        // cuando cargue o cambien estado de la matricula
        f_estado_matricula('motivos');
        $('#prm_estado_matri').change(() => {
            f_estado_matricula('motivos');
        });

        $('#prm_motivo_reti').change(() => {
            f_estado_matricula('aplazados');
        });

        // if (old_estado_matricula !== '') {
        //     f_sis_depen(servicio);
        //     f_respoupi('{{old("user_res_id")}}');
        //     f_contrati('{{old("user_fun_id")}}')

        //     if (servicio !== '') {
        //         if (gradoxxx !== '') {
        //             f_grado(gradoxxx, dependen, servicio);
        //         } else {
        //             f_grado(0, dependen, servicio);
        //         }
        //         if (grupoxxx !== '') {
        //             f_grupo(grupoxxx, dependen, servicio);
        //         } else {
        //             f_grupo(0, dependen, servicio);
        //         }
        //     }
            
        //     if (tipoacti !== '') {
        //         if (actividade !== '') {
        //             f_actividad(actividade, dependen, tipoacti);
        //         } else {
        //             f_actividad(0, dependen, tipoacti);
        //         }
        //     }

        //     if (tipocurso !== '') {
        //         if (curso !== '') {
        //             f_curso(curso,tipocurso);
        //         } else {
        //             f_curso(0,tipocurso);
        //         }
        //     }
        //     fechapuede(dependen);
        // }
       
    });
  
</script>
