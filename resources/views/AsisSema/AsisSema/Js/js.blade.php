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

        $('#prm_actividad_id').change(() => {
            let selected = $('#prm_actividad_id ').find(":selected");
            if (selected.text() != 'Seleccione') {
                $('#grupo_id').removeClass('d-none');
                $('#grupo_id_field').attr('disabled', false);
            } else {
                $('#prm_programa_id_field').addClass('d-none');
                $('#prm_programa_id').attr('disabled', true);
                $('#prm_convenio_id_field').addClass('d-none');
                $('#prm_convenio_id').attr('disabled', true);
                $('#actividade_id_field').addClass('d-none');
                $('#actividade_id').attr('disabled', true);
                $('#grupo_id').addClass('d-none'),
                $('#grupo_id_field').attr('disabled', true);
            }
            if (selected.val() == 2739) {
                $('#prm_programa_id_field').removeClass('d-none');
                $('#prm_programa_id').attr('disabled', false);
                $('#prm_convenio_id_field').addClass('d-none');
                $('#prm_convenio_id').attr('disabled', true);
                $('#actividade_id_field').addClass('d-none');
                $('#actividade_id').attr('disabled', true);
            } else if (selected.val() == 2740) {
                $('#prm_programa_id_field').addClass('d-none');
                $('#prm_programa_id').attr('disabled', true);
                $('#prm_convenio_id_field').removeClass('d-none');
                $('#prm_convenio_id').attr('disabled', false);
                $('#actividade_id_field').addClass('d-none');
                $('#actividade_id').attr('disabled', true);
            } else if (selected.val() == 2741) {
                $('#prm_programa_id_field').addClass('d-none');
                $('#prm_programa_id').attr('disabled', true);
                $('#prm_convenio_id_field').addClass('d-none');
                $('#prm_convenio_id').attr('disabled', true);
                $('#actividade_id_field').removeClass('d-none');
                $('#actividade_id').attr('disabled', false);
            }
        })

        $('.select2').select2({
            language: "es"
        });
    });
</script>
