<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    var table = '';
    $(document).ready(function() {
        $('#i_prm_recibe_medicina_id').change(function() {
            $('#s_medicamento').val('')
            $('#s_medicamento').attr("disabled", $(this).val() == 227 ? false : true)
        });

        var regisalu = function(valuexxx, selectep) {
            $("#sis_entidad_salud_id").empty();
            $.ajax({
                url: "{{ route('ajaxx.regimensalud') }}",
                data: {
                    _token: $("input[name='_token']").val(),
                    'padrexxx': valuexxx
                },
                type: 'POST',
                dataType: 'json',
                success: function(json) {
                    $.each(json[0].entidadx, function(i, data) {
                        var selected = '';
                        if (selectep == data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#sis_entidad_salud_id').append('<option ' + selected + '  value="' + data.valuexxx + '">' + data.optionxx + '</option>')

                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var prmresal = "{{old('i_prm_regimen_salud_id')}}";
        if (prmresal != '') {
            regisalu(prmresal, "{{old('sis_entidad_salud_id')}}");
        }
        $("#i_prm_regimen_salud_id").change(function() {
            regisalu($(this).val(), '');
        });

        var f_dataxxx = function(campoxxx, dataxxxx, selectep) {
            $.each(dataxxxx, function(i, data) {
                var selected = '';
                if (selectep == data.valuexxx) {
                    selected = 'selected';
                }
                $('#' + campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
            });
        }
        var f_discapacidad = function(valuexxx, discapac, certific, independ) {
            $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id").empty();
            $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id").append('<option value="">Seleccione</>')
            if (valuexxx != '') {
                $.ajax({
                    url: "{{ route('ajaxx.discapacitado') }}",
                    data: {
                        _token: $("input[name='_token']").val(),
                        'padrexxx': valuexxx
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(json) {
                        if (json[0].discapac[0].valuexxx == 1) {
                            $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id").empty();
                        }
                        f_dataxxx('i_prm_tipo_discapacidad_id', json[0].discapac, discapac);
                        f_dataxxx('i_prm_tiene_cert_discapacidad_id', json[0].certific, certific);
                        f_dataxxx('i_prm_disc_perm_independencia_id', json[0].independ, independ);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }
        var tiedisca = "{{old('i_prm_tiene_discapacidad_id')}}";
        if (tiedisca != '') {
            f_discapacidad(tiedisca, "{{old('i_prm_tipo_discapacidad_id')}}", "{{old('i_prm_tiene_cert_discapacidad_id')}}", "{{old('i_prm_disc_perm_independencia_id')}}");
        }
        $("#i_prm_tiene_discapacidad_id").change(function() {
            f_discapacidad($(this).val(), '', '', '');
        });
    });
</script>
