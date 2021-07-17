<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    function countCharts(id) {
        let max = 4000;
        let text = $('#' + id).val();
        let count = text.length;
        if (count >= max) {
            $('#' + id).val(text.slice(0, max - 1));
            $('#' + id + '_char_counter').text('4000/4000');
        } else {
            $('#' + id + '_char_counter').text(count + '/4000');
        }
    }

    $(document).ready(() => {
        countCharts('objetivo');
        countCharts('desarrollo_actividad');
        countCharts('metodologia');
        countCharts('observaciones');

        var f_sis_upz= function(selected){
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    selected:[selected]
                },
                urlxxxxx: '{{ route("actaencuGetUPZs") }}',
                campoxxx: 'sis_upz_id',
                mensajex:'Exite un error al cargar las upzs'
            }
            f_comboGeneral(dataxxxx);
            $('#sis_barrio_id').empty();
        }

        var f_sis_barrio= function(selected,upzxxxxx){
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    sis_upz_id: upzxxxxx,
                    selected:[selected]
                },
                urlxxxxx: '{{ route("actaencuGetBarrio") }}',
                campoxxx: 'sis_barrio_id',
                mensajex:'Exite un error al cargar los barrios'
            }
            console.log(dataxxxx)
            f_comboGeneral(dataxxxx);
        }
        $('#sis_localidad_id').change(() => {
            f_sis_upz(0);
        });

        let upzxxxxx = '{{old("sis_upz_id")}}';
        let barrioxx = '{{old("sis_barrio_id")}}';
        if (upzxxxxx !== '') {
            f_sis_upz(upzxxxxx);
        }
        if (upzxxxxx !== '') {
            f_sis_barrio(barrioxx,upzxxxxx);
        }

        $('#sis_upz_id').change(() => {
            let upzxxxxx = $('#sis_upz_id').val();
            f_sis_barrio(0,upzxxxxx);
        });

        $('#prm_accion_id').change(() => {
            $('#prm_actividad_id').empty();
            let data = {
                prm_accion_id: $('#prm_accion_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route("actaencuGetActividades") }}',
                data: data,
                success(response) {
                    console.log(response)
                    $('#prm_actividad_id').attr('disabled', false);
                    $('#prm_actividad_id').append(new Option('Seleccione una', ''));
                    $.each(response, (index, value) => {
                        $('#prm_actividad_id').append(new Option(value, index));
                    });
                }
            });
        });

        $('#sis_depen_id').change(() => {
            $('#sis_servicio_id').empty();
            $('#respoupi_id').empty();
            let data = {
                sis_depen_id: $('#sis_depen_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route("actaencuGetServicios") }}',
                data: data,
                success(response) {
                    console.log(response);
                    $('#sis_servicio_id').attr('disabled', false);
                    $('#sis_servicio_id').append(new Option('Seleccione una', ''));
                    $.each(response.servicios, (index, value) => {
                        $('#sis_servicio_id').append(new Option(value, index));
                    });
                    $('#respoupi_id').append(new Option(response.responsable.name, response.responsable.id));
                    $('#respoupi_id').change();
                }
            });
        });

        $('.select2').select2({
            language: "es"
        });
    });
</script>
