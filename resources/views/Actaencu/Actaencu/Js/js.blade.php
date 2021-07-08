<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        $("#s_doc_adjunto_ar").change(function() {
            var fichero_seleccionado = $(this).val();
            var nombre_fichero_seleccionado = fichero_seleccionado.replace(/.*[\/\\]/, ''); //Eliminamos el path hasta el fichero seleccionado
            $("#docontacto").text(nombre_fichero_seleccionado);
        });

        $('#sis_localidad_id').change(() => {
            $('#sis_upz_id').empty();
            $('#sis_barrio_id').empty();
            let data = {
                sis_localidad_id: $('#sis_localidad_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '',
                data: data,
                success(response) {
                    console.log(response);
                }
            });
        });

        $('#sis_upz_id').change(() => {
            $('#sis_barrio_id').empty();
            let data = {
                sis_localidad_id: $('#sis_localidad_id').val(),
                sis_upz_id: $('#sis_upz_id')
            }
            $.ajax({
                method: 'GET',
                url: '',
                data: data,
                success(response) {
                    console.log(response);
                }
            });
        });
    });
</script>
