<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        let f_modulo = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#cursos_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("uniasigna.cursomodulo") }}',
                campoxxx: 'modulo_id',
                mensajex: 'Exite un error al cargar las unidades del modulo'
            }
            f_comboGeneral(dataxxxx);
        }
        $('#cursos_id').change(() => {
            f_modulo(0);
        });

        let dependen = '{{old("cursos_id")}}';
        if (dependen !== '') {
            f_modulo('{{old("modulo_id")}}');
        }
    });
</script>