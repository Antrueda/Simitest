<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $() => {
        let dependen = '{{old("sis_depen_id")}}';
        let f_sis_depen = (selected) => {
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

        if (dependen !== '') {
            f_sis_depen('{{old("sis_servicio_id")}}');
            f_respoupi('{{old("respoupi_id")}}')
        }

        $('.select2').select2({
            language: "es"
        });
    }
</script>
