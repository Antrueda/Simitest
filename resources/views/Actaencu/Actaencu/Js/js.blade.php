<script>
    maximoxx = 4000;
    $(document).ready(() => {
        countCharts('objetivo');
        countCharts('desarrollo_actividad');
        countCharts('metodologia');
        countCharts('observaciones');
        var f_sis_upz = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencu.upzacten") }}',
                campoxxx: 'sis_upz_id',
                mensajex: 'Exite un error al cargar las upzs'
            }
            f_comboGeneral(dataxxxx);
            $('#sis_barrio_id').empty();
        }

        var f_sis_barrio = function(selected, upzxxxxx) {
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    sis_upz_id: upzxxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencu.barrioae") }}',
                campoxxx: 'sis_barrio_id',
                mensajex: 'Exite un error al cargar los barrios'
            }
            f_comboGeneral(dataxxxx);
        }

        $('#sis_localidad_id').change(() => {
            f_sis_upz(0);
        });

        let localida = '{{old("sis_localidad_id")}}';
        let upzxxxxx = '{{old("sis_upz_id")}}';
        let barrioxx = '{{old("sis_barrio_id")}}';

        if (localida !== '') {
            f_sis_upz(upzxxxxx);
        }

        if (upzxxxxx !== '') {
            f_sis_barrio(barrioxx, upzxxxxx);
        }

        $('#sis_upz_id').change(() => {
            let upzxxxxx = $('#sis_upz_id').val();
            f_sis_barrio(0, upzxxxxx);
        });

        let f_prm_actividad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#prm_accion_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencuGetActividades") }}',
                campoxxx: 'prm_actividad_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }
        let accionxx = '{{old("prm_accion_id")}}';
        if (accionxx !== '') {
            f_prm_actividad('{{old("prm_actividad_id")}}');
        }

        $('#prm_accion_id').change(() => {
            f_prm_actividad(0);
        });
        let f_sis_depen = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencu.servicio") }}',
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
                urlxxxxx: '{{ route("actaencu.responsa") }}',
                campoxxx: 'respoupi_id',
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
                urlxxxxx: '{{ route("actaencu.contrati") }}',
                campoxxx: 'user_funcontr_id',
                mensajex: 'Exite un error al cargar el funcionario contratista'
            }
            f_comboGeneral(dataxxxx);
        }
        let f_contdili = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencu.contrati") }}',
                campoxxx: 'user_contdili_id',
                mensajex: 'Exite un error al cargar el primer responsable'
            }
            f_comboGeneral(dataxxxx);
        }
        let dependen = '{{old("sis_depen_id")}}';
        if (dependen !== '') {
            f_sis_depen('{{old("sis_servicio_id")}}');
            f_respoupi('{{old("respoupi_id")}}')
            f_contrati('{{old("user_funcontr_id")}}')
            f_contdili('{{old("user_contdili_id")}}')
        }
        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            f_respoupi(0);
            f_contrati(0);
            f_contdili(0);
        });

        $('.select2').select2({
            language: "es",
            // theme: "flat",
        });

        let anioxxxx = <?= $todoxxxx['actualxx'][0] ?>;
        let mesxxxxx = <?= $todoxxxx['actualxx'][1] - 1 ?>;
        let diaxxxxx = <?= $todoxxxx['actualxx'][2] ?>;


        $('#fechdili').mask('0000-00-00');
        let datepick = $("#fechdili");
        datepick.datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: new Date(anioxxxx, mesxxxxx, diaxxxxx),
            maxDate: new Date(<?= $todoxxxx['actualxx'][0] ?>, <?= $todoxxxx['actualxx'][1] - 1 ?>, <?= $todoxxxx['actualxx'][2] ?>),
        }).on('change', function() {
            if ($("#sis_depen_id").val() < 1) {
                alert('Primero debe seleccionar una Upi/Dependencia')
                $(this).val('')

            } else {

            }

        });
        let f_upi = function() {
            anioxxxx = <?= $todoxxxx['actualxx'][0] ?>;
            mesxxxxx = <?= $todoxxxx['actualxx'][1] - 1 ?>;
            diaxxxxx = <?= $todoxxxx['actualxx'][2] ?>;
            let padrexxx = parseInt($('#sis_depen_id').val());
            if (padrexxx > 0) {
                $.ajax({
                    url: '{{ route($todoxxxx["permisox"].".tiemcarg") }}',
                    data: {
                        _token: "{{ csrf_token() }}",
                        padrexxx: padrexxx,
                    },
                    type: 'POST',
                    dataType: 'json',
                    async: false,
                    success: function(json) {
                        anioxxxx = json.anioxxxx;
                        mesxxxxx = json.mesxxxxx;
                        diaxxxxx = json.diaxxxxx;
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema al buscar los datos de la Upi/Dependencia');
                    },
                });
            }
            datepick.datepicker('option', {
                minDate: new Date(anioxxxx, mesxxxxx, diaxxxxx)
            })
        }
        f_upi();
        $('#sis_depen_id').change(function() {
            f_upi();
        });
    });
</script>
