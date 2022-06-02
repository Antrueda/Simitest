<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function() {
        $('.select2').select2({
            language: "es"
        });
        let f_sis_entidad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("imatricula.servicio") }}',
                campoxxx: 'sis_servicio_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let dependen = '{{old("sis_depen_id")}}';
        if (dependen !== '') {
            f_sis_entidad('{{old("sis_servicio_id")}}');
            
        }
        $('#sis_depen_id').change(() => {
            f_sis_entidad(0);
        });
});
        

     
</script>
