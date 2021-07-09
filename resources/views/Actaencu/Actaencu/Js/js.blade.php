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
                url: '{{ route('actaencuGetUPZs') }}',
                data: data,
                success(response) {
                    console.log(response);
                    $('#sis_upz_id').attr('disabled', false);
                    $.each(response, (index, value) => {
                        $('#sis_upz_id').append(new Option(value, index));
                    });
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
                url: '{{ route('actaencuGetBarrio') }}',
                data: data,
                success(response) {
                    console.log(response);
                    $('#sis_barrio_id').attr('disabled', false);
                    $.each(response, (index, value) => {
                        $('#sis_barrio_id').append(new Option(value, index));
                    });
                }
            });
        });

        $('#prm_accion_id').change(() => {
            $('#prm_actividad_id').empty();
            let data = {
                prm_accion_id: $('#prm_accion_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route('actaencuGetActividades') }}',
                data: data,
                success(response) {
                    console.log(response)
                    $('#prm_actividad_id').attr('disabled', false);
                    $.each(response, (index, value) => {
                        $('#prm_actividad_id').append(new Option(value, index));
                    });
                }
            });
        });
    });
</script>
