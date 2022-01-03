<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function() {
        $('.select2').select2({
            language: "es"
        });
        let f_eda_presaber = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    asignatu: $('#eda_asignatu_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route($todoxxxx["permisox"].".presaber",$todoxxxx["routexxx"]) }}',
                campoxxx: 'eda_presaber_id',
                mensajex: 'Exite un error al cargar los presaberes de la asignatura'
            }
            f_comboGeneral(dataxxxx);
        }

        let dependen = '{{old("eda_asignatu_id")}}';
        if (dependen !== '') {
            f_eda_presaber('{{old("eda_presaber_id")}}');

        }
        $('#eda_asignatu_id').change(() => {
            f_eda_presaber(0);
        });
});



</script>
