<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(() => {
        let dependen = '{{old("sis_depen_id")}}';

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

        let f_respoupi = function(selected) {
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

        if (dependen !== '') {
            f_sis_depen('{{old("sis_servicio_id")}}');
            f_respoupi('{{old("respoupi_id")}}')
        }

        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            f_respoupi(0);
        });

        $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #grupo_id_field').addClass('d-none');
        $('#prm_programa_id, #prm_convenio_id, #actividade_id, #grupo_id').attr('disabled', true);

        $('#prm_actividad_id').change(() => {
            let selected = $('#prm_actividad_id ').find(":selected");

            if (selected.text() === 'Seleccione') {
                $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #grupo_id_field').addClass('d-none');
                $('#prm_programa_id, #prm_convenio_id, #actividade_id, #grupo_id').attr('disabled', true);
            } else {
                $('#grupo_id_field').removeClass('d-none');
                $('#grupo_id').attr('disabled', false);
            }

            switch (selected.val()) {
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
    });
</script>
