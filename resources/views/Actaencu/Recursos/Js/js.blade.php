<script>

    $(document).ready(() => {
        $('.select2').select2({
            language: "es"
        });

        var f_campos = function(dataxxxx) {
            $.ajax({
                url: "{{ route($todoxxxx['permisox'].'.reculist') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    if (dataxxxx.campoxxx == 'prm_trecurso_id') { // cargar los recurso de acuerdo tipo de recurso
                        $(json.campoxxx).empty();
                        $.each(json.comboxxx, function(i, d) {
                            $(json.campoxxx).append('<option ' + d.selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
                        });
                    }else{ // cargar la unidad de medida del recurso seleccionado
                        $(json.campoxxx).text(json.dataxxxx);
                    }

                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar los recursos del acta de encuentro');
                },
            });
        }
        $('.recursos').change(function() {
            f_campos({
                padrexxx: $(this).val(),
                selected: [0],
                campoxxx: $(this).prop('id'),
                actaencu: <?= $todoxxxx['actaencu']?>
            });
        });
    });

    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
