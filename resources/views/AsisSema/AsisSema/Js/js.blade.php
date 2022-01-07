<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(() => {
        let dependen = '{{old("sis_depen_id")}}';
        let servicio = '{{old("sis_servicio_id")}}';
        let grupoxxx = '{{old("prm_grupo_id")}}';
        let gradoxxx = '{{old("eda_grados_id")}}';
        let tipoacti = '{{ old("tipoacti_id") }}';
        let activida = $('#prm_actividad_id ').find(":selected");

        let f_sis_depen = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.servicio") }}',
                campoxxx: 'sis_servicio_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_respoupi = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.responsa") }}',
                campoxxx: 'user_res_id',
                mensajex: 'Exite un error al cargar el responsable de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_contrati = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.contrati") }}',
                campoxxx: 'user_fun_id',
                mensajex: 'Exite un error al cargar el funcionario contratista'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_grado = (selected, upixxxxx, padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    cabecera: true,
                    upixxxxx: upixxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grado") }}',
                campoxxx: 'eda_grados_id',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_grupo = (selected, upixxxxx, padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grupo") }}',
                campoxxx: 'prm_grupo_id',
                mensajex: 'Exite un error al cargar los grupos'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_actividad = (selected, upixxxxx, tipoacti) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoacti: tipoacti,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.actividad") }}',
                campoxxx: 'actividade_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_nom_actividad() {
            if (activida.text() === 'Seleccione') {
                $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field, #grupo_id_field, #grado_id_field')
                    .addClass('d-none');
                $('#prm_programa_id, #prm_convenio_id, #actividade_id, #tipoacti_id, #prm_grupo_id, #eda_grados_id').attr('disabled', true);
            } else {
                $('#grupo_id_field').removeClass('d-none');
                $('#prm_grupo_id').attr('disabled', false);
            }

            switch (activida.val()) {
                case '2738':
                    $('#grado_id_field').removeClass('d-none');
                    $('#eda_grados_id').attr('disabled', false);
                    $('#prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field, #prm_programa_id_field').addClass('d-none');
                    $('#prm_convenio_id, #actividade_id, #tipoacti_id, #prm_programa_id').attr('disabled', true);
                    break;
                case '2739':
                    $('#prm_programa_id_field').removeClass('d-none');
                    $('#prm_programa_id').attr('disabled', false);
                    $('#prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field').addClass('d-none');
                    $('#prm_convenio_id, #actividade_id, #tipoacti_id').attr('disabled', true);
                    break;
                case '2740':
                    $('#prm_convenio_id_field').removeClass('d-none');
                    $('#prm_convenio_id').attr('disabled', false);
                    $('#prm_programa_id_field, #actividade_id_field, #tipoacti_id_field').addClass('d-none');
                    $('#prm_programa_id, #actividade_id, #tipoacti_id').attr('disabled', true);
                    break;
                case '2741':
                    $('#actividade_id_field, #tipoacti_id_field').removeClass('d-none');
                    $('#actividade_id, #tipoacti_id').attr('disabled', false);
                    $('#prm_programa_id_field, #prm_convenio_id_field').addClass('d-none');
                    $('#prm_programa_id, #prm_convenio_id').attr('disabled', true);
                    break;
            }
        }

        if (dependen !== '') {
            f_sis_depen(servicio);
            f_respoupi('{{old("respoupi_id")}}');

            if (servicio !== '') {
                if (gradoxxx !== '') {
                    f_grado(gradoxxx, dependen, servicio);
                } else {
                    f_grado(0, dependen, servicio);
                }
                if (grupoxxx !== '') {
                    f_grupo(grupoxxx, dependen, servicio);
                } else {
                    f_grupo(0, dependen, servicio);
                }
            }
            
            if (tipoacti !== '') {
                if (actividad !== '') {
                    f_actividad(actividad, dependen, tipoacti);
                } else {
                    f_actividad(0, dependen, tipoacti);
                }
            } else if (actividad !== '') {
                f_actividad(actividad, dependen, 0);
            }
        }

        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            f_respoupi(0);
        });

        $('#sis_servicio_id').change(() => {
            let dependen = $('#sis_depen_id').find(":selected").val();
            let servicio = $('#sis_servicio_id').find(":selected").val();
            f_grado(0, dependen, servicio);
            f_grupo(0, dependen, servicio);
        })

        $('#tipoacti_id').change(() => {
            let tipoacti = $('#tipoacti_id').find(':selected').val();
            f_actividad(0, tipoacti);
        })

        $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field, #grupo_id_field').addClass('d-none');
        $('#prm_programa_id, #prm_convenio_id, #actividade_id, #tipoacti_id, #prm_grupo_id').attr('disabled', true);

        f_nom_actividad();

        $('#prm_actividad_id').change(() => {
            f_nom_actividad();
        });

        $('.select2').select2({
            language: "es"
        });

        setTimeout(() => {
            $('.select2-container').css('width', '100%');
        }, 1000);
    });
</script>
