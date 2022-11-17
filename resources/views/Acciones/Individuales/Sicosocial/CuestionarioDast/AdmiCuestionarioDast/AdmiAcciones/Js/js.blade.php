<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>


    maximoxx = 4000;
    $(document).ready(() => {
        countCharts('descripcion');
        $('.select2').select2({
            language: "es"
        });
    });

    $('#sis_esta_id').change(function() {
        f_motivos_usuario({
            dataxxxx: {
                estadoid: $(this).val(),
            },
            selected: '',
            routexxx: "{{ route($todoxxxx['routxxxx'].'.motitseg')}}"
        })
    });
    
</script>
