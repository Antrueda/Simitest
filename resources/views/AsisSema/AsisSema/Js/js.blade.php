<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(() => {
        let dependen = '{{old("sis_depen_id")}}';
        let servicio = '{{old("sis_servicio_id")}}';

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

        let f_grado = (selected, upixxxxx,padrexxx) => {
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

        let f_grupo = (selected, upixxxxx,padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grupo") }}',
                campoxxx: 'prm_grupo_id',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }

        if (dependen !== '') {
            f_sis_depen(servicio);
            f_respoupi('{{old("respoupi_id")}}');
            if (servicio !== '') {
                f_grado('{{old("eda_grados_id")}}', dependen, servicio);
                f_grupo('{{old("prm_grupo_id")}}', dependen, servicio);
            }
        }

        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            f_respoupi(0);
        });

        $('#sis_servicio_id').change(() => {
            let servicio = $('#sis_servicio_id ').find(":selected").val();
            f_grado(0, dependen, servicio);
            f_grupo(0, dependen, servicio);
        })

        $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #grupo_id_field').addClass('d-none');
        $('#prm_programa_id, #prm_convenio_id, #actividade_id, #prm_grupo_id').attr('disabled', true);

        $('#prm_actividad_id').change(() => {
            let selected = $('#prm_actividad_id ').find(":selected");

            if (selected.text() === 'Seleccione') {
                $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #grupo_id_field, #grado_id_field')
                    .addClass('d-none');
                $('#prm_programa_id, #prm_convenio_id, #actividade_id, #prm_grupo_id, #eda_grados_id').attr('disabled', true);
            } else {
                $('#grupo_id_field').removeClass('d-none');
                $('#prm_grupo_id').attr('disabled', false);
            }

            switch (selected.val()) {
                case '2738':
                    $('#grado_id_field').removeClass('d-none');
                    $('#eda_grados_id').attr('disabled', false);
                    $('#prm_convenio_id_field, #actividade_id_field, #prm_programa_id_field').addClass('d-none');
                    $('#prm_convenio_id, #actividade_id, #prm_programa_id').attr('disabled', true);
                    break;
                case '2739':
                    $('#prm_programa_id_field').removeClass('d-none');
                    $('#prm_programa_id').attr('disabled', false);
                    $('#prm_convenio_id_field, #actividade_id_field').addClass('d-none');
                    $('#prm_convenio_id, #actividade_id').attr('disabled', true);
                    break;
                case '2740':
                    $('#prm_convenio_id_field').removeClass('d-none');
                    $('#prm_convenio_id').attr('disabled', false);
                    $('#prm_programa_id_field, #actividade_id_field').addClass('d-none');
                    $('#prm_programa_id, #actividade_id').attr('disabled', true);
                    break;
                case '2741':
                    $('#actividade_id_field').removeClass('d-none');
                    $('#actividade_id').attr('disabled', false);
                    $('#prm_programa_id_field, #prm_convenio_id_field').addClass('d-none');
                    $('#prm_programa_id, #prm_convenio_id').attr('disabled', true);
                    break;
            }
        });

        $('.select2').select2({
            language: "es"
        });

        setTimeout(() => {
            $('.select2-container').css('width', '100%');
        }, 1000);
    });
</script>
