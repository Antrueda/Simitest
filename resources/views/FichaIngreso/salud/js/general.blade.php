<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    var table = '';
    $(document).ready(function() {
        $('#prm_recimedi_id').change(function() {
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
        var prmresal = "{{old('prm_regisalu_id')}}";
        if (prmresal != '') {
            regisalu(prmresal, "{{old('sis_entidad_salud_id')}}");
        }
        $("#prm_regisalu_id").change(function() {
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
            $("#prm_tipodisca_id, #prm_tiecedis_id, #prm_dispeind_id").empty();
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
                            $("#prm_tipodisca_id, #prm_tiecedis_id, #prm_dispeind_id").empty();
                        }
                        f_dataxxx('prm_tipodisca_id', json[0].discapac, discapac);
                        f_dataxxx('prm_tiecedis_id', json[0].certific, certific);
                        f_dataxxx('prm_dispeind_id', json[0].independ, independ);
                        $("#prm_discausa_id option[value=1269]").attr("selected",true);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }
        var tiedisca = "{{old('prm_tiendisc_id')}}";
        if (tiedisca != '') {
            f_discapacidad(tiedisca, "{{old('prm_tipodisca_id')}}", "{{old('prm_tiecedis_id')}}", "{{old('prm_dispeind_id')}}");
        }
        $("#prm_tiendisc_id").change(function() {
            f_discapacidad($(this).val(), '', '', '');
        });
    });
</script>
